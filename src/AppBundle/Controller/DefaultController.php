<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/lucky-number", name="lucky_number")
     */
    public function numberAction()
    {
       $number = mt_rand(0, 100);

        return $this->render('default/luckynumbers.html.twig', array("number"=>$number));

    }
    
    public function jasonAction()
    {
        
    }
}
