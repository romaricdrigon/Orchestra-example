<?php

/*
 * This file is part of the Orchestra project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RomaricDrigon\ExampleBundle\Repository;

use RomaricDrigon\OrchestraBundle\Annotation\Name;
use RomaricDrigon\OrchestraBundle\Domain\Doctrine\BaseRepository;

/**
 * Class CarRepository
 * @author Romaric Drigon <romaric.drigon@gmail.com>
 *
 * @Name("Cars")
 */
class CarRepository extends BaseRepository
{
    public function createNew()
    {
        
    }
} 