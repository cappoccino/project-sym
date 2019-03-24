<?php
/**
 * Created by PhpStorm.
 * User: amina
 * Date: 24/03/2019
 * Time: 12:57
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Twig\Environment;

class HomeController extends Controller
{
    /**
     * @Route("/", name ="home")
     * @return Response
     */


    public function index(): Response {
        return $this->render('property/index.html.twig');
    }
}

