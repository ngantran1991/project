<?php

namespace SM\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $return = array(
            'header' => 'Welcome',
            'content' => 'This is my backend'
        );
        return $this->render('SMAdminBundle:Default:index.html.twig', $return);
    }
}
