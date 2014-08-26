<?php

/*
 * This file is part of the Orchestra project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RomaricDrigon\ExampleBundle\Entity;

use RomaricDrigon\OrchestraBundle\Domain\Base\BaseRepository;

/**
 * Class Car
 * @author Romaric Drigon <romaric.drigon@gmail.com>
 */
class Car extends BaseRepository
{
    public function listing()
    {
        return [];
    }

    public function view()
    {
        // example method
    }
} 