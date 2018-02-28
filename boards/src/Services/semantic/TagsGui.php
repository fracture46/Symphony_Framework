<?php
namespace App\Services\semantic;

use Ajax\php\symfony\JquerySemantic;
use Ajax\semantic\html\base\constants\Color;
use App\Entity\Tag;
use Ajax\semantic\html\elements\HtmlLabel;

class TagsGui extends JquerySemantic{
    public function dataTable($tags){
        $frm=$this->_semantic->dataTable("dtTags", "App\Entity\Tag",$tags);
        // créé une table HTML avec des comportements supplémentaires
        // affiche les éléaments de $tags
        $frm->setFields(["tag"]);
        $frm->setCaptions(["Tag"]);
        $frm->setValueFunction("tag", function($v,$tag){
            $lbl=new HtmlLabel("",$tag->getTitle());
            $lbl->setColor($tag->getColor());
            return $lbl;
        });
        $frm->addEditButton();
        $frm->setUrls(["edit"=>"tag/update"]);
        $frm->setTargetSelector("#update-tag");
        return $frm;
    }
    public function frm(Tag $tag){
        $colors=Color::getConstants();
        $frm=$this->_semantic->dataForm("frm-tag", $tag);
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
}