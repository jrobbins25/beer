<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Beer;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Doctrine\ORM\Mapping as ORM;

class TestController extends FOSRestController

{
   /**
    * @Rest\Get(path="/beer/{id}", name="get_beer")
    */
    public function getBeerAction(Beer $id)
    {
  
        return $id;
    }
    
    /**
     * Put Action
     * @var Request $request
     * @var integar $id ID of entity
     * return View|array
     */
    public function postBeerAction(Request $request, $id)
    {
        $entity = $this->getEntity($id);
        $form = $this->createForm(new \AppBundle\Entity\Country(), $entity, array('method' => 'Put'));
        $form->bind($request);
        
        if ($form->isValid())
            {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->view(null, codes::HTTP_NO_CONTENT);
                
        }
        
        return array(
            'form' => $form,
        );
    }

    public function putBeerAction()
    {

    }

    public function deleteBeerAction()
    {

    }
}
