<?php

/*
 * This file is part of the Orchestra project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RomaricDrigon\ExampleBundle\Entity;
use RomaricDrigon\OrchestraBundle\Domain\Entity\EntityInterface;
use RomaricDrigon\OrchestraBundle\Annotation\Hidden;
use RomaricDrigon\OrchestraBundle\Domain\Entity\ListableInterface;

/**
 * Class Subject
 * @author Romaric Drigon <romaric.drigon@gmail.com>
 */
class Subject implements EntityInterface
{
    protected $title;

    protected $description;

    protected $principal;

    protected $assignedStudent;

    protected $id;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     *
     * @Hidden
     */
    public function getTitle()
    {
        return $this->title;
    }
}