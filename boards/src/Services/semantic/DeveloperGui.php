<?php
namespace App\Services\semantic;

use Ajax\php\symfony\JquerySemantic;
use App\Entity\Developer;
use Ajax\semantic\html\elements\HtmlLabel;

class DeveloperGui extends JquerySemantic{
    public function dataTable($devs){
        $frm=$this->_semantic->dataTable("devs", "App\Entity\Developer",$devs);
        // créé une table HTML avec des comportements supplémentaires
        // affiche les éléments de $devs
        $frm->setFields(["identity"]);
        $frm->setCaptions(["Identity"]);
        $frm->setIdentifierFunction("getId");
        $frm->setValueFunction("identity", function($v,$dev){
            $lbl=new HtmlLabel("",$dev->getIdentity());
            return $lbl;
        });
            $frm->addEditButton();
            $frm->setUrls(["edit"=>"developer/update"]);
            $frm->setTargetSelector("#update-dev");
            return $frm;
    }
    
    public function frm(Developer $dev){
        $frm=$this->_semantic->dataForm("frm-dev", $dev);
        $frm->setFields(["id","identity","submit","cancel"]);
        $frm->setCaptions(["","Identity","Valider","Annuler"]);
        $frm->fieldAsHidden("id");
        $frm->fieldAsInput("identity",["rules"=>["empty","maxLength[30]"]]);
        $frm->setValidationParams(["on"=>"blur","inline"=>true]);
        $frm->onSuccess("$('#frm-dev').hide();");
        $frm->fieldAsSubmit("submit","positive","developer/submit", "#devs",["ajax"=>["attr"=>"","jqueryDone"=>"replaceWith"]]);
        $frm->fieldAsLink("cancel",["class"=>"ui button cancel"]);
        $this->click(".cancel","$('#frm-dev').hide();");
        return $frm;
    }
    
    public function frmNew(){
        $frm=$this->_semantic->dataForm("frm-new-dev");
        $frm->setFields(["id","identity","submit","cancel"]);
        $frm->setCaptions(["","Identity","Valider","Annuler"]);
        $frm->fieldAsHidden("id");
        $frm->fieldAsInput("identity",["rules"=>["empty","maxLength[30]"]]);
        $frm->setValidationParams(["on"=>"blur","inline"=>true]);
        $frm->onSuccess("$('#frm-new-dev').hide();");
        $frm->fieldAsSubmit("submit","positive","developer/submit", "#devs",["ajax"=>["attr"=>"","jqueryDone"=>"replaceWith"]]);
        $frm->fieldAsLink("cancel",["class"=>"ui button cancel"]);
        $this->click(".cancel","$('#frm-new-dev').hide();");
        return $frm;
    }
}