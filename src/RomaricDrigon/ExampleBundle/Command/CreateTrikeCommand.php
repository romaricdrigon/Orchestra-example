<?php

/*
 * This file is part of the Orchestra project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RomaricDrigon\ExampleBundle\Command;

use RomaricDrigon\OrchestraBundle\Domain\Command\CommandInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class CreateTrikeCommand
 * @author Romaric Drigon <romaric.drigon@gmail.com>
 */
class CreateTrikeCommand implements CommandInterface
{
    /**
     * @Assert\NotBlank()
     */
    public $name;
} 