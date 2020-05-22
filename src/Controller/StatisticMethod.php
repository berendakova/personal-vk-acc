<?php


namespace App\Controller;


class StatisticMethod
{

    public function getUserInfo($screenName, $token)
    {

        $params = [
            'user_ids' => $screenName,
            'fields' => 'id,crop_photo',
            'name_case' => 'nom',
            'access_token' => $token,
            'v' => 5.92
        ];

        $uri = 'http://api.vk.com/method/users.get?' . http_build_query($params);
        $result = file_get_contents($uri);
        $array = json_decode($result);

        return $array->response ?? null;
    }

    public function getUsersInfoByIdsString(string $usersIds, string $token)
    {
        $params = [
            'user_ids' => $usersIds,
            'fields' => [
                'id',
                'first_name',
                'last_name',
                'crop_photo'
            ],
            'name_case' => 'nom',
            'access_token' => $token,
            'v' => 5.92
        ];

        $uri = 'http://api.vk.com/method/users.get?' . http_build_query($params);
        $response = file_get_contents($uri);
        $result = json_decode($response);

        if (isset($result->response)) {
            $usersInfo = [];

            foreach ($result->response as $user) {
                $usersInfo[$user->id]['firstName'] = $user->first_name;
                $usersInfo[$user->id]['lastName'] = $user->last_name;
                $usersInfo[$user->id]['photo'] = $user->crop_photo->photo->sizes[7]->url ?? null;
            }
        }

        return $usersInfo ?? null;
    }

    public function getListActivityTop5WithIdUser($idUser, $token)
    {
        $params = [
            'user_id' => $idUser,
            'extended' => 1,
            'fields' => 'activity',
            'offset' => 0,
            'access_token' => $token,
            'v' => 5.92
        ];

        $uri = 'http://api.vk.com/method/groups.get?' . http_build_query($params);
        $result = file_get_contents($uri);
        $array[] = json_decode($result);
        $arrayActivity = array();
        if (!empty($array[0]->response->items)) {
            foreach ($array[0]->response->items as $group) {
                if (isset($group->activity)) {
                    $arrayActivity[] = $group->activity;
                }
            }

            $arrayActivityUniq = array_count_values($arrayActivity);
            arsort($arrayActivityUniq, SORT_NUMERIC);
            $arrayActivityTop5 = array_flip(array_slice($arrayActivityUniq, 0, 5));
            $arrayActivityTop5['userId'] = $idUser;
        }

        return $arrayActivityTop5 ?? null;
    }

    public function getUserFriends($idUser, $token)
    {
        $params = [
            'user_id' => $idUser,
            'order' => 'random',
            'access_token' => $token,
            'v' => 5.92
        ];

        $uri = 'http://api.vk.com/method/friends.get?' . http_build_query($params);
        $result = file_get_contents($uri);
        $array = json_decode($result);

        return $array->response->items ?? null;
    }
}