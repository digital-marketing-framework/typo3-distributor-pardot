<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Pardot\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Pardot\DistributorPardotInitialization;
use DigitalMarketingFramework\Typo3\Distributor\Core\Registry\EventListener\AbstractDistributorRegistryUpdateEventListener;

class DistributorRegistryUpdateEventListener extends AbstractDistributorRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorPardotInitialization());
    }
}
