<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;



class PropertyController
{
    /**
     * @Route("/biens", name="property.index")
     * @return Response

     */
    private $twig;
   public function index(): Response
   {
        return new Response('Les biens');
   }
}
