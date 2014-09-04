<?php

/*
 * This file is part of the Orchestra project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RomaricDrigon\ExampleBundle\Repository;

use RomaricDrigon\ExampleBundle\Command\CreateTrikeCommand;
use RomaricDrigon\ExampleBundle\Command\RegisterCarCommand;
use RomaricDrigon\ExampleBundle\Entity\Car;
use RomaricDrigon\ExampleBundle\Event\CarDestroyedEvent;
use RomaricDrigon\OrchestraBundle\Annotation\Name;
use RomaricDrigon\OrchestraBundle\Domain\Doctrine\BaseRepository;
use RomaricDrigon\OrchestraBundle\Domain\Event\EventInterface;
use RomaricDrigon\OrchestraBundle\Domain\Repository\ReceiveEventInterface;
use RomaricDrigon\OrchestraBundle\Annotation\Hidden;

/**
 * Class CarRepository
 * @author Romaric Drigon <romaric.drigon@gmail.com>
 *
 * @Name("Cars")
 */
class CarRepository extends BaseRepository implements ReceiveEventInterface
{
    /**
     * Will generate "Register Car" form page
     *
     * @param RegisterCarCommand $command
     */
    public function registerCar(RegisterCarCommand $command)
    {
        $car = new Car($command->name, $command->numberOfWheels);

        $this->objectManager->saveObject($car);
    }

    /**
     * "Create a trike" form page
     *
     * @param CreateTrikeCommand $command
     */
    public function createTrike(CreateTrikeCommand $command)
    {
        $car = new Car($command->name, 3);

        $this->objectManager->saveObject($car);
    }

    /**
     * @inheritdoc
     *
     * @Hidden
     */
    public function receive(EventInterface $event)
    {
        if ($event instanceof CarDestroyedEvent) {
            $this->objectManager->removeObject($event->car);
        }
    }
} 