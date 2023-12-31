<?php

namespace App\DataFixtures;

use App\Entity\Etablissement;
use App\Entity\Etudiant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EtudiantFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $etablissementRepo = $manager->getRepository(Etablissement::class);
        $listeEtablissement = $etablissementRepo->findAll();
        $faker = \Faker\Factory::create('fr_FR');
        $sexeTab = [1 => 'male', 2 =>'female'];

        for ($i = 0; $i < 99; $i++)
        {
          $sexe = rand( 1,2);
          $etudiant = new Etudiant();
            $etudiant->setNom($faker->lastName());
            $etudiant->setPrenom($faker->firstname($sexeTab[$sexe]));
            $etudiant->setSexe($sexe);
            $etudiant->setAnniversaire(new \DateTime('1951-05-21'));
            $etudiant->setEtablissement($listeEtablissement[array_rand($listeEtablissement)]);
            $manager->persist($etudiant);
        }


        $manager->flush();

    }
}
