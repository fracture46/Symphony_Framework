<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\modele\User;

class UsersController extends Controller
{
    /**
     * @Route("/users", name="users")
     */
    public function index(SessionInterface $session)
    {
        $user = new User("M. DUPONT");
        $user->addCompetence("Symfony");
        $user->addCompetence("EmberJS");
        $session->set("user", $user);
        return $this->render("users/users.html.twig",["user"=>$user,"competences"=>$user->getCompetences()]);
    }
    /**
     * @Route("/hello/{qui}")
     */
    public function test($qui=null, SessionInterface $session){
        if(isset($qui))
            $qui=$session->get("user");
        return new response("Hello ".$qui);
    }
}
