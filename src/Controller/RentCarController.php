<?php

namespace App\Controller;

use App\Entity\Car;
use App\Entity\Mark;
use App\Entity\CarModel;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RentCarController extends AbstractController
{
    /**
     * @Route("/rentcar", name="rent_car")
     */
    //Afficher la page de rent car
    public function index()
    {
        $cars = $this->getCars();
        return $this->render('rent_car/rentcar.html.twig', [
            'controller_name' => 'Rent a Car',
            'cars'=>$cars
        ]);
    }

    //Recuperation la listes de Voitures
    public function getCars(){
        $cars = $this->getDoctrine()->getRepository(Car::class)->findAll();
        $idx=0;
        foreach($cars as $car)
        {
            $carModel = $this->getCarModelByID($car->getIdModel());
            $carMark = $this->getCarMarkByID($car->getIdMark());
            $temp = array(
                'id' => $car->getID(),
                'carName' => $car->getCarName(),
                'carModel'=> $carModel,
                'carMark' => $carMark,
                'carPrice' => $car->getPrice(),
                'carColor' => $car->getColor(),
                'carSeats' => $car->getSeats(),
                'carYear' => $car->getYear(),
                'carPic' => $car->getCarPic(),
                'carFuel' => $car->getFuel()
             );   
             $jsonData[$idx++] = $temp;  
        }
        return $jsonData;
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

}
