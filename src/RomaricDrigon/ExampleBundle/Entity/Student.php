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
 * Class Student
 * @author Romaric Drigon <romaric.drigon@gmail.com>
 */
class Student implements EntityInterface, ListableInterface
{
    protected $firstName;

    protected $lastName;

    protected $assignedSubject;

    protected $id;

    public function getId()
    {
        return $this->id;
    }

    public function viewListing()
    {
        return [
            'First name' => $this->firstName,
            'Last name' => $this->lastName,
            'Subject'   => $this->assignedSubject ? $this->assignedSubject->getTitle() : ''
        ];
    }

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
} 