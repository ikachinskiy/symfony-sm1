<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function emplAction()
    {
        return $this->render('default/empl.html.twig', [
            'command' => null
        ]);
    }

    public function emplCommandAction($command)
    {
        return $this->render('default/empl.html.twig', [
            'command' => $command
        ]);
    }

    public function managerAction()
    {
        return $this->render('default/manager.html.twig', [
            'command' => null
        ]);
    }

    public function managerCommandAction($command)
    {
        return $this->render('default/manager.html.twig', [
            'command' => $command
        ]);
    }


    public function analitAction()
    {
        return $this->render('default/analitic.html.twig', [
            'command' => null
        ]);
    }

    public function analitCommandAction($command)
    {
        return $this->render('default/analitic.html.twig', [
            'command' => $command
        ]);
    }

}
