<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Chalet;

class ChaletFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $chalet = new Chalet();
            $chalet->setType('2x2')
            ->setPrice(750)
            ->setNumber(20);

        $manager->persist($chalet);

        $chalet2 = new Chalet();
            $chalet2->setType('2x3')
            ->setPrice(1000)
            ->setNumber(15);

        $manager->persist($chalet2);

        $manager->flush();
    }
}
