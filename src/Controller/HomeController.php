<?php

namespace App\Controller;

use App\Repository\ProjectsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\TwigBundle\DependencyInjection\Compiler\TwigEnvironmentPass;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;


class HomeController  extends AbstractController
{
    

    // private $twig;
    // public function __construct(Environment $twig)
    // {
    //     $this->twig =$twig;
    // }


    /**
     * @Route("/",name="home")
     * @param ProjectRepository $repository
     * @return Response
     */
    public function index(ProjectsRepository $repository): Response
     {
           // return new Response("salut les gens");
           //return $this->render('pages/home.html.twig');
        //    return new Response($this->twig->render('pages/home.html.twig'));
        $this->repository=$repository;
        $projects =$this->repository->findLatestProjects();
    
         return $this->render('pages/home.html.twig', ['projets'=>$projects]);
     }
}