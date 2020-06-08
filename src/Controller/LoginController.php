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
            'controller_name' => 'Login',
        ]);
    }

/**
 * @Route("/login/redirect", name="login_redirect")
 */
//cette fonction permet de faire la redirection de user apres l'authenfication avec succés
// vers la page correct selon sa role
public function loginRedirectAction(Request $request)
{

//ici on va si l'utilisateur connecté est un admin si ce le cas on va le redirect vers admin_dashborad
// si l'user est un simple user donc on va le redirect vers sa page de profile
// si n'est pas le cas on va le redirect vers login page
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
