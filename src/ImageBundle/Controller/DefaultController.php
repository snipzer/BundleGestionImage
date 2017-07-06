<?php

namespace ImageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ImageBundle:Default:index.html.twig');
    }
}
