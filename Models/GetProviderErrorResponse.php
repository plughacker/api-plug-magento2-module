<?php
declare(strict_types=1);

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

class GetProviderErrorResponse implements JsonSerializable
{
    public bool $retryable;
    public string $declinedCode;
    public ?string $message;
    public string $networkDeniedMessage;
    public string $networkDeniedReason;

    public function jsonSerialize(): mixed
    {
        $json = [];
        $json['retryable'] = $this->retryable;
        $json['declinedCode'] = $this->declinedCode;
        $json['message'] = $this->message;
        $json['networkDeniedMessage'] = $this->networkDeniedMessage;
        $json['networkDeniedReason'] = $this->networkDeniedReason;

        return $json;
    }
}
