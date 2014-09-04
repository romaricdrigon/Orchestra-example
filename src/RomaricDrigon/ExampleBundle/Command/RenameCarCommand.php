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
use RomaricDrigon\OrchestraBundle\Annotation\CommandFactory;

/**
 * Class RenameCarCommand
 * @author Romaric Drigon <romaric.drigon@gmail.com>
 *
 * @CommandFactory(method="buildRenameCarCommand")
 */
class RenameCarCommand implements CommandInterface
{
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min="5")
     */
    public $name;
} 