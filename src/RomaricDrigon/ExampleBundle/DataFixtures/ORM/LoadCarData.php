<?php

/*
 * This file is part of the Orchestra project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RomaricDrigon\ExampleBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use RomaricDrigon\ExampleBundle\Entity\Car;

/**
 * Class LoadCarData
 * @author Romaric Drigon <romaric.drigon@gmail.com>
 */
class LoadCarData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $dacia = new Car('Dacia', 4);

        $manager->persist($dacia);
        $manager->flush();
    }
} 