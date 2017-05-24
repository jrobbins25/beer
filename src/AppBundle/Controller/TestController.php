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

        $em = $this->getDoctrine()->getManager();

        $beer->setMaker($em->getRepository(Maker::class)->find($beer->getMaker()->getId()));
        $beer->setType($em->getRepository(Type::class)->find($beer->getType()->getId()));

        $em->persist($beer);
        $em->flush();

        return $this->view($beer, Response::HTTP_CREATED);
    }

    public function putBeerAction()
    {

    }

    public function deleteBeerAction()
    {

    }
}
