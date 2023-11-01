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

    /**
     * @var CreateFraudAnalysisCartRequest[]
     */
    public $cart;

    public function jsonSerialize(): mixed
    {
        $json = [];
        $json['customer'] = $this->customer;
        $json['cart'] = $this->cart;

        return $json;
    }
}
