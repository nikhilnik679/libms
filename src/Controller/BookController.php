<?php
namespace App\Controller;
use App\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class BookController extends AbstractController{

    /**
     * @Route("/Book", name="books_data")
     */
    public function homepageBook()
    {
        $book_list= $this->getDoctrine()->getRepository(Book::class)->findAll();

        return $this->render('Book/view_book.html.twig', array('book_list' => $book_list));
    }
    
    /**
     * @Route("/Book/delete/{id}")
     */
    public function delete(Request $request, $id){
      
        $book_to_delete = $this->getDoctrine()->getRepository(Book::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($book_to_delete);
        $entityManager->flush();

        $response = new Response();
        $response->send();
    }
    /**
     * @Route("/Book/add", name="add_book")
     */
    public function addBook(Request $request){
       $book = new Book();     
       $form = $this->createFormBuilder($book)
    ->add('title', TextType::class, array('attr' => array('class' => 'form-control')))
    ->add('author', TextType::class, array('attr' => array('class' => 'form-control')))
    ->add('department', TextType::class, array('attr' => array('class' => 'form-control')))
    ->add('save', SubmitType::class, array(
    'label' => 'Add',
    'attr' => array('class' => 'btn btn-primary mt-3')
    ))
    ->getForm();  
    
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $book = $form->getData();
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($book);
        $entityManager->flush();
        return $this->redirectToRoute('books_data');
    }
    return $this->render('Book/addBook.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/Book/edit/{id}", name="edit_book")
     */
    public function edit(Request $request, $id){
      $book = new Book();
      $book = $this->getDoctrine()->getRepository(Book::class)->find($id);
    
      $form = $this->createFormBuilder($book)
      ->add('title', TextType::class, array('attr' => array('class' => 'form-control')))
      ->add('author', TextType::class, array(
        'attr' => array('class' => 'form-control')
      ))
      ->add('department', TextType::class, array(
        'attr' => array('class' => 'form-control')
      ))
      ->add('save', SubmitType::class, array(
        'label' => 'Update',
        'attr' => array('class' => 'btn btn-primary mt-3')
      ))
      ->getForm();

      $form->handleRequest($request);
     
      if($form->isSubmitted() && $form->isValid()) {

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        return $this->redirectToRoute('books_data');
      }

      return $this->render('Book/editBook.html.twig', array(
        'form' => $form->createView()
      ));

    }

}