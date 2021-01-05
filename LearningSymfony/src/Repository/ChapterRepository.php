<?php


namespace App\Repository;

use App\Entity\Chapter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;

class ChapterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chapter::class);
    }

    public function findByPrimarch(string $query)
    {
        $queryBuilder = $this->createQueryBuilder('a')->andWhere("a.primarch " . $query)->getQuery();
        return $queryBuilder->execute();
    }

    public function findByName(string $query)
    {
        $entityManager = $this->getEntityManager();
        $dqlQuery = $entityManager->createQuery("SELECT a FROM App\Entity\Chapter a WHERE a.name $query");
        return $dqlQuery->execute();
    }

    public function findByChapterMaster(string $query)
    {
        $dbConnection = $this->getEntityManager()->getConnection();
        $sql = "SELECT * FROM chapters WHERE chapter_master $query;";
        $prepare = $dbConnection->prepare($sql);
        $prepare->execute();
        return $prepare->fetchAll();
    }
}