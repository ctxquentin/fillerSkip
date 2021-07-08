<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Filler;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $fillerList = new Filler();
        $fillerList->setAnimeName('naruto');
        $fillerList->setEpisodes(serialize([1,2,3,4,5,6,7]));

        $manager->persist($fillerList);
        $manager->flush();
    }
}
