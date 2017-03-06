<?php

namespace BirdsBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Controleur du bundle BirdsBundle
 *
 * @author potemkyne
 */
class BirdsController extends Controller {

    public function indexAction() {
        return $this->render("BirdsBundle:Default:index.html.twig");
    }

    public function backofficeAction() {
        return $this->render("BirdsBundle:Default:back_office.html.twig");
    }

}
