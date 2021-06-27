<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        for($i =1; $i <= 10; $i++){
           $article = new Article();
           $article->setTitle("titre de l'article n$i")
                   ->setContent("<p>contenu de l'article n$i</p>")
                   ->setImage("https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/250px-Image_created_with_a_mobile_phone.png")
                   ->setCreatedAt(new \DateTime());
           $manager->persist($article);

        }


        $manager->flush();
    }
}
