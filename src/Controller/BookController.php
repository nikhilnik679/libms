<?php
namespace App\Controller;
use App\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;  

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
    
    /**
     * @Route("/Book/delete/{id}")
     *
     */
    public function delete(Request $request, $id){
      
        $book_to_delete = $this->getDoctrine()->getRepository(Book::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($book_to_delete);
        $entityManager->flush();

        $response = new Response();
        $response->send();

    }
}