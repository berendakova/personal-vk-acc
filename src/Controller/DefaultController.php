<?php


namespace App\Controller;


use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class DefaultController extends AbstractController
{
    /**
     * @Route("/home" , name = "home")
     */
    public function getPage(AuthenticationUtils $authenticationUtils, Request $request)

    {
        return $this->render("home.html.twig", [
            'authentication' => $authenticationUtils->getLastUsername(),
        ]);
    }

    /**
     * @Route("/" , name = "")
     */
    public function getPageHome(AuthenticationUtils $authenticationUtils, Request $request)

    {
        return $this->redirectToRoute("home");
    }

//    /**
//     * @Route("/admin" , name = "admin")
//     */
//
//    public function getAdmin(AuthenticationUtils $authenticationUtils)
//    {
//
//        $user = $this->getUser()->getRole();
//        if ($user === "ROLE_USER") {
//            $this->redirectToRoute("error");
//        }
//        return new Response(
//            '<html><body>Lucky number: ' . "33" . '</body></html>'
//        );
//    }
}
