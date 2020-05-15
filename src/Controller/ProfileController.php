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
    public function index(UserInterface $user )
    {
        $userinfo = $this->getUserInfo($user);   
        $hist = $this->getHistory($user);
        $pendings = $this->getPendingReservation($user);
        return $this->render('profile/profile.html.twig', [
            'controller_name' => 'ProfileController',
            'userinfo' =>$userinfo,
            'history' => $hist,
            'pendings' => $pendings
        ]);
    }

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


    public function getPendingReservation(UserInterface $user)
    {
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


    public function getHistory(UserInterface $user)
    {
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
        return null;
    }
    }

    /**
     * @Route("/{id}/reservation/cancel",name="cancelReservation",methods={"DELETE"})
     */
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
    public function contactMail(Request $request,UserInterface $user,\Swift_Mailer $mailer)
    {
        $status = array("status"=>false);
        $concern = $request->request->get("concern");
        $description = $request->request->get("description");
        $u = $this->getDoctrine()->getRepository(User::class)->find($user->getId());
        

        $message = (new \Swift_Message("User Concern: ".$concern))
        ->setFrom(['rev_predator@hotmail.fr' => $u->getFullname()])
        ->setTo('benabdelfettah.abdelhamid@gmail.com')
        ->setBody($description)
        ;

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
