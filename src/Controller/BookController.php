<?php
namespace App\Controller;
use App\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkBundle\Configuration\Method;
use Symfony\Bundle\FrameworkExtraBundle\Controller\Controller;


class BookController extends AbstractController{

    /**
     * @Route("/Book", name="books_data")
     *
     */
    public function homepageBook()
    {
        $book_list= $this->getDoctrine()->getRepository(Book::class)->findAll();

        return $this->render('Book/view_book.html.twig', array('book_list' => $book_list));
    }
}