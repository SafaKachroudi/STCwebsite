<?php

namespace STC\visitorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('STCvisitorBundle:Default:index.html.twig');
    }
}
