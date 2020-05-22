<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Contracts\Cache\ItemInterface;
class StatisticController extends AbstractController
{
    const TOKEN = 'ffcd47a61fb7d059a3adcf25313e6195863f9e59b7b172211ffea3a7d3b9f180fc2d11c96c45488737b5c';

    /**
     * @Route("/statistic" )
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     * @throws \Psr\Cache\InvalidArgumentException
     */
    public function getStatisticPage(AuthenticationUtils $authenticationUtils)
    {
        $user = $this->getUser();
        $cache = new FilesystemAdapter("",30,"/var/www/personal-vk-account.ru/cache");
        $cacheName = 'static_page'.$user->getId();

        $value = $cache->getItem($cacheName);
        if(!empty($value->get())){
            return $value->get();
        }


        if ($authenticationUtils->getLastUsername() == null) {
            return $this->redirectToRoute("home");
        }

        $screenName = $user->getScreenName();
        $vkapi = new StatisticMethod();
        $userInfo = $vkapi->getUserInfo([$screenName], self::TOKEN);
        if ($userInfo == null) {
            return $this->render("errors/errorScreenName.html.twig",
                ['authentication' => $authenticationUtils->getLastUsername(),]);
        }
        $userId = $userInfo[0]->id;
        $activity = $vkapi->getListActivityTop5WithIdUser($userId, self::TOKEN);
        unset($activity['userId']);
        $allFriendsActivities = array();
        $friendsList = $vkapi->getUserFriends($userId, self::TOKEN);
        $friendsIds = [];

        foreach ($friendsList as $friendId) {
            sleep(0.5);
            $friendActivities = $vkapi->getListActivityTop5WithIdUser($friendId, self::TOKEN);
            if (isset($friendActivities)) {
                $allFriendsActivities[] = $friendActivities;
                $friendsIds[] = $friendActivities['userId'];
            }

            unset($friendActivities);
        }

        $friendsIdsSplit = array_chunk($friendsIds, 25);
        $friendsInfo = [];

        foreach ($friendsIdsSplit as $packOfFriends) {
            sleep(1);
            $friendsIdsString = implode(',', $packOfFriends);
            $vkFriends = $vkapi->getUsersInfoByIdsString($friendsIdsString, self::TOKEN);
            $friendsInfo = $friendsInfo + $vkFriends ?? [];
            unset($friendsIdsString, $vkFriends);
        }

        $friends = $this->findFriends($allFriendsActivities, $activity);

        foreach ($friends as &$friendsCategory) {
            foreach ($friendsCategory as $friendId => &$friend) {
                foreach ($friendsInfo as $singleFriendId => &$singleFriendInfo) {
                    if ((int)$friendId === (int)$singleFriendId) {
                        $friendsCategory[$friendId] = $singleFriendInfo;
                        unset($friendsInfo[$singleFriendId]);
                    }
                }
            }
        }

        $pageCode = $this->render("statistics.html.twig",
            [
                'authentication' => $authenticationUtils->getLastUsername(),
                'user' => $screenName,
                'activity' => $activity,
                'friends' => $friends,
            ]);

        $pageCache =  $cache->getItem($cacheName);
        $pageCache->set($pageCode);
        $cache->save($pageCache);

        return $pageCode;
    }

    public function findFriends($allFriendsActivities = array(), $listActivityMainUser = array())
    {

        $friends['friends'] = array();
        $friends['good'] = array();
        $friends['best'] = array();

        foreach ($allFriendsActivities as $singleFriendActivities) {
            $activitiesInCommon = count(array_intersect($listActivityMainUser, $singleFriendActivities));

            if ($activitiesInCommon >= 4) {
                $friends['best'][$singleFriendActivities['userId']] = [];
            } elseif ($activitiesInCommon === 3) {
                $friends['good'][$singleFriendActivities['userId']] = [];
            } elseif ($activitiesInCommon === 2) {
                $friends['friends'][$singleFriendActivities['userId']] = [];
            }
        }

        return $friends;
    }
}