<?php

/*
 * This file is part of the Orchestra project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RomaricDrigon\ExampleBundle\Command;

use RomaricDrigon\OrchestraBundle\Domain\Command\CommandInterface;
use RomaricDrigon\OrchestraBundle\Annotation\FormType;
use RomaricDrigon\OrchestraBundle\Annotation\FormOptions;

/**
 * Class RegisterStudentCommand
 * @author Romaric Drigon <romaric.drigon@gmail.com>
 */
class RegisterStudentCommand implements CommandInterface
{
    public $firstName;

    public $lastName;

    /**
     * @FormType("choice")
     * @FormOptions({"choices" = {"m" = "Male", "f" = "Female"}})
     */
    public $gender;
} 