<?php

namespace Guy\Bundle\CnetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class REsumeController extends Controller
{
    public function indexAction()
    {
        return $this->render('GuyCnetBundle:Default:resume.html.twig');
    }

}
