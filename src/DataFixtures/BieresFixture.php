<?php

namespace App\DataFixtures;

use App\Entity\Biere;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BieresFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $manager->flush();
    }
}
