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
 * Class Principal
 * @author Romaric Drigon <romaric.drigon@gmail.com>
 */
class Principal implements EntityInterface
{
    protected $name;

    protected $city;

    protected $type;

    protected $id;

    public function getId()
    {
        return $this->id;
    }
} 