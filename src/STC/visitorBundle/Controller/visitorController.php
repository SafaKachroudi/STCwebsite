<?php

namespace STC\visitorBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use STC\visitorBundle\Entity\Highlight;
use STC\visitorBundle\Entity\Club;
use STC\visitorBundle\Entity\Event;

class visitorController extends Controller {

    public function getDataAction() {
        $em = $this->container->get('doctrine')->getEntityManager();
        $highlights = $em->getRepository('STCvisitorBundle:Highlight')->findAll();
        $club = $em->getRepository('STCvisitorBundle:Club')->findAll();
        $events = $em->getRepository('STCvisitorBundle:Event')->findAll();
        return $this->render('STCvisitorBundle:Default:index.html.twig', array('highlights'=>$highlights, 'club'=>$club, 'events'=>$events));
     }
}