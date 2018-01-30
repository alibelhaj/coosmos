<?php
namespace AppBundle\DataFixtures\ODM;

use AppBundle\Document\Marques;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
class LoadMarquesData  extends Fixture{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        /*
         * Pour excuter la dataFixtures
         * php bin/console doctrine:mongodb:fixtures:load --fixtures=src/AppBundle/DataFixtures/ODM --append
         */

        /* Ajouter marque */

        $marque = new Marques();
        $marque->setEtat(true);
        $marque->setName('Nike');
        $manager->persist($marque);
        $manager->flush();

        $adsense = new Marques();
        $adsense->setEtat(true);
        $adsense->setName('Adidas');
        $manager->persist($adsense);
        $manager->flush();

        $adsense = new Marques();
        $adsense->setEtat(true);
        $adsense->setName('PUMA');
        $manager->persist($adsense);
        $manager->flush();

        $adsense = new Marques();
        $adsense->setEtat(true);
        $adsense->setName('Asics');
        $manager->persist($adsense);
        $manager->flush();
    }

}