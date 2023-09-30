<?php
declare(strict_types=1);

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

class CreateFraudAnalysisCustomerRequest implements JsonSerializable
{
    /**
     * @var CreateFraudAnalysisCustomerBrowserRequest[]
     */
    public $browser;

    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['browser'] = $this->browser;

        return $json;
    }
}
