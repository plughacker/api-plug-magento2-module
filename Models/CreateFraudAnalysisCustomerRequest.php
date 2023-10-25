<?php
declare(strict_types=1);

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

class CreateFraudAnalysisCustomerRequest implements JsonSerializable
{
    public string $name;
    public string $email;
    public string $phone;
    public string $identityType;
    public string $identity;
    public string $registrationDate;
    /**
     * @var CreateFraudAnalysisCustomerBrowserRequest[]
     */
    public $browser;

    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['name'] = $this->name;
        $json['email'] = $this->email;
        $json['phone'] = $this->phone;
        $json['identityType'] = $this->identityType;
        $json['identity'] = $this->identity;
        $json['registrationDate'] = $this->registrationDate;
        $json['browser'] = $this->browser;

        return $json;
    }
}
