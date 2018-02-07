<?php

namespace App\Controller;

use App\Model\Contact;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Service\ContactSessionManager;

class UsersController extends Controller
{
    /**
     * @Route("/contacts", name="contacts")
     */
    public function index(ContactSessionManager $contactSessionManager)
    {
        $contactSessionManager->insert(new Contact());
        $contacts = $contactSessionManager->getAll();
        return $this->render('contacts/index.html.twig', ["contacts"=>$contacts]);
    }
    /**
     * @route("/contact/new", methods={"GET"})
     */
    public function créerContact(){
        return $this->render('contact/new/creerContact.html.twig');
    }
    /**
     * @route("/contact/edit/{id}", methods={"GET"}, requirements={"id"="\d+"})
     */
    public function modifierContact($id){
        return $this->render('/contact/edit/?????.html.twig');
    }
    /**
     * @route("/contact/update", methods={"POST"})
     */
    public function validerAjoutModif(){
        
    }
    /**
     * @route("/contact/display/{id}", methods={"GET"}, requirements={"id"="\d+"})
     */
    public function afficherContact($id){
        
    }
    /**
     * @route("/contact/search", methods={"POST"})
     */
    public function rechercherAfficherContact(){
        
    }
    /**
     * @route("/contact/select", methods={"POST"})
     */
    public function SélectionnerContact(){
        
    }
    /**
     * @route("/contact/delete", methods={"POST"})
     */
    public function supprimeContact(){
        
    }
 
}
