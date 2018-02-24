<?php

namespace STC\memberBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('STCmemberBundle:Default:index.html.twig');
    }
}
