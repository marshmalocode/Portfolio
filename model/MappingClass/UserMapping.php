<?php

namespace model\MappingClass;

use DateTime;
use Exception;


use model\AbstractClass\MappingAbstract;
class UserMapping extends MappingAbstract
{
    private int $iduser;
    private string $username;
    private string $email;
    private string $password;
    private string $create_time;

    private string $uniqid;
    private bool $actif;

    // getters
    public function getIduser(): int
    {
        return $this->iduser;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getCreate_time(): string
    {
        return $this->create_time;
    }

    public function getUniqid(): string
    {
        return $this->uniqid;
    }

    public function getActif(): ?bool
    {
        return $this->actif;
    }

    // setters

    public function setIduser(int $iduser): void
    {
        $this->iduser = $iduser;
    }

    public function setUsername(string $username): void
    {
        if(strlen($username) < 3 || strlen($username) > 16){
            throw new Exception("Le nom d'utilisateur doit contenir entre 3 et 16 caractères");
        }else {
            $username = trim($username);
            $username = strip_tags($username);
            $this->username = $username;
        }
    }

    public function setEmail(string $email): void
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("L'email n'est pas valide");
        }else {
            $this->email = trim($email);
        }
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setCreate_time(string $create_time): void
    {
        if(strtotime($create_time) === false) {
            throw new Exception("La date n'est pas valide");
        }else {
            $this->create_time = $create_time;
        }
    }

    public function setUniqid(string $uniqid): void
    {
        $this->uniqid = $uniqid;
    }

    public function setActif(bool $actif): void
    {
        $this->actif = $actif;
    }


}