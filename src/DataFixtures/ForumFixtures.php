<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Forum;

class ForumFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 10; $i++){
            $forum = new Forum();
            $forum->setNom("Titre ddu forum n°$i")
                    ->setDescription("<p>Contenu du forum n°$i</p>")
                    ->setImage("http://placehold.it/350x150");
            $manager->persist($forum);
        }

        $manager->flush();
    }
}
