<?php

declare(strict_types=1);

namespace DWCAS\Bundle\ConfigurationBundle\Configuration\Adapter\Repository;


use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\QueryBuilder;

trait DoctrineConfigurationFilterTrait
{

    private function applyFilter(QueryBuilder &$QB,  array $filters): void
    {

        if (!null == $filters['key']) $QB->andWhere('c.key=:key')->setParameter('key', $filters['key']);
        if (isset($filters['status'])) $QB->andWhere('c.status IN(:status)')->setParameter('status', $filters['status']);
    }
}
