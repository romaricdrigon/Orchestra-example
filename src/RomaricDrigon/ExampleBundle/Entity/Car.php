<?php

/*
 * This file is part of the Orchestra project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RomaricDrigon\ExampleBundle\Entity;

use RomaricDrigon\OrchestraBundle\Domain\Entity\EntityInterface;
use RomaricDrigon\OrchestraBundle\Domain\Entity\ListableInterface;

/**
 * Class Car
 * @author Romaric Drigon <romaric.drigon@gmail.com>
 */
class Car implements EntityInterface, ListableInterface
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
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function view()
    {
        // example method
    }

    /**
     * Return data to display in the listing
     * Keys will be used for table headers
     *
     * @inheritdoc
     */
    public function viewListing()
    {
        return [
            '#'     => $this->id,
            'name'  => $this->name
        ];
    }
} 