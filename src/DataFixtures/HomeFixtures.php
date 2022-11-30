<?php

namespace App\DataFixtures;

use App\Entity\Home;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class HomeFixtures extends Fixture
{
    // ================================== //
    // ============ METHODES ============ //
    // ================================== //
    public function load(ObjectManager $manager): void
    {
        // On instancie un objet du modele Home
        $home = new Home();

        // On donne des valeurs aux propriétés de l'objet Home
        // Oeuvre 1
        $home->setTitre('Oeuvres');
        $home->setTexte('Titre 1');
        $home->setImageName('IMG_8505.jpg');
        $home->setIsActive(1);
        // Mémorisation de l'objet pour ensuite l'injecter dans la BDD
        $manager->persist($home);

        // Oeuvre 2
        $home = new Home();
        $home->setTitre('Oeuvres');
        $home->setTexte('Titre 2');
        $home->setImageName('IMG_8504.jpg');
        $home->setIsActive(1);
        $manager->persist($home);

        // Oeuvre 3
        $home = new Home();
        $home->setTitre('Oeuvres');
        $home->setTexte('Titre 3');
        $home->setImageName('IMG_8501.jpg');
        $home->setIsActive(1);
        $manager->persist($home);

        // Oeuvre 4
        $home = new Home();
        $home->setTitre('Oeuvres');
        $home->setTexte('Titre 4');
        $home->setImageName('IMG_8500.jpg');
        $home->setIsActive(1);
        $manager->persist($home);
        
        // Oeuvre 5
        $home = new Home();
        $home->setTitre('Oeuvres');
        $home->setTexte('Titre 5');
        $home->setImageName('IMG_8499.jpg');
        $home->setIsActive(1);
        $manager->persist($home);

        // Oeuvre 6
        $home = new Home();
        $home->setTitre('Oeuvres');
        $home->setTexte('Titre 6');
        $home->setImageName('IMG_8498.jpg');
        $home->setIsActive(1);
        $manager->persist($home);

        // Oeuvre 7
        $home = new Home();
        $home->setTitre('Oeuvres');
        $home->setTexte('Titre 7');
        $home->setImageName('IMG_8497.jpg');
        $home->setIsActive(1);
        $manager->persist($home);

        // Oeuvre 8
        $home = new Home();
        $home->setTitre('Oeuvres');
        $home->setTexte('Titre 7');
        $home->setImageName('IMG_8496.jpg');
        $home->setIsActive(1);
        $manager->persist($home);

        // INJECTION DANS BDD
        $manager->flush();
    }
}
