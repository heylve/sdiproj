<?php

namespace App\Controller;

use App\Entity\Projects;
use App\Repository\ProjectsRepository;
//use App\Repository\ProjectsRepository
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class ProjectsController extends AbstractController {
/**
 * @var ProjectRepository
 */
private $repository;


   
public function __construct(ProjectsRepository $repository) 
{
    $this->repository = $repository;
}

  /**
     * @return Response
     * @route("/projects", name="projects.index")
     */  
public function index() :Response
{

    //return new Response( "les projets");
//     $project= new Projects();
//     $project->setDescription(" Projet THEMIS pour les dossiers fraudes et AT/MP")->setMOA('Annabelle Guédon /  Célia Hervé')
//    ->setNational(true)->setTitle("THEMIS")->setStartingDate(new DateTime());
//    $em= $this->getDoctrine()->getManager();
//    $em->persist($project);
//    $em->flush();

    // $repository=$this->getDoctrine()->getRepository(Projects::class);
    // dump($repository);
    //$project=$this->repository->findAll();
    $project=$this->repository->findAllActiveProjects();
    //=$this->repository->find(1);
    dump($project);
    return $this->render('projects/index.html.twig',['current_menu'=> 'projects']);
    
}

}