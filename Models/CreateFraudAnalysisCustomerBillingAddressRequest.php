<?php
declare(strict_types=1);

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

class CreateFraudAnalysisCustomerBillingAddressRequest implements JsonSerializable
{
    public string $country;
    public string $state;
    public string $city;
    public string $district;
    public string $zipCode;
    public string $street;
    public string $number;
    public string $complement;

    public function jsonSerialize(): mixed
    {
        $json = [];
        $json['country'] = $this->country;
        $json['state'] = $this->state;
        $json['city'] = $this->city;
        $json['district'] = $this->district;
        $json['zipCode'] = $this->zipCode;
        $json['street'] = $this->street;
        $json['number'] = $this->number;
        $json['complement'] = $this->complement;

        return $json;
    }
}
