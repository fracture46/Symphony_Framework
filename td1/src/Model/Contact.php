<?php
namespace App\Model;

class Contact
{
    private $nom;
    private $prenom;
    private $email;
    private $tel;
    private $mobile;
    
    public function __construct(){
        $this->nom = "Smith";
    }
    
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getTel()
    {
        return $this->tel;
    }
    public function getMobile()
    {
        return $this->mobile;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setTel($tel)
    {
        $this->tel = $tel;
    }
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

}

