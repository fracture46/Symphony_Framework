<?php
namespace App\modele;

class User
{
    private $nom;
    private $competences;
    
    public function __construct($nom =''){
        $this->nom=$nom;
        $this->competences = [];
    }
    
    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function getCompetences(){
        return $this->competences;
    }
    public function addCompetence($competence){
        $this->competences[]=$competence;
    }
    
    public function __toString(){
        return $this->nom;
    }
}

