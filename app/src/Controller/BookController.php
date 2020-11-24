<?php

namespace App\Controller;

use App\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Response;
use Symfony\Component\Routing\Annotation\Route;


  /**
   * Class BookController
     * @Route("/book", name="book_")
     */

class BookController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */

    public function index(BookRepository $bookRepository) // : Response
    {
       
        return $this->render('book/index.html.twig', [
            'books' => $bookRepository->findAll
        ]);
    }

  /**
   * @param $id
   * 
     * @Route("/show/{$id}", name="show")
     */

    public function show(Book $book) // : Response
    {
        return $this->render('book/show.html.twig', [
            'book' => $book
        ]);
    }


}
