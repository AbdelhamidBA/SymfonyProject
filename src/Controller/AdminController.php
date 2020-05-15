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
    public function index()
    {
        $marks = $this->getMarks();
        $cars = $this->getCarsList();
        $res = $this->getReservations();

        $res_count = $this->getDoctrine()->getRepository(Reservation::class)->getReservationCount();
        $user_count = $this->getDoctrine()->getRepository(User::class)->getUserCount();
        $car_count = $this->getDoctrine()->getRepository(Car::class)->getCarCount();
        $act_count = $this->getDoctrine()->getRepository(Reservation::class)->getActiveReservationCount();
        

      
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

    public function getClient($id)
    {
        $client = $this->getDoctrine()->getRepository(User::class)->find($id);
        return $client->getFullname();
    }

    public function getCarModelByID($id)
    {
        $model = $this->getDoctrine()->getRepository(CarModel::class)->find($id);
        return $model->getName();
    }
    public function getCarMarkByID($id)
    {
        $mark = $this->getDoctrine()->getRepository(Mark::class)->find($id);
        return $mark->getMark();
    }
    /**
     * @Route("/cars/add",name="addCar")
     */
    public function addCars(Request $request)
    {
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
        $carPic= $request->files->get("carPic");
        $status = array('status' => 'success','fileUploaded' => false );
        if(!is_null($carPic))
        {
            $filename= uniqid().".".$carPic->getClientOriginalExtension();
            $carPic->move($this->getParameter('upload_path'),$filename);
            $car->setCarPic($filename);
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
    public function updateCar(Request $request,$id)
    {
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
        $carPic= $request->files->get("updatePic");
        $status = array('status' => 'success','fileUploaded' => false ,"updated" => false);
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

 public function deleteCarById($id)
 {
     $filesystem = new Filesystem();
     $car = $this->getDoctrine()->getRepository(Car::class)->find($id);
     $mgn = $this->getDoctrine()->getManager();
     $status= array("success"=>false,"message"=>"");
    try{
    
        $filesystem->remove($this->getParameter("upload_path")."/".$car->getCarPic());
        $mgn->remove($car);
        $mgn->flush();
        $status = array("success"=>true,"message"=>"Car Successfully Deleted");

    }catch(IOExceptionInterface $exception)
    {
        $status= array("success"=>false,"message"=>"Error while completing your deletion operation");
    }

    return new JsonResponse($status);
     
 }
   
    
}
