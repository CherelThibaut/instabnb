<?php


namespace App\Service;
use App\Repository\AnnouncementRepository;
use App\Entity\Announcement;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMException;

class AnnouncementService
{
    private $entityManager;
    private $repository;

    public function __construct(ObjectManager $entityManager, AnnouncementRepository $repository)
    {
        $this->entityManager = $entityManager;
        $this->repository = $repository;
    }

    public function findAnnouncements()  {
        return ($this->repository->findAll());
    }

    public function save(Announcement $announcement) {
        try {
            $this->entityManager->persist($announcement);
            $this->entityManager->flush();
        } catch (ORMException $e) {
            print $e;
        }
    }
}