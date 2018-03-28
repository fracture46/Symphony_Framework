<?php
namespace App\Repository;

use App\Entity\Step;
use App\Repository\MainRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class StepRepository extends MainRepository{
    public function __construct(RegistryInterface $registry){
        parent::__construct($registry, Step::class);
    }
}

