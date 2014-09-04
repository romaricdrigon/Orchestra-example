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
use RomaricDrigon\OrchestraBundle\Annotation\FormType;
use RomaricDrigon\OrchestraBundle\Annotation\FormOptions;

/**
 * Class RegisterCarCommand
 * @author Romaric Drigon <romaric.drigon@gmail.com>
 */
class RegisterCarCommand implements CommandInterface
{
    /**
     * @Assert\NotBlank()
     */
    public $name;

    /**
     * @Assert\Range(min=1)
     *
     * Annotation below allow to set Form type
     * @FormType("integer")
     * And options also!
     * @FormOptions({"attr" = {"min" = 1}})
     */
    public $numberOfWheels;


    public function __construct()
    {
        $this->numberOfWheels = 4;
    }
} 