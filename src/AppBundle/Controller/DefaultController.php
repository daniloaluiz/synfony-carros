<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/{nome}", name="homepage")
     */
    public function indexAction($nome)
    {
        return $this->render('AppBundle:Default:index.html.twig',['nome'=>$nome]);
    }
    
     /**
     * @Route("/run/{marca}/{modelo}", name="marca")
     */
    public function carroAction($marca,$modelo)
    {
        return $this->render('AppBundle:Default:carro.html.twig',['marca'=>$marca,'modelo'=>$modelo]);
    }
    
    
}
