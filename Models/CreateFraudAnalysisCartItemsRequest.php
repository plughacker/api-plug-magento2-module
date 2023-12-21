<?php
declare(strict_types=1);

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

class CreateFraudAnalysisCartItemsRequest implements JsonSerializable
{
    public string $name;
    public int $quantity;
    public string $sku;
    public int $unitPrice;
    public string $risk;
    public string $description;
    public string $categoryId;

    public function jsonSerialize(): mixed
    {
        $json = [];
        $json['name'] = $this->name;
        $json['quantity'] = $this->quantity;
        $json['sku'] = $this->sku;
        $json['unitPrice'] = $this->unitPrice;
        $json['risk'] = $this->risk;
        $json['description'] = $this->description;
        $json['categoryId'] = $this->categoryId;

        return $json;
    }
}
