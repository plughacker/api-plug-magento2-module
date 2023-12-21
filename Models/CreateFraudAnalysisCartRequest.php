<?php
declare(strict_types=1);

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

class CreateFraudAnalysisCartRequest implements JsonSerializable
{
    /**
     * @var CreateFraudAnalysisCartItemsRequest[]
     */
    public $items;

    public function jsonSerialize(): mixed
    {
        $json = [];
        $json['items'] = $this->items;

        return $json;
    }
}
