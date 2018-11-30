<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // create 12 products
        for ($i = 0; $i < 12; $i++) {
            $produit = new Produit();
            $produit->setName('produit'.$i);
            $produit->setPrice(mt_rand(10,25));
            $produit->setDescription('Tener animus aut etiam eius offensis quassari animus eius factum caedibus animus quicquid tener ita.'.$i);
            $manager->persist($produit);
        }


        $manager->flush();
    }
}
