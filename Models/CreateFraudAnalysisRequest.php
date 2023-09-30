<?php
declare(strict_types=1);

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

class CreateFraudAnalysisRequest implements JsonSerializable
{
    /**
     * @var CreateFraudAnalysisCustomerRequest[]
     */
    public $customer;

    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['customer'] = $this->customer;

        return $json;
    }
}
