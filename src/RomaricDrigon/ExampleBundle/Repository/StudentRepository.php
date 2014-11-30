<?php

/*
 * This file is part of the Orchestra project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RomaricDrigon\ExampleBundle\Repository;
use Doctrine\Common\Persistence\ObjectRepository;
use RomaricDrigon\ExampleBundle\Entity\Student;
use RomaricDrigon\OrchestraBundle\Doctrine\ObjectManagerInterface;
use RomaricDrigon\OrchestraBundle\Domain\Doctrine\DoctrineAwareInterface;
use RomaricDrigon\OrchestraBundle\Domain\Repository\RepositoryInterface;
use RomaricDrigon\OrchestraBundle\Annotation\Hidden;
use RomaricDrigon\ExampleBundle\Command\RegisterStudentCommand;

/**
 * Class StudentRepository
 * @author Romaric Drigon <romaric.drigon@gmail.com>
 */
class StudentRepository implements RepositoryInterface, DoctrineAwareInterface
{
    protected $doctrineRepository;

    protected $objectManager;

    /**
     * @param ObjectRepository $entityRepository
     *
     * @Hidden
     */
    public function setDoctrineRepository(ObjectRepository $entityRepository)
    {
        $this->doctrineRepository = $entityRepository;
    }

    /**
     * @param ObjectManagerInterface $objectManager
     *
     * @Hidden
     */
    public function setObjectManager(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    public function listing()
    {
        return $this->doctrineRepository->findAll();
    }

    /**
     * @param mixed $id
     * @return null|\RomaricDrigon\OrchestraBundle\Domain\Entity\EntityInterface
     *
     * @Hidden
     */
    public function find($id)
    {
        return $this->doctrineRepository->find($id);
    }

    public function registerStudent(RegisterStudentCommand $command)
    {
        $student = new Student($command->firstName, $command->lastName);

        $this->objectManager->saveObject($student);
    }
} 