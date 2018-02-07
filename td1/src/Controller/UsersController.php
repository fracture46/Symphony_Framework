<?php

namespace App\Controller;

use App\Model\Contact;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Service\ContactSessionManager;
use Ajax\semantic\html\base\constants\Size;

class UsersController extends Controller
{
    /**
     * @Route("/contacts/", name="contacts")
     */
    public function index(ContactSessionManager $contactSessionManager)
    {
        $contactSessionManager->insert(new Contact());
        $contacts = $contactSessionManager->getAll();
        return $this->render('contacts/index.html.twig', ["contacts"=>$contacts]);
    }
    /**
     * @route("/contact/new", methods={"GET"}, name="nouveau_contact")
     */
    public function créerContact(){
        return $this->render('contact/new/creerContact.html.twig',
            ["contact"=> new Contact(), "title"=>"Ajouter un contact"]);
        // ["contact"=> new Contact()] => tableau associatif de variables passées à la vue (ici une seule)
        // permet d'accèder dans ce cas aux variables de la classe locale. Le nom donné est celui qui sera
        // utilisé dans la vue.
    }
    /**
     * @route("/contact/new/{id}", methods={"GET"}, requirements={"id"="\d+"}, name="modifier_contact")
     */
    public function modifierContact($id, ContactSessionManager $manager){
        return $this->render('/contact/new/creerContact.html.twig',
            ["contact"=>$manager->get($id),"title"=>"Modification de contact"]);
    }
    /**
     * @route("/contact/new", methods={"POST"}, name="valider_contact")
     */
    public function validerAjoutModif(Request $request){
        $request = new Request();
        return new Response("Update");
    }
    
    /**
     * @route("/contact/new", methods={"POST"}, name="supprimer_contact")
     */
    public function supprimeContact(Array $id, ContactSessionManager $manager){
        foreach($id as $key=>$value){
            $manager.delete($key);
        }
        return new Response("deleted");
    }
    /**
     * @route("/contact/display/{id}", methods={"GET"}, requirements={"id"="\d+"}, name="afficher_contact")
     */
    public function afficherContact($id){
        //return $this->render('/contact/display/?????.html.twig');
    }
    /**
     * @route("/contact/search", methods={"POST"}, name="chercher_contact")
     */
    public function rechercherAfficherContact(){
        //return $this->render('/contact/search/?????.html.twig');
    }
    /**
     * @route("/contact/select", methods={"POST"}, name="selectionner_contact")
     */
    public function SélectionnerContact(){
        //return $this->render('/contact/select/?????.html.twig');
    }
 
}
