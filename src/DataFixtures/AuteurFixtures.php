<?php

namespace App\DataFixtures;

use App\Entity\Auteur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AuteurFixtures extends Fixture
{
    // ================================== //
    // ============ METHODES ============ //
    // ================================== //
    public function load(ObjectManager $manager): void
    {
        $auteur = new Auteur();
        $auteur->setName("Aurah");
        $manager->persist($auteur);

        $manager->flush();
    }
}
