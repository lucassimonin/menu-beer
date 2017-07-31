<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Beer;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadBeerData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $beer = new Beer();
        $beer->setNumber(1);
        $beer->setName('test 1');
        $beer->setBrewery('test 1');
        $beer->setType('test 1');
        $beer->setCountry('test 1');
        $beer->setDegree(15.2);
        $beer->setPrice(3);

        $manager->persist($beer);
        $manager->flush();

        $beer = new Beer();
        $beer->setNumber(2);
        $beer->setName('test 2');
        $beer->setBrewery('test 1');
        $beer->setType('test 1');
        $beer->setCountry('test 1');
        $beer->setDegree(15.2);
        $beer->setPrice(3);

        $manager->persist($beer);
        $manager->flush();

        $beer = new Beer();
        $beer->setNumber(3);
        $beer->setName('test 3');
        $beer->setBrewery('test 1');
        $beer->setType('test 1');
        $beer->setCountry('test 1');
        $beer->setDegree(15.2);
        $beer->setPrice(3);

        $manager->persist($beer);
        $manager->flush();

        $beer = new Beer();
        $beer->setNumber(4);
        $beer->setName('test 4');
        $beer->setBrewery('test 1');
        $beer->setType('test 1');
        $beer->setCountry('test 1');
        $beer->setDegree(15.2);
        $beer->setPrice(3);

        $manager->persist($beer);
        $manager->flush();

        $beer = new Beer();
        $beer->setNumber(5);
        $beer->setName('test 5');
        $beer->setBrewery('test 1');
        $beer->setType('test 1');
        $beer->setCountry('test 1');
        $beer->setDegree(15.2);
        $beer->setPrice(3);

        $manager->persist($beer);
        $manager->flush();

        $beer = new Beer();
        $beer->setNumber(6);
        $beer->setName('test 6');
        $beer->setBrewery('test 1');
        $beer->setType('test 1');
        $beer->setCountry('test 1');
        $beer->setDegree(15.2);
        $beer->setPrice(3);

        $manager->persist($beer);
        $manager->flush();

        $beer = new Beer();
        $beer->setNumber(7);
        $beer->setName('test 7');
        $beer->setBrewery('test 1');
        $beer->setType('test 1');
        $beer->setCountry('test 1');
        $beer->setDegree(15.2);
        $beer->setPrice(3);

        $manager->persist($beer);
        $manager->flush();

        $beer = new Beer();
        $beer->setNumber(8);
        $beer->setName('test 8');
        $beer->setBrewery('test 1');
        $beer->setType('test 1');
        $beer->setCountry('test 1');
        $beer->setDegree(15.2);
        $beer->setPrice(3);

        $manager->persist($beer);
        $manager->flush();

        $beer = new Beer();
        $beer->setNumber(9);
        $beer->setName('test 9');
        $beer->setBrewery('test 1');
        $beer->setType('test 1');
        $beer->setCountry('test 1');
        $beer->setDegree(15.2);
        $beer->setPrice(3);

        $manager->persist($beer);
        $manager->flush();

        $beer = new Beer();
        $beer->setNumber(10);
        $beer->setName('test 10');
        $beer->setBrewery('test 1');
        $beer->setType('test 1');
        $beer->setCountry('test 1');
        $beer->setDegree(15.2);
        $beer->setPrice(3);

        $manager->persist($beer);
        $manager->flush();

        $beer = new Beer();
        $beer->setNumber(11);
        $beer->setName('test 11');
        $beer->setBrewery('test 1');
        $beer->setType('test 1');
        $beer->setCountry('test 1');
        $beer->setDegree(15.2);
        $beer->setPrice(3);

        $manager->persist($beer);
        $manager->flush();

        $beer = new Beer();
        $beer->setNumber(12);
        $beer->setName('test 12');
        $beer->setBrewery('test 1');
        $beer->setType('test 1');
        $beer->setCountry('test 1');
        $beer->setDegree(15.2);
        $beer->setPrice(3);

        $manager->persist($beer);
        $manager->flush();

        $beer = new Beer();
        $beer->setNumber(13);
        $beer->setName('test 13');
        $beer->setBrewery('test 1');
        $beer->setType('test 1');
        $beer->setCountry('test 1');
        $beer->setDegree(15.2);
        $beer->setPrice(3);

        $manager->persist($beer);
        $manager->flush();

        $beer = new Beer();
        $beer->setNumber(14);
        $beer->setName('test 14');
        $beer->setBrewery('test 1');
        $beer->setType('test 1');
        $beer->setCountry('test 1');
        $beer->setDegree(15.2);
        $beer->setPrice(3);

        $manager->persist($beer);
        $manager->flush();

        $beer = new Beer();
        $beer->setNumber(15);
        $beer->setName('test 15');
        $beer->setBrewery('test 1');
        $beer->setType('test 1');
        $beer->setCountry('test 1');
        $beer->setDegree(15.2);
        $beer->setPrice(3);

        $manager->persist($beer);
        $manager->flush();

        $beer = new Beer();
        $beer->setNumber(16);
        $beer->setName('test 16');
        $beer->setBrewery('test 1');
        $beer->setType('test 1');
        $beer->setCountry('test 1');
        $beer->setDegree(15.2);
        $beer->setPrice(3);

        $manager->persist($beer);
        $manager->flush();
    }
}
