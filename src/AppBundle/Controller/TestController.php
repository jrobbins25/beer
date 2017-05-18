<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends Controller
{
   /**
    * @Route("test", name="testAction")
    */
    public function testAction(Request $request)
    {
        $class= new\stdClass;
        $class->city = 'Sidney';
        $class->location = 'australia';
        $class->sport = 'surfing';

        $response = new JsonResponse;
        $response->setData($class);

        return $response;
    }

    /**
     * @Route("best", name="bestAction")
     */
    public function bestAction(Request $request)
    {
        $data= new \stdClass;
        $data->product_number = '22';
        $data->product_qty = '200';
        $data->product_percentage = '89%';

        $response = new JsonResponse;
        $response->setData($data);

        return $response;    
    }
}
