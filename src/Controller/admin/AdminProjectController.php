<?php

namespace App\Controller\admin;

use App\Controller\ProjectController;
use App\Entity\Projects;
use App\Form\ProjectType;
use App\Repository\ProjectsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

class AdminProjectController extends AbstractController {

    /**
     * @var ProjectProjectsRepository
     */
    private $repository;

    public function __construct(ProjectsRepository $repository)
    {
    $this->repository= $repository;    
    }
    
    /**
     * @route ("/admin", name="admin.project.index")
     * @return \Symfony\Component\HTTPFoundation\Response
     */
    public function index() {
        $projects= $this->repository->findAll();
        return $this->render('admin/index.html.twig',compact('projects'));
    }

    /**
     * @route ("/admin/{id}", name="admin.project.edit")
     */

    public function edit(Projects $project) {
        $form= $this->createForm(ProjectType::class,$project);
        return $this->render('admin/edit.html.twig',[
            'project => $project',
            'form'  => $form->createView()
        ]);
    }


}