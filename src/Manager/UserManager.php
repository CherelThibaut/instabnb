<?php


namespace App\Manager;


use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bridge\Doctrine\Tests\Fixtures\User;

class UserManager
{
    private $entityManager;

    public function __construct(ObjectManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    public function save(User $user): void
    {
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }
}