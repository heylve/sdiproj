<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ProjectsController {


    /**
     * @return Response
     * @route("/projects", name="projects.index")
     */
    
   
public function index() :Response
{

    return new Response( "les projets");

    
}

}