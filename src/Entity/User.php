<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(
 *      fields={"email","username"},
 *      errorPath="email",
 *      message="Email already has an account",
 *      errorPath="username",
 *      message ="username already exists"
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="idUser",type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\Regex(
     *  pattern="/^([a-zA-Z0-9]+|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{1,}|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{3,}\s{1}[a-zA-Z0-9]{1,})$/i",
     *  message="Enter a correct name"
     * )
     */
    private $fullname;
    /**
     * @ORM\Column(type="date")
     * 
     */
    private $birthdate;
    /**
     * @ORM\Column(type="string")
     * @Assert\Length(min= 8, max=8 ,allowEmptyString = false,exactMessage="Identity must have exact 8")
     * @Assert\Regex(pattern="/^[0-9]*$/i",message="Identity Must Contain only numbers")
     */
    private $identity;
    /**
     * @ORM\Column(type="string")
     *  @Assert\Length(min= 8, max=8 ,allowEmptyString = false,exactMessage="Phone must have exact 8")
     *  @Assert\Regex(pattern="/^[0-9]*$/i",message="Phone Must Contain only numbers")
     */
    private $phone;
    /**
     * @ORM\Column(type="string",unique=true)
     * @Assert\Length(
     *      min= 4, 
     *      max=45 ,
     *      allowEmptyString = false,
     *      minMessage="Username must be more then 4 caracters",
     *      maxMessage="Username must be under 45 caracters"
     * )
     */
    private $username;
    /**
     * @ORM\Column(type="string",unique=true)
     * @Assert\Email
     */
    private $email;
    /**
     * @ORM\Column(type="string")
     * @Assert\Length(min=6,max=18,minMessage="Password must be more 6",maxMessage="Password must be less than 16",allowEmptyString=false)
     */
    private $password;
    /**
     * @ORM\Column(type="string")
     */
    private $verif_key;
    /**
     * @ORM\Column(type="integer",options={"default":0})
     */
    private $status;

    /**
     * @ORM\Column(type="string",options={"default":"client"})
     */
    private $role;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * @param mixed $fullname
     */
    public function setFullname($fullname): void
    {
        $this->fullname = $fullname;
    }

    /**
     * @return mixed
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * @param mixed $birthdate
     */
    public function setBirthdate($birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    /**
     * @return mixed
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * @param mixed $identity
     */
    public function setIdentity($identity): void
    {
        $this->identity = $identity;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setusername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getVerifKey()
    {
        return $this->verif_key;
    }

    /**
     * @param mixed $verif_key
     */
    public function setVerifKey($verif_key): void
    {
        $this->verif_key = $verif_key;
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

    public function getRoles()
    {
        return array($this->role);
    }

    public function setRoles(String $role)
    {
        $this->role = $role;
    }
    public function eraseCredentials()
    {
    }
    public function getSalt()
    {
    }
    

}
