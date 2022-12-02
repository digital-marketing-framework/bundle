<?php

namespace DigitalMarketingFramework\Bundle\Registry;

use DigitalMarketingFramework\Collector\Core\Registry\RegistryTrait as CollectorRegistryTrait;
use DigitalMarketingFramework\Core\Cache\CacheInterface;
use DigitalMarketingFramework\Core\Cache\NonPersistentCache;
use DigitalMarketingFramework\Core\Log\LoggerFactoryInterface;
use DigitalMarketingFramework\Core\Log\NullLoggerFactory;
use DigitalMarketingFramework\Core\Queue\NonPersistentQueue;
use DigitalMarketingFramework\Core\Queue\QueueInterface;
use DigitalMarketingFramework\Core\Registry\Registry as CoreRegistry;
use DigitalMarketingFramework\Core\Request\DefaultRequest;
use DigitalMarketingFramework\Core\Request\RequestInterface;
use DigitalMarketingFramework\Distributer\Core\Factory\QueueDataFactory;
use DigitalMarketingFramework\Distributer\Core\Factory\QueueDataFactoryInterface;
use DigitalMarketingFramework\Distributer\Core\Registry\RegistryTrait as DistributerRegistryTrait;

class Registry extends CoreRegistry implements RegistryInterface
{
    use DistributerRegistryTrait;
    use CollectorRegistryTrait;

    public function __construct(
        protected LoggerFactoryInterface $loggerFactory = new NullLoggerFactory(),
        protected RequestInterface $request = new DefaultRequest(),
        protected CacheInterface $cache = new NonPersistentCache(),
        protected QueueInterface $persistentQueue = new NonPersistentQueue(),
        protected QueueInterface $nonPersistentQueue = new NonPersistentQueue(),
        protected QueueDataFactoryInterface $queueDataFactory = new QueueDataFactory(),
    ) {
    }

    public function getDefaultConfiguration(): array
    {
        return $this->getDefaultRelayConfiguration() 
            + $this->getDefaultCollectorConfiguration();
    }
}
