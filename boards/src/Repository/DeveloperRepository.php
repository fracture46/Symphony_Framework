<?php
namespace App\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use App\Entity\Developer;

class DeveloperRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Developer::class);
    }
    
    public function update(Developer $dev){
        $this->_em->persist($dev);
        $this->_em->flush();
    }
}