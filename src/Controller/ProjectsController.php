<?php

namespace App\Controller;

use App\Entity\Projects;
use App\Repository\ProjectsRepository;

use DateTime;
use Doctrine\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use PhpParser\Node\Expr\Cast\String_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ProjectsController extends AbstractController {
/**
 * @var ProjectRepository
 */
private $repository;

/**
 * @var ObjectManager
 */
private $em;

   
public function __construct(ProjectsRepository $repository, EntityManagerInterface $em) 
{   // in S 4  it was ObjectManager $em  in Doctrine\common\Persistence\ObjectManager;
    $this->repository = $repository;
    $this->em = $em;
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
    $project=$this->repository->findLatestProjects();
    
    //$project[0]->setStartingDate(new DateTime());
    //$this->em->flush();
    //=$this->repository->find(1);
    dump($project[0]);
    return $this->render('projects/index.html.twig',['current_menu'=> 'projects']);
    
}

  /**
     * @return Response
     * @route("/projects/{slug}-{id}", name="projects.show",requirements={"slug": "[a-z0-9\-]*"})
     * 
     */  

//public function show($slug, $id) :Response
public function show    (Projects $projet, string $slug) :Response
{
   //$projet= $this->repository->find($id);
   if ($projet->getSlug() !== $slug)
   {
       return $this->redirectToRoute('projets.show', ['id' => $projet->getId(), 'slug' => $projet->getSlug(),301 ]);
   }
   return $this->render('projects/show.html.twig',
    [
        'projet'   => $projet,
        'current_menu'=> 'projects'
    ]);

}

}