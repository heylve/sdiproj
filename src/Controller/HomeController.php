<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\TwigBundle\DependencyInjection\Compiler\TwigEnvironmentPass;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;


class HomeController  extends AbstractController
{
    /*
    *  @var Environment
    */

    // private $twig;
    // public function __construct(Environment $twig)
    // {
    //     $this->twig =$twig;
    // }

    public function index(): Response
     {
           // return new Response("salut les gens");
           //return $this->render('pages/home.html.twig');
        //    return new Response($this->twig->render('pages/home.html.twig'));
           return $this->render('pages/home.html.twig');
     }
}