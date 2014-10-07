<?php

namespace BBQ\Charcoal\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BBQCharcoalWebsiteBundle:Default:index.html.twig');
    }
}
