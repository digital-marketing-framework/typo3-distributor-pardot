<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Pardot\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Pardot\DistributorPardotInitialization;
use DigitalMarketingFramework\Typo3\Core\Registry\EventListener\AbstractCoreRegistryUpdateEventListener;

class CoreRegistryUpdateEventListener extends AbstractCoreRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorPardotInitialization());
    }
}
