<?php

namespace App\Controller;

use App\Entity\Car;
use App\Entity\User;
use App\Entity\Reservation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="profile")
     */
    //Afficher le profile de client connecté
    public function index(UserInterface $user )
    {
        //recuperer les infos d'user connecté
        $userinfo = $this->getUserInfo($user);   
        //recuperer l'historique de reservation de user connecté
        $hist = $this->getHistory($user);
        //recuperer la liste de reservation en cours de user connecté
        $pendings = $this->getPendingReservation($user);

        //affichage de template profile.html.twig avec data binding
        return $this->render('profile/profile.html.twig', [
            'controller_name' => 'ProfileController',
            'userinfo' =>$userinfo,
            'history' => $hist,
            'pendings' => $pendings
        ]);
    }

    //recuperer les infos de user connecté
    public function getUserInfo(UserInterface $user )
    {
        $u= $this->getDoctrine()->getRepository(User::class)->find($user->getId());
        $birthdate = $u->getBirthdate();
        $birth = $birthdate->format('Y-m-d');
        $temp = array(
            'id' => $u->getId(),
            'fullname' => $u->getFullname(),
            'email' => $u->getEmail(),
            'birthdate' => $birth ,
            'identity' => $u->getIdentity()
         );   
         $jsonData[0]=$temp;
         return $jsonData;
    }


    //recuperer la liste de reservation en cours d'user connecté
    public function getPendingReservation(UserInterface $user)
    {
        //recuperation de liste de reservation en utilisant la methode personnalisé qui on a creer
        //dans Repository Reservation
        $pendings = $this->getDoctrine()
        ->getRepository(Reservation::class)
        ->getPendingReservationByUserID($user->getId());
        $idx =0;
        $jsonData = [];
        foreach($pendings as $res)
        {
            $res_date = $res->getResDate();
            $rs = $res_date->format('Y-m-d');
            $ret_date = $res->getRetDate();
            $rt = $ret_date->format('Y-m-d');
            $car = $this->getDoctrine()->getRepository(Car::class)->find($res->getIdCar());
            $temp = array(
                'id' => $res->getId(),
                'carName' => $car->getCarName(),
                'res_date' => $rs ,
                'ret_date' => $rt,
                'status' => $res->getStatus()
             );   
             $jsonData[$idx++] = $temp;

        }
        return $jsonData;

    }


    //recuperer l'historique de reservation de user connecté
    public function getHistory(UserInterface $user)
    {
        //recuperation d'historique depuis la methode personnalisé qui on creer
        // dans Repository Reservation
        $res = $this->getDoctrine()->getRepository(Reservation::class)->getReservationByUserID($user->getId());
        $jsonData =[];
        if($res != null)
        {
        $res_date = $res->getResDate();
        $rs = $res_date->format('Y-m-d');
        $ret_date = $res->getRetDate();
        $rt = $ret_date->format('Y-m-d');
        $car = $this->getDoctrine()->getRepository(Car::class)->find($res->getIdCar());
        $temp = array(
            'id' => $res->getId(),
            'res_date' => $rs,
            'ret_date' => $rt,
            'carName' => $car->getCarName(),
            'status' => $res->getStatus()
        );
        $jsonData[0] = $temp;
        return $jsonData;
    }else
    {
        // return null si l'utilisateur n'a pas d'historique
        return null;
    }
    }

    /**
     * @Route("/{id}/reservation/cancel",name="cancelReservation",methods={"DELETE"})
     */

     //faire l'annulation d'une reservation donnéé
    public function cancelReservation($id)
    {
        $status = array(
            "status" => false
        );
        $reservation = $this->getDoctrine()->getRepository(Reservation::class)->find($id);
        $mgr = $this->getDoctrine()->getManager();
        $mgr->remove($reservation);
        $mgr->flush();
        $status = array("status"=> true);
        return new JsonResponse($status);
    }

    /**
     * @Route("/profile/contact",name="profile_contact_form")
     */
    //l'envoi d'un email de contact depuis page profile
    // cette methode est appellé par un methode ajax dans CLient.js
    public function contactMail(Request $request,UserInterface $user,\Swift_Mailer $mailer)
    {
        $status = array("status"=>false);
        $concern = $request->request->get("concern");
        $description = $request->request->get("description");
        $u = $this->getDoctrine()->getRepository(User::class)->find($user->getId());
        
        //prepartion de message on entrant les info neccessaire
        $message = (new \Swift_Message("User Concern: ".$concern))
        ->setFrom([$u->getEmail() => $u->getFullname()])
        ->setTo('benabdelfettah.abdelhamid@gmail.com')
        ->setBody($description)
        ;

        //verification si l'email est envoyé correctement
        if($mailer->send($message,$errors))
        {
            $status = array("status"=>true,"errors"=>$errors);
        }
        else
        {
            $status = array("status"=>false,"errors"=>$errors);
        }
       
        return new JsonResponse($status);
    }
}
