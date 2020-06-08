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
    //affichage de page register
    //on utiliser UserPasswordEncoderInterface pour crypter et decrypter password
    //de l'utilisateur qui va que ce soit faire un inscrit ou login
    public function registration(Request $request,
    UserPasswordEncoderInterface $encoder)
    {
        $manager = $this->getDoctrine()->getManager();
        $user = new User();

        //Preparation de formulaire a etre afficher avec la creation d'une instance
        $form= $this->createForm(RegisterFormType::class,$user);

        $form->handleRequest($request);
        // verifier si le formulaire est envoyé est il y a aucun probleme
        if($form->isSubmitted() && $form->isValid())
        {
            //crypter la mot de passe entrer avec l'agorithme bcrypt 
            //que on a configurer dans fichier security.yaml
            $encodedPass = $encoder->encodePassword($user,$user->getPassword());
            $user->setPassword($encodedPass);
            $confKey =md5(uniqid(rand(), true));
            $user->setVerifKey($confKey);
            $user->setStatus(0);
            $user->setRoles('ROLE_USER');
            //ajout de user
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
    //affichage de page de login contenant le formulaire creer existant sous le dossier src/Forms/LoginForm
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
    //route qui va etre execute lors de logout de user
    public function logout()
    {
     throw new \Exception('This Should never be reached');   
    }

}
