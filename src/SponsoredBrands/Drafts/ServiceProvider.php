<?php

namespace easyAmazonAdv\SponsoredBrands\Drafts;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['drafts'] = function ($app) {
            return new Client($app);
        };
    }
}
