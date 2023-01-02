<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Pardot\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Pardot\DistributorPluginInitialization;
use DigitalMarketingFramework\Typo3\Distributor\Core\Registry\Event\DistributorRegistryPluginUpdateEvent;

class DistributorRegistryPluginUpdateEventListener
{
    public function __invoke(DistributorRegistryPluginUpdateEvent $event): void
    {
        DistributorPluginInitialization::initialize($event->getRegistry());
    }
}
