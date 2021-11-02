<?php

declare(strict_types=1);

namespace DWCAS\Bundle\ConfigurationBundle\Configuration\Domain\Repository;

use DWCAS\Bundle\ConfigurationBundle\Configuration\Domain\Model\Configuration;

/** 
 * not allowed to call or use or implement this interface outside the configuration component
 * 
 */
interface ConfigurationRepositoryInterface
{


    /**
     * Get Configuration  by given parameters
     *
     * @param array $params
     * 
     * example:
     * $params['key'] = 'configuraion key'
     * $params['id'] = 1; 
     * 
     * @return array
     * example: 
     * [
     *  'id' => 1,
     *   'key' => as_central1_db
     *   'value' => //root:root@db-central1:3306/lakeconference
     * ]
     */
    public function getConfigurationBy(array $params): array;


    public function findById(int $id): ?Configuration;
}
