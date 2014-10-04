<?php

namespace Erlem\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ErlemJobeetBundle:Default:index.html.twig', array('name' => $name));
    }
}
