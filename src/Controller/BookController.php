<?php
use App\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkBundle\Configuration\Method;
use Symfony\Bundle\FrameworkExtraBundle\Controller\Controller;

   // $book = ['Book 1', 'Book2'];

        // return $this->render('Book/view_book.html.twig', array('book' => $book));
class BookController extends AbstractController{

    /**
     * @Route("/")
     */
    public function homepageBook()
    {
   
        return $this->render('view_book.html.twig');
    }
}