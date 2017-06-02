<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Sports;
use AppBundle\Entity\Region;
use AppBundle\Entity\Type;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\ConstraintViolationListInterface;

class TestControllerB extends FOSRestController
{
    /**
    * @Rest\Get(path="/sports/{id}", name="get_sports")
    */
    public function getSportsAction(sports $id)
            {
                return $id;
            }
          
    /**
     * 
     */        
    public function updateSportsAction()
            {
        
            }
            
    /**
     * 
     */
    public function listSportsAction()
    {
        
    }
}