<?php

namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class BookFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 40; $i++ ) {
            $book = new Book();
            $book->setTitle('Titre' . $i);
            $book->setAuthor('Auteur' . $i);
            $book->setEdition('Éditions' . $i);
            $book->setImage('https://sourceimages/image/' . $i);
            $manager->persist($book);
        }

        $manager->flush();
    }
}
