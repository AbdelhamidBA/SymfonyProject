<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
// L'entite qui represente la table modele des voiture dans la base (CarModelEntitySchema)
/**
 * @ORM\Entity(repositoryClass="App\Repository\CarModelRepository")
 */
class CarModel
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="idModel",type="integer")
     */
    private $id;
    /**
     * @ORM\Column(name="idMark",type="integer")
     * @ORM\OneToMany(targetEntity="App\Entity\Mark")
     */
    private  $idMark;

    /**
     * @ORM\Column(type="string")
     */
    private $code;

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
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }
    /**
     * @ORM\Column(type="string")
     */
    private $name;
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

}
