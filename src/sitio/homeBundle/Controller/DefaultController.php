<?php

namespace sitio\homeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function homeAction()
    {
        return $this->render('homeBundle:Default:home.html.twig');
    }

        public function addAction()
    {
        return $this->render('homeBundle:Default:add.html.twig');
    }

    public function consultarAction()
    {
        return $this->render('homeBundle:Default:consultar.html.twig');
    }
}
