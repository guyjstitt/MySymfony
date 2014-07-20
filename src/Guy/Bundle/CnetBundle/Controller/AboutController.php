<?php

namespace Guy\Bundle\CnetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{
    public function indexAction()
    {
        return $this->render('GuyCnetBundle:Default:about.html.twig');
    }

}
