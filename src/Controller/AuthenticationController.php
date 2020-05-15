<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\LoginFormType;
use App\Form\RegisterFormType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AuthenticationController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     */
    public function registration(Request $request,
    UserPasswordEncoderInterface $encoder)
    {
        $manager = $this->getDoctrine()->getManager();
        $user = new User();

        $form= $this->createForm(RegisterFormType::class,$user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $encodedPass = $encoder->encodePassword($user,$user->getPassword());
            $user->setPassword($encodedPass);
            $confKey =md5(uniqid(rand(), true));
            $user->setVerifKey($confKey);
            $user->setStatus(0);
            $user->setRoles('ROLE_USER');
            $manager->persist($user);
            $manager->flush();
            $this->redirectToRoute('loginPath');
        }

        return $this->render('register/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }


   /**
    * @Route("/login",name="loginPath")
    */

    public function loginCheck()
    {
        $login = new User();
        $form = $this->createForm(LoginFormType::class,$login);

        return $this->render('login/login.html.twig',[
            'form' => $form->createView()
        ]);
    }

    /**
    * @Route("/logout",name="logout")
    */
    public function logout()
    {
     throw new \Exception('This Should never be reached');   
    }

}
