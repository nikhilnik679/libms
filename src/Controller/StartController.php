<?php
namespace App\Controller;
use App\Entity\Book;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkBundle\Configuration\Method;
use Symfony\Bundle\FrameworkExtraBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class StartController extends AbstractController {
    /**
     * @Route("/")
     */
    public function homepage()
    {
        // $book = ['Book 1', 'Book2'];

        // return $this->render('Book/view_book.html.twig', array('book' => $book));
        return $this->render('index.html.twig');
    }
}