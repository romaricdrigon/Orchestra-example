<?php

/*
 * This file is part of the Orchestra project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RomaricDrigon\ExampleBundle\Entity;
use RomaricDrigon\OrchestraBundle\Domain\Entity\EntityInterface;

/**
 * Class Student
 * @author Romaric Drigon <romaric.drigon@gmail.com>
 */
class Student implements EntityInterface
{
    protected $firstName;

    protected $lastName;

    protected $assignedSubject;

    protected $id;

    public function getId()
    {
        return $this->id;
    }
} 