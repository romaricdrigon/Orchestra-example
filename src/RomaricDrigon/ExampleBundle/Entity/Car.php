<?php

/*
 * This file is part of the Orchestra project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RomaricDrigon\ExampleBundle\Entity;

use RomaricDrigon\ExampleBundle\Command\RenameCarCommand;
use RomaricDrigon\ExampleBundle\Event\CarDestroyedEvent;
use RomaricDrigon\OrchestraBundle\Domain\Entity\EntityInterface;
use RomaricDrigon\OrchestraBundle\Domain\Entity\ListableEntityInterface;
use RomaricDrigon\OrchestraBundle\Annotation as Orchestra;

/**
 * Class Car
 * @author Romaric Drigon <romaric.drigon@gmail.com>
 */
class Car implements EntityInterface, ListableEntityInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $numberWheels;


    /**
     * @param string $name
     * @param integer $numberWheels
     *
     * @Orchestra\Hidden
     */
    public function __construct($name, $numberWheels)
    {
        $this->name = $name;
        $this->numberWheels = $numberWheels;
    }

    /**
     * @return int
     *
     * @Orchestra\Hidden
     */
    public function getId()
    {
        return $this->id;
    }

    public function view()
    {
        // example method
    }

    /**
     * Change the name of the current car
     *
     * @param RenameCarCommand $command
     */
    public function RenameCar(RenameCarCommand $command)
    {
        $this->name = $command->name;
    }

    /**
     * Return data to display in the listing
     * Keys will be used for table headers
     *
     * @inheritdoc
     *
     * @Orchestra\Hidden
     */
    public function viewListing()
    {
        return [
            '#'     => $this->id,
            'name'  => $this->name
        ];
    }

    /**
     * Factory method to build a RenameCarCommand
     * Indicated by "CommandFactory" annotation on RenameCarCommand class
     *
     * @return RenameCarCommand
     *
     * @Orchestra\Hidden
     */
    public function buildRenameCarCommand()
    {
        $command = new RenameCarCommand();

        $command->name = $this->name;

        return $command;
    }

    /**
     * We emit an Event, that will be passed to CarRepository::receive()
     *
     * @return CarDestroyedEvent
     *
     * @Orchestra\EmitEvent
     */
    public function remove()
    {
        return new CarDestroyedEvent($this);
    }

    /**
     * Because of the Security annotation, this action can not be accessed
     *
     * @Orchestra\Security("has_role('ROLE_ADMIN')")
     */
    public function inaccessibleAction()
    {
        return ;
    }
} 