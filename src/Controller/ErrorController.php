<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Log\DebugLoggerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class ErrorController extends AbstractController
{
    /**
     * @Route("/error" , name = "error")
     */
    public function show(Request $request, FlattenException $exception, DebugLoggerInterface $logger = null)
    {
        return $this->render("bundles/TwigBundle/Exception/error404.html.twig", [
            'authentication' => $this->getUser(),
        ]);

    }
}