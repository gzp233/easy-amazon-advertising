<?php

namespace easyAmazonAdv\SponsoredBrands\Drafts;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * listCampaigns.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  gzp233
     * @date    2020-09-10 00:43
     */
    public function listCampaigns(array $params = [])
    {
        return $this->httpGet('/sb/drafts/campaigns', $params, false);
    }
}
