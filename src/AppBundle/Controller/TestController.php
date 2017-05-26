<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Beer;
use AppBundle\Entity\Maker;
use AppBundle\Entity\Type;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\ConstraintViolationListInterface;

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
     * @Rest\Post(path="/beer", name="post_beer")
     *
     * @ParamConverter(
     *     "beer",
     *     converter="fos_rest.request_body"
     * )
     */
    public function postBeerAction(Beer $beer, ConstraintViolationListInterface $violations)
    {
        if (count($violations)) {
            return $violations;
        }

        $beer = $this->get('beer_service')->createBeer($beer);

        return $this->view($beer, Response::HTTP_CREATED);
    }

    /**
     * 
     * @Rest\Put(path="/beer/{id}", name="put_beer")
     * 
     * @ParamConverter(
     *    "beer", 
     *     converter="fos_rest.request_body"
     * )
     */
    public function putBeerAction(Beer $id, Beer $beer, ConstraintViolationListInterface $violations)
    {    
        if (count($violations)) {
            return $violations;
        }    

        $em = $this->getDoctrine()->getManager();
    
        $id->setName($beer->getName());
        $id->setMaker($em->getRepository(Maker::class)->find($beer->getMaker()->getId()));
        $id->setType($em->getRepository(Type::class)->find($beer->getType()->getId()));
        $id->setCaloriesPerServing($beer->getCaloriesPerServing());
                
        $em->persist($id);
        $em->flush();
    
        return $this->view($id, Response::HTTP_OK);
    }

    /**
     * @Rest\Delete(path="/beer/{id}", name="delete_beer")
     * 
     */
    public function deleteBeerAction(Beer $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $em->remove($id);
        $em->flush();
        
        return $this->view([], Response::HTTP_NO_CONTENT);
    }
}
