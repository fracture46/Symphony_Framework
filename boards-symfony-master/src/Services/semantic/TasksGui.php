<?php
namespace App\Services\semantic;

use Ajax\service\JArray;
use App\Entity\Story;
use App\Repository\StoryRepository;

class TasksGui extends SemanticGui{
    public function dataTable($tasks,$type){
        $dt=$this->_semantic->dataTable("dt-".$type, "App\Entity\Task", $tasks);
        $dt->setIdentifierFunction("getId");
        $dt->setFields(["content","story"]);
        $dt->setCaptions(["Content","Story"]);
        $dt->addEditDeleteButtons(false, [ "ajaxTransition" => "random","hasLoader"=>false ], function ($bt) {
            $bt->addClass("circular");
        }, function ($bt) {
            $bt->addClass("circular");
        });
            $dt->onPreCompile(function () use (&$dt) {
                $dt->getHtmlComponent()->colRight(1);
            });
                $dt->setUrls(["edit"=>"tasks/edit","delete"=>"tasks/confirmDelete"]);
                $dt->setTargetSelector("#frm");
                return $dt;
    }
    
    public function dataForm($task,$type,$di=null){
        $task->idStory = "";
        if($task->getStory() != null){
            $task->idStory = $task->getStory()->getId();
        }
        $df=$this->_semantic->dataForm("frm-".$type,$task);
        $df->setFields(["content\n","id\n","content","idStory"]);
        $df->setCaptions(["Modification","","Content", "Story"]);
        $df->fieldAsMessage(0,["icon"=>"info circle"]);
        $df->fieldAsHidden(1);
        $df->fieldAsInput(2,["rules"=>"empty"]);
        $df->fieldAsDropDown(3,JArray::modelArray($di,"getId","getDescriptif"));
        $df->setValidationParams(["on"=>"blur","inline"=>true]);
        $df->setSubmitParams("tasks/update","#frm",["attr"=>"","hasLoader"=>false]);
        return $df;
    }
}

