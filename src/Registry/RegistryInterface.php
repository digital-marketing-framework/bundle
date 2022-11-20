<?php

namespace DigitalMarketingFramework\Bundle\Registry;

use DigitalMarketingFramework\Collector\Core\Registry\RegistryInterface as CollectorRegistryInterface;
use DigitalMarketingFramework\Distributer\Core\Registry\RegistryInterface as DistributerRegistryInterface;

interface RegistryInterface extends CollectorRegistryInterface, DistributerRegistryInterface
{
}
