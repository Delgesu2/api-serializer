<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 30/08/19
 * Time: 16:16
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Book;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BookController extends AbstractController
{
    /**
     * @param Book $book
     *
     * @Route("/books/{id}", name="book_show")
     *
     * @return Response
     */
    public function showAction(Book $book)
    {
        $data = $this->get('serializer')->serialize($book, 'json');

        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

}