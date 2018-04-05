<?php

namespace App\Services\semantic;

use Ajax\semantic\html\elements\HtmlLabel;
use Ajax\semantic\html\elements\HtmlInput;
use Ajax\service\JArray;
use App\Entity\Story;
use Ajax\semantic\html\content\HtmlListItem;
use App\Repository\StoryRepository;
use Ajax\semantic\html\elements\HtmlButton;
// non fonctionnel : impossible de séparer les données reçues dans un unique tableau
// alors qu'elles sont de types différents => lecture pour générer les listes
// des champs à dropdown impossible
class StoriesGui extends SemanticGui{
    //mettre le frm en place pour la création/édition
    public function dataForm($story,$type,$di=null){
        $df=$this->_semantic->dataForm("frm-".$type,$story);
        if($story->getDeveloper()!=null){
            $story->idDeveloper=$story->getDeveloper()->getId();
        }
        /*if($story->getTags()!=null){
            $story->tags=$story->getTags()->getId(); // pas sûr
        }*/
        if($story->getStep()!=null){
            $story->step=$story->getStep()->getId();
        }
        if($story->getProject()!=null){
            $story->project=$story->getProject()->getId();
        }
        if($di != null)
        {
            $tabDev = $di;
            
        }
        $df->setFields(["title\n","id\n","code", "descriptif", "tags", "step", "developer", "project"]);
        $df->setCaptions(["Modification","","Code", "Descriptif", "Tags", "Step", "Developer", "Project"]);
        $df->fieldAsMessage(0,["icon"=>"info circle"]);
        $df->fieldAsHidden(1);
        $df->fieldAsInput(2,["rules"=>"empty"]);
        $df->fieldAsTextarea(3);
        $df->fieldAsDropDown(4,JArray::modelArray($di,"getId","getTitle"));
        $df->fieldAsDropDown(5,JArray::modelArray($di,"getId","getTitle"));
        $df->fieldAsDropDown(6,JArray::modelArray($di,"getId","getIdentity"));
        $df->fieldAsDropDown(7,JArray::modelArray($di,"getId","getName"));
        $df->setValidationParams(["on"=>"blur","inline"=>true]);
        $df->setSubmitParams("stories/update","#frm",["attr"=>"","hasLoader"=>false]);
        return $df;
    }
}
