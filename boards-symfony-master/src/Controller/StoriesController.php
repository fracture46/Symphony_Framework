<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Services\semantic\StoriesGui;
use App\Repository\ProjectRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\StoryRepository;

class StoriesController extends CrudController{
    
    public function __construct(StoriesGui $gui,StoryRepository $projectRepo){
        $this->gui=$gui;
        $this->repository=$projectRepo;
        $this->type="stories";
        $this->subHeader="Story list";
        $this->icon="table";
    }
    
}