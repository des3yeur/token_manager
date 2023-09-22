<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use app\Entity\Products;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 50; $i++) {

            $product = new Products();
            $product->setname('Produit numéro :' . $i);
            $product->setDescription('Lorem'. $i);
            $manager->persist($product);
            
            // $manager->persist($product);
            $manager->flush();
            
        }
    }
}
