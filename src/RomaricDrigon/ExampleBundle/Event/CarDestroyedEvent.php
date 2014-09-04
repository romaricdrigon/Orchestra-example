<?php

/*
 * This file is part of the Orchestra project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RomaricDrigon\ExampleBundle\Event;

use RomaricDrigon\ExampleBundle\Entity\Car;
use RomaricDrigon\OrchestraBundle\Domain\Event\EventInterface;

/**
 * Class CarDestroyedEvent
 * @author Romaric Drigon <romaric.drigon@gmail.com>
 */
class CarDestroyedEvent implements EventInterface
{
    /**
     * @var Car
     */
    public $car;


    public function __construct(Car $car)
    {
        $this->car = $car;
    }
} 