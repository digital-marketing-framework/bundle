<?php

namespace DigitalMarketingFramework\Bundle;

use DigitalMarketingFramework\Collector\Core\CoreInitialization as CollectorCoreInitialization;
use DigitalMarketingFramework\Core\Initialization;
use DigitalMarketingFramework\Core\Registry\Plugin\PluginRegistryInterface;
use DigitalMarketingFramework\Distributer\Core\CoreInitialization as DistributerCoreInitialization;

class BundleInitialization extends Initialization
{
    public static function initialize(PluginRegistryInterface $registry): void
    {
        CollectorCoreInitialization::initialize($registry);
        DistributerCoreInitialization::initialize($registry);
    }
}
