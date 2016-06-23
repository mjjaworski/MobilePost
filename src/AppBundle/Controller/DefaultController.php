<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/parcelordermanager", name="pai_parcelOrder_manager")
     */
    public function indexAction()
    {
        return $this->render('@App/Default/index.html.twig');
    }
}
