<?php
declare(strict_types=1);

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

class CreateFraudAnalysisCustomerBrowserRequest implements JsonSerializable
{
    public string $browserFingerprint;
    public string $email;
    public string $hostName;
    public string $ipAddress;
    public string $type;

    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['browserFingerprint'] = $this->browserFingerprint;
        $json['cookiesAccepted'] = true;
        $json['email'] = $this->email;
        $json['hostName'] = $this->hostName;
        $json['ipAddress'] = $this->ipAddress;
        $json['type'] = $this->type;

        return $json;
    }
}
