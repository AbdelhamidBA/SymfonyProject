<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
// L'entite qui represente la table Voiture dans la base (CarEntitySchema)
/**
 * @ORM\Entity(repositoryClass="App\Repository\CarRepository")
 */
class Car
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="idCar",type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="carName",type="string")
     */
    private $carName;

    /**
     * @ORM\Column(name="carPrice",type="float")
     */
    private $price;

    /**
     * @ORM\Column(name="idMark",type="integer")
     * @ORM\OneToOne(targetEntity="App\Entity\Mark")
     */
    private $idMark;

    /**
     * @ORM\Column(name="idModel",type="integer")
     * @ORM\OneToOne(targetEntity="App\Entity\CarModel")
     */
    private $idModel;

    /**
     * @ORM\Column(name="carSeats",type="integer")
     */
    private $seats;

    /**
     * @ORM\Column(name="carYear",type="integer")
     */
    private $year;

    /**
     * @ORM\Column(name="carColor",type="string")
     */
    private $color;

    /**
     * @ORM\Column(name="carFuel",type="string")
     */
    private $fuel;

    /**
     * @ORM\Column(name="carPic",type="string")
     */
    private $carPic;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCarName()
    {
        return $this->carName;
    }

    /**
     * @param mixed $carName
     */
    public function setCarName($carName): void
    {
        $this->carName = $carName;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getIdMark()
    {
        return $this->idMark;
    }

    /**
     * @param mixed $idMark
     */
    public function setIdMark($idMark): void
    {
        $this->idMark = $idMark;
    }

    /**
     * @return mixed
     */
    public function getIdModel()
    {
        return $this->idModel;
    }

    /**
     * @param mixed $idModel
     */
    public function setIdModel($idModel): void
    {
        $this->idModel = $idModel;
    }

    /**
     * @return mixed
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * @param mixed $seats
     */
    public function setSeats($seats): void
    {
        $this->seats = $seats;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year): void
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * @param mixed $fuel
     */
    public function setFuel($fuel): void
    {
        $this->fuel = $fuel;
    }

    /**
     * @return mixed
     */
    public function getCarPic()
    {
        return $this->carPic;
    }

    /**
     * @param mixed $carPic
     */
    public function setCarPic($carPic): void
    {
        $this->carPic = $carPic;
    }


}
