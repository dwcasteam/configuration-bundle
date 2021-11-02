<?php

declare(strict_types=1);

namespace DWCAS\Bundle\ConfigurationBundle\Configuration\Application\Service;

use DWCAS\Bundle\ConfigurationBundle\Configuration\Domain\Repository\ConfigurationRepositoryInterface;

/** 
 * public class for configuration component
 * 
 */
final class ConfigurationService
{

    private ConfigurationRepositoryInterface $configRepository;

    public function __construct(ConfigurationRepositoryInterface $configRepository)
    {
        $this->configRepository = $configRepository;
    }

    public function getConfigurationDetail(array $params): array
    {
        return $this->configRepository->getConfigurationBy($params);
    }

    /**
     * Get the value of configRepository
     */
    public function getConfigRepository()
    {
        return $this->configRepository;
    }

    /**
     * Set the value of configRepository
     *
     * @return  self
     */
    public function setConfigRepository($configRepository)
    {
        $this->configRepository = $configRepository;

        return $this;
    }
}
