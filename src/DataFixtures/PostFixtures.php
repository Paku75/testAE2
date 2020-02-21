<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Post;

class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 10; $i++){
            $forum = new Post();
            $forum->setTitre("Titre du post n°$i")
                    ->setContenu("<p>Contenu du post n°$i</p>")
                    ->setImage("http://placehold.it/350x150");
            $manager->persist($forum);
        }

        $manager->flush();
    }
}
