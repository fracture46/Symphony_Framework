<?php
namespace App\Service;

use Symfony\Component\HttpFoundation\Session\SessionInterface;


class ContactSessionManager implements IModelManager
{
    /**
     * @var SessionInterface
     */
    private $session;
    
    public function __construct(SessionInterface $session){
        $this->session = $session;
    }
    
    private function updateSession($values){
        $this->session->set('contacts',$values);
    }
    
    public function getAll()
    {
        return $this->session->get('contacts');
    }

    public function select($index)
    {
        return $this->session->get('contacts')[$index];
    }

    public function get($index)
    {
        return $this->session->get('contacts')[$index];
    }

    public function count()
    {
        return $this->session->count('contacts');
    }

    public function insert($object)
    {
        $users = $this->getAll();
        $users[] = $object;
        $this->updateSession($users);
    }

    public function update($object, $values)
    { //values = tableau associatif de ce qui est post� dans le form
      // object = l'objet auquel on souhaite affecter les values
        foreach($values as $key=>$value){
            //key = nom, prenom / value = la valeur du form
            $accesseur="set".$key;
            if(method_exists($object, $accesseur)) // v�rifie que l'accesseur existe
               call_user_func_array([$object, $accesseur],[$values]);
            // utilise un tableau de param pour l'affectation
        }
    }

    public function filterBy($keyAndValues)
    {
        
    }

    public function delete($index)
    {
        return $this->session->remove('contacts')[$index];
    }

}

