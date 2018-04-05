<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Services\semantic\StoriesGui;
use App\Repository\ProjectRepository;
use App\Repository\DeveloperRepository;
use App\Repository\StepRepository;
use App\Repository\TagRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\StoryRepository;

class StoriesController extends CrudController{
    
    public function __construct(StoriesGui $gui,StoryRepository $storyRepo){
        $this->gui=$gui;
        $this->repository=$storyRepo;
        $this->type="stories";
        $this->subHeader="Story list";
        $this->icon="open folder";
    }
    
    /**
     * @Route("/stories/edit/{id}", name="stories_edit")
     */
    public function edit($id,DeveloperRepository $devRepo, 
        ProjectRepository $proRepo, StepRepository $stepRepo, TagRepository $tagRepo){
        $devs=$devRepo->getAll();
        $projects = $proRepo->getAll();
        $steps = $stepRepo->getAll();
        $tags = $tagRepo->getAll();
        $tab = $devs.add($projects);
        $tab.add($steps);
        $tab.add($tags);
        return $this->_edit($id,$tab);
    }
    
    /**
     * @Route("/stories/new", name="stories_new")
     */
    public function add(DeveloperRepository $devRepo,
        ProjectRepository $proRepo, StepRepository $stepRepo, TagRepository $tagRepo){
        $devs=$devRepo->getAll();
        $projects = $proRepo->getAll();
        $steps = $stepRepo->getAll();
        $tags = $tagRepo->getAll();
        $tab = array_merge($devs, $projects);
        $tab = array_merge($tab, $steps);
        $tab = array_merge($tab, $tags);
        return $this->_add("\App\Entity\Story",$tab);
    }
    
    /**
     * @Route("/stories/update", name="stories_update")
     */
    public function update(Request $request){
        return $this->_update($request, "\App\Entity\Story");
    }
    
}