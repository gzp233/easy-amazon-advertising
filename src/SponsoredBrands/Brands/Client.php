<?php

namespace easyAmazonAdv\SponsoredBrands\Brands;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * getBrands.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  gzp233
     * @date    2020-09-10 00:43
     */
    public function listBrands(array $params = [])
    {
        return $this->httpGet('/brands', [], false);
    }
}
