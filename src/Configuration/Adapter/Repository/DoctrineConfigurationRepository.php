<?php

declare(strict_types=1);

namespace DWCAS\Bundle\ConfigurationBundle\Configuration\Adapter\Repository;

use Doctrine\Persistence\ManagerRegistry;
use App\Domain\Entity\Central\Configuration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use DWCAS\Bundle\ConfigurationBundle\Configuration\Domain\Repository\ConfigurationRepositoryInterface;
use Symfony\Flex\Configurator;

class DoctrineConfigurationRepository extends ServiceEntityRepository implements ConfigurationRepositoryInterface
{

    use DoctrineConfigurationFilterTrait;

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Configuration::class);
    }

    public function getConfigurationBy(array $filters): array
    {
        $QB = $this->createQueryBuilder('c');
        $this->applyFilter($QB, $filters);
        return $QB->getQuery()->getResult();
    }


    public function findById(int $id): ?Configuration
    {
        return $this->find($id);
    }
}
