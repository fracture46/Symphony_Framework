<?php
namespace App\Services\semantic;

use Ajax\php\symfony\JquerySemantic;
use Ajax\semantic\html\base\constants\Color;
use App\Entity\Tag;

class TagsGui extends JquerySemantic{
    public function dataTable($tags){
        $colors=Color::getConstants();
        $frm=$this->_semantic->dataForm("frm-tag", $tag);
        // créé une table HTML avec des comportements supplémentaires
        // affiche les éléaments de $tags
        $frm->setFields(["id","title","color","submit","cancel"]);
        // qu'est-ce que ça fait ?
        $frm->setCaptions(["","Title","Color","Valider","Annuler"]);
        $frm->fieldAsHidden("id");
        $frm->fieldAsInput("title",["rules"=>["empty","maxLength[30]"]]);
        $frm->fieldAsDropDown("color",\array_combine($colors,$colors));
        $frm->setValidationParams(["on"=>"blur","inline"=>true]);
        $frm->onSuccess("$('#frm-tag').hide();");
        $frm->fieldAsSubmit("submit","positive","tag/submit", "#dtTags",["ajax"=>["attr"=>"","jqueryDone"=>"replaceWith"]]);
        $frm->fieldAsLink("cancel",["class"=>"ui button cancel"]);
        $this->click(".cancel","$('#frm-tag').hide();");
        $frm->addSeparatorAfter("color");
        return $frm;
    }
    public function frm(Tag $tag){
        $frm=$this->_semantic->dataForm("frm-tag", $tag);
        return $frm;
    }
}