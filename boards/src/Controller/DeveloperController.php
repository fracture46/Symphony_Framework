<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\DeveloperRepository;
use App\Services\semantic\DeveloperGui;
use App\Entity\Developer;

class DeveloperController extends Controller
{
    /**
     * @Route("/developer", name="developer")
     */
    public function index(DeveloperGui $gui, DeveloperRepository $devRepo){
        $devs=$devRepo->findAll();
        $dt=$gui->dataTable($devs);
        return $gui->renderView('developer/index.html.twig');
    }
    
    /**
     * @Route("/developer/submit", name="dev_submit")
     */
    public function submit(Request $request, DeveloperRepository $devRepo){
        $dev=$devRepo->find($request->get("id"));
        if(isset($dev)){
            $dev->setTitle($request->get("identity"));
            $devRepo->update($dev);
        }
        return $this->forward("App\Controller\DeveloperController::index");
    }
    
    /**
     * @Route("/developer/update/{id}", name="editDeveloper")
     */
    public function editDev(Developer $dev, DeveloperGui $devGui){
        $devGui->frm($dev);
        return $devGui->renderView('developer/index.html.twig');
    }
}
