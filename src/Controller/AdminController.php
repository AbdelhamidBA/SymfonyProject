<?php

namespace App\Controller;

use App\Entity\Car;
use App\Entity\Mark;
use App\Entity\User;
use App\Entity\CarModel;
use App\Entity\Reservation;
use App\Repository\MarkRepository;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{

    
    /**
     * @Route("/dashboard", name="admin_dashboard")
     */

     // Permet d'afficher la page administrateur "Dashboard
    public function index()
    {
        //Recuperation liste des marks des voitures
        $marks = $this->getMarks();
         //Recuperation liste voitures
        $cars = $this->getCarsList();
         //Recuperation liste des reservations
        $res = $this->getReservations();

        //cette partie nous permet des recuperer des statistique sur les site pour les afficher
        //au admin on utilisant des customs methods que on a definie dans chaque Repositories
        $res_count = $this->getDoctrine()->getRepository(Reservation::class)->getReservationCount();
        $user_count = $this->getDoctrine()->getRepository(User::class)->getUserCount();
        $car_count = $this->getDoctrine()->getRepository(Car::class)->getCarCount();
        $act_count = $this->getDoctrine()->getRepository(Reservation::class)->getActiveReservationCount();
        

      //afficher le template admin.html.twig en passant les different parameter necessaires
        return $this->render('admin/admin.html.twig', [
            'controller_name' => 'AdminController',
            'marks'=>$marks,
            'cars' => $cars,
            'reservations' => $res,
            'res_count' =>$res_count,
            'car_count' => $car_count,
            'user_count' => $user_count,
            'act_count' => $act_count
        ]);
    }
    //Recuperation liste des marks des voitures
    public function getMarks()
    {
        $mark= $this->getDoctrine()->getRepository(Mark::class)->findAll();
        $idx=0;
        foreach($mark as $m)
        {
            $temp = array(
                'id' => $m->getID(),
                'mark' => $m->getMark()
             );   
             $jsonData[$idx++] = $temp;  
        }
        return $jsonData;
    }




    /**
     * @Route("/{id}/models",name="carModels")
     */
    //Recuperation les models d'un marque de vehicule donné
    public function getModels($id)
    {
        $model= $this->getDoctrine()->getRepository(CarModel::class)->getCarModelsByMarkID($id);
        $idx=0;
        $jsonData = [];
        foreach($model as $m)
        {
            $temp = array(
                'id' => $m->getId(),
                'name' => $m->getName() 
             );   
             $jsonData[$idx++] = $temp;  
        }
        return new JsonResponse($jsonData);
    }




     //Recuperation liste des voitures
    public function getCarsList()
    {
        $cars= $this->getDoctrine()->getRepository(Car::class)->findAll();
        $idx=0;
        $jsonData = [];
        foreach($cars as $c)
        {
            $carModel = $this->getCarModelByID($c->getIdModel());
            $carMark = $this->getCarMarkByID($c->getIdMark());
            $temp = array(
                'id' => $c->getId(),
                'carName' => $c->getCarName(),
                'carPrice' => $c->getPrice(),
                'carModel' => $carModel ,
                'carMark' => $carMark,
                'carSeats' => $c->getSeats() ,
                'carPic' => $c->getCarPic(),
                'carColor' => $c->getColor() ,
                'carFuel' => $c->getFuel(),
                'carYear' => $c->getYear()
             );   
             $jsonData[$idx++] = $temp;  
        }
        return $jsonData;
    }
 //Recuperation liste des Reservations
    public function getReservations()
    {
        $reservations = $this->getDoctrine()->getRepository(Reservation::class)->findAll();
        $jsonData = [];
        $idx=0;
        
        foreach ($reservations as $res)
        {
            $res_date = $res->getResDate();
            $rs = $res_date->format('Y-m-d');
            $ret_date = $res->getRetDate();
            $rt = $ret_date->format('Y-m-d');
            $client = $this->getDoctrine()->getRepository(User::class)->find($res->getIdClient());
            $car = $this->getDoctrine()->getRepository(Car::class)->find($res->getIdCar());
            $temp = array(
                'id' => $res->getId(),
                'clientName' => $client->getFullname(),
                'carName' => $car->getCarName(),
                'res_date' => $rs ,
                'ret_date' => $rt,
                'status' => $res->getStatus()
             );   
             $jsonData[$idx++] = $temp;
        }
        return $jsonData;
    }
    //Recuperation le nom de client donner pour remplacer sa id avec sa nom dans view
    public function getClient($id)
    {
        $client = $this->getDoctrine()->getRepository(User::class)->find($id);
        return $client->getFullname();
    }
    //Recuperation la modele d'une voiture de donnéé on utilisant ID
    public function getCarModelByID($id)
    {
        $model = $this->getDoctrine()->getRepository(CarModel::class)->find($id);
        return $model->getName();
    }
    //Recuperation la mark d'une voiture de donnéé on utilisant ID
    public function getCarMarkByID($id)
    {
        $mark = $this->getDoctrine()->getRepository(Mark::class)->find($id);
        return $mark->getMark();
    }







    /**
     * @Route("/cars/add",name="addCar")
     */

    //L'ajout d'une nouvelle voiture dans la base de donné
    public function addCars(Request $request)
    {
        //recuperation les donnéés de formulaire envoyé depuis la methode ajax
        //et l'affecter dans un object de type Car
        $form = $request->request;
        $car = new Car();
        $car->setCarName($form->get("carName"));
        $car->setIdMark($form->get("carMark"));
        $car->setIdModel($form->get("carModel"));
        $car->setColor($form->get("carColor"));
        $car->setFuel($form->get("carFuel"));
        $car->setPrice($form->get("carPrice"));
        $car->setSeats($form->get("carSeats"));
        $car->setYear($form->get("carYear"));
        //recuperation de l'image de voiture depuis le formulaire envoyé par methode ajax
        $carPic= $request->files->get("carPic");
        $status = array('status' => 'success','fileUploaded' => false );
        //un test pour verifier si l'image est vide ou non
        if(!is_null($carPic))
        {
            //l'attribution d'un nom unique pour l'image pour eviter la duplication de image
            $filename= uniqid().".".$carPic->getClientOriginalExtension();
            //faire l'upload d'image dans coté serveur
            $carPic->move($this->getParameter('upload_path'),$filename);
            $car->setCarPic($filename);
            //l'ajout de voiture
            $mgr = $this->getDoctrine()->getManager();
            $mgr->persist($car);
            $mgr->flush();
            $status = array('status' => 'success','fileUploaded' => true );
        }

        return new JsonResponse($status);
    }


/**
     * @Route("/{id}/car/update",name="updateCar",methods={"POST"})
     */
    //modification d'une voiture deja existant dans la base
    public function updateCar(Request $request,$id)
    {
        //recuperation les donnéés de formulaire envoyé depuis la methode ajax
        //et l'affecter dans un object de type Car
        $filesystem = new Filesystem();
        $form = $request->request;
        $car = $this->getDoctrine()->getRepository(Car::class)->find($id);
        $car->setCarName($form->get("updateName"));
        $car->setIdMark($form->get("updateMark"));
        $car->setIdModel($form->get("updateModel"));
        $car->setColor($form->get("updateColor"));
        $car->setFuel($form->get("updateFuel"));
        $car->setPrice($form->get("updatePrice"));
        $car->setSeats($form->get("updateSeats"));
        $car->setYear($form->get("updateYear"));
         //recuperation de l'image de voiture depuis le formulaire envoyé par methode ajax
        $carPic= $request->files->get("updatePic");
        $status = array('status' => 'success','fileUploaded' => false ,"updated" => false);
        //un test pour verifier si l'image est vide ou non
        //dans le cas l'admin a modifier l'image on va supprimer l'image existant 
        //et dans le cas l'admin n'a pas modifier l'image on va juste modifier les autres infos
        if(!is_null($carPic))
        {
            $filesystem = new Filesystem();
            $filesystem->remove($this->getParameter("upload_path")."/".$car->getCarPic());
            $filename= uniqid().".".$carPic->getClientOriginalExtension();
            $carPic->move($this->getParameter('upload_path'),$filename);
            $car->setCarPic($filename);
            $mgr = $this->getDoctrine()->getManager();
            $mgr->persist($car);
            $mgr->flush();
            $status = array('status' => 'success','fileUploaded' => true ,"updated" => true);
        }
        else
        {
            $mgr = $this->getDoctrine()->getManager();
            $mgr->persist($car);
            $mgr->flush();
            $status = array('status' => 'success','fileUploaded' => false , "updated" => true );
        }

        return new JsonResponse($status);
    }


/**
* @Route("/{id}/carInfo",name="carInfo")
*/
//Recuperer les information sur une voiture donnéé
    public function getCarByID($id)
    {       
        $row = $this->getDoctrine()->getRepository(Car::class)->find($id);
        $carModel = $this->getCarModelByID($row->getIdModel());
        $carMark = $this->getCarMarkByID($row->getIdMark());
        return new Response("
        <div id='carInf'>
        <img src='uploads/cars/".$row->getCarPic()."'/>
        <ul>
        <li>Name: ".$row->getCarName()."</li>
        <li>Mark: ".$carMark."</li>
        <li>Model: ".$carModel."</li>
        <li>Year: ".$row->getYear()."</li>
        <li>Color: ".$row->getColor()."</li>
        <li>Fuel: ".$row->getFuel()."</li>
        <li>Price: ".$row->getPrice()."</li>
        </ul>
        </div>
        ");
    }



    /**
     * @Route("/{id}/car/info",name="uCarInfo")
     */
    //Recuperer les information sur la voiture a mettre a jour
    public function getCarByIDToUpdate($id)
    {
        $c= $this->getDoctrine()->getRepository(Car::class)->find($id);
        $idx=0;
        
            $temp = array(
                'id' => $c->getId(),
                'carName' => $c->getCarName(),
                'carPrice' => $c->getPrice(),
                'carModel' => $c->getIdModel() ,
                'carMark' => $c->getIdMark(),
                'carSeats' => $c->getSeats() ,
                'carPic' => $c->getCarPic(),
                'carColor' => $c->getColor() ,
                'carFuel' => $c->getFuel(),
                'carYear' => $c->getYear()
             );   
             $jsonData[$idx] = $temp;  
        
        return new JsonResponse($jsonData);
    }




/**
 * @Route("{id}/car/delete",name="deletCar",methods={"DELETE"})
 */
//Suppression d'une voiture avec l'id
// cet methode va etre execute depuis la methode ajax declarer dans admin.html.twig
 public function deleteCarById($id)
 {
     //recuperation de voiture
     $filesystem = new Filesystem();
     $car = $this->getDoctrine()->getRepository(Car::class)->find($id);
     $mgn = $this->getDoctrine()->getManager();
     $status= array("success"=>false,"message"=>"");
    try{
    //suppression d'image de la voiture a supprimer
        $filesystem->remove($this->getParameter("upload_path")."/".$car->getCarPic());
    //suppression de voiture
        $mgn->remove($car);
        $mgn->flush();
        $status = array("success"=>true,"message"=>"Car Successfully Deleted");

    }catch(IOExceptionInterface $exception)
    {
        //gerer l'exception ou l'image est introuvable 
        $status= array("success"=>false,"message"=>"Error while completing your deletion operation");
    }

    return new JsonResponse($status);
     
 }
   
    
}
