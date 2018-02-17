<?php

namespace AK\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use snt\AKImmobilierBundle\Entity\Bien;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class FrontController extends Controller
{
     /**
     * @Route("/bien/reservation")
     */
    public function reserveBienAction()
    {
        return $this->render('AKImmobilierBundle:Front:reserve_bien.html.twig', array(
        ));
    }

    /**
     * @Route("/bien/search")
     */
    public function searchBienAction()
    {

         $em=$this->getDoctrine()
        ->getManager();
        $searchs=$em->getRepository('AKImmobilierBundle:Bien')->findAll();
        if($request->isMethod("POST"))
        {
        
            $localite=$em->getRepository('AKImmobilierBundle:Localite')->findBy(array('localite'=>$localite));
            $typebien=$em->getRepository('AKImmobilierBundle:Typebien')->findBy(array('typeBien'=>$typebien));
            $searchs=$em->getRepository('AKImmobilierBundle:Bien')->findBy(array('localite'=>$localite));

        }


        return $this->render('AKImmobilierBundle:Front:search_bien.html.twig', array(
            // ...
        ));
    }

}
