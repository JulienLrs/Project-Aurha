<?php

namespace App\DataFixtures;

use App\Entity\Oeuvre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class OeuvreFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $oeuvre = new Oeuvre();
        $oeuvre->setName("Titre 1");
        $manager->persist($oeuvre);

        $oeuvre = new Oeuvre();
        $oeuvre->setName("Titre 2");
        $manager->persist($oeuvre);

        $oeuvre = new Oeuvre();
        $oeuvre->setName("Titre 3");
        $manager->persist($oeuvre);

        $manager->flush();
    }
}
