<?php


namespace App\Manager;


use App\Entity\User;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserManager
{
    private $passwordEncoder;
    private $manager;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder, ObjectManager $manager)
    {
        $this->passwordEncoder = $passwordEncoder;
        $this->manager = $manager;
    }


    public function save(User $user): void
    {
        $encodedPassword = $this->passwordEncoder->encodePassword(
            $user,
            $user->getPassword()

        );
        $user->setPassword($encodedPassword);
        dump($encodedPassword, $user);
      $this->manager->persist($user);
       $this->manager->flush();
    }
}