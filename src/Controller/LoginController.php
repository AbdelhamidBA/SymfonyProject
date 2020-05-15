<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index()
    {
        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

/**
 * @Route("/login/redirect", name="login_redirect")
 */
public function loginRedirectAction(Request $request)
{


    if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
    {
        return $this->redirectToRoute('admin_dashboard');
    }
    else if($this->get('security.authorization_checker')->isGranted('ROLE_USER'))
    {
        return $this->redirectToRoute('profile');
    }
    else
    {
        return $this->redirectToRoute('login');
    }
}
}
