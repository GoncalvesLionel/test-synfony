<?php

namespace App\DataFixtures;

use App\Entity\Etablissement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EtablissementFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $listeEtablissement =["ort montreuil", "lycée LeRemourd","superFlow"];
        foreach ($listeEtablissement as $eta ){
            $etablissement = new Etablissement();
            $etablissement->setNom($eta);
            $etablissement->setNbEleve(100);
            $manager->persist($etablissement);
        }
        // $product = new Product();


        $manager->flush();
    }
}
