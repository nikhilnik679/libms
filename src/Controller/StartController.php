<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkExtraBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class StartController extends AbstractController
{

    /**
     * @Route("/index", name="homepage")
     */
    public function index()
    {

        return $this->render('index.html.twig');

    }
}
