<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Services\semantic\ProjectsGui;
use App\Repository\ProjectRepository;

class ProjectsController extends Controller{
    /**
     * @Route("/index", name="index")
     */
    public function index(ProjectsGui $gui){
        $gui->buttons();
        return $gui->renderView('Projects/index.html.twig');
        // on utilise pas le $this->render afin de pouvoir afficher 
        //les composants visuels ajout�s
    }
    /**
     * @Route("/projects", name="projects")
     */
    public function all(ProjectRepository $projectRepo){
        $projects=$projectRepo->findAll();
        return $this->render('Projects/all.html.twig',["projects"=>$projects]);
    }
}