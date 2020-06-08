<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
// L'entite qui represente la table Reservation dans la base (ReservationEntitySchema)
/**
 * @ORM\Entity(repositoryClass="App\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="idRes",type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="date")
     */
    private $res_date;
    /**
     * @ORM\Column(type="date")
     */
    private $ret_date;
    /**
     * @ORM\Column(type="integer")
     * @ORM\OneToOne(targetEntity="App\Entity\User")
     */
    private $id_client;
    /**
     * @ORM\Column(type="integer")
     * @ORM\OneToOne(targetEntity="App\Entity\Car")
     */
    private $id_car;
//Status("Pending","Reserved","Completed")
    /**
     * @ORM\Column(type="string")
     */
    private $status;
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getResDate()
    {
        return $this->res_date;
    }

    /**
     * @param mixed $res_date
     */
    public function setResDate($res_date): void
    {
        $this->res_date = $res_date;
    }

    /**
     * @return mixed
     */
    public function getRetDate()
    {
        return $this->ret_date;
    }

    /**
     * @param mixed $ret_date
     */
    public function setRetDate($ret_date): void
    {
        $this->ret_date = $ret_date;
    }

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->id_client;
    }

    /**
     * @param mixed $id_client
     */
    public function setIdClient($id_client): void
    {
        $this->id_client = $id_client;
    }

    /**
     * @return mixed
     */
    public function getIdCar()
    {
        return $this->id_car;
    }

    /**
     * @param mixed $id_car
     */
    public function setIdCar($id_car): void
    {
        $this->id_car = $id_car;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }


}
