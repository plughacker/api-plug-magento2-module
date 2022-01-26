<?php

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;
use PlugHacker\PlugAPILib\Utils\DateTimeHelper;

/**
 * Webhook data
 */
class GetWebhookResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $clientId public property
     */
    public $clientId;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $event public property
     */
    public $event;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $endpoint public property
     */
    public $endpoint;

    /**
     * @todo Write general description for this property
     * @required
     * @var int $version public property
     */
    public $version;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * @todo Write general description for this property
     * @required
     * @maps createdAt
     * @factory \PlugHacker\PlugAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdAt public property
     */
    public $createdAt;

    /**
     * @todo Write general description for this property
     * @required
     * @maps updatedAt
     * @factory \PlugHacker\PlugAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $updatedAt public property
     */
    public $updatedAt;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                $id        Initialization value for $this->id
     * @param string                $clientId      Initialization value for $this->clientId
     * @param string                $event      Initialization value for $this->event
     * @param string                $endpoint      Initialization value for $this->endpoint
     * @param int                $version     Initialization value for $this->version
     * @param string                $status     Initialization value for $this->status
     * @param \DateTime             $createdAt Initialization value for $this->createdAt
     * @param string                $updatedAt Initialization value for $this->updatedAt
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->id        = func_get_arg(0);
            $this->clientId      = func_get_arg(1);
            $this->event = func_get_arg(2);
            $this->endpoint = func_get_arg(3);
            $this->version      = func_get_arg(4);
            $this->status      = func_get_arg(5);
            $this->createdAt      = func_get_arg(6);
            $this->updatedAt      = func_get_arg(7);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id'] = $this->id;
        $json['clientId'] = $this->clientId;
        $json['event'] = $this->event;
        $json['endpoint'] = $this->endpoint;
        $json['version'] = $this->version;
        $json['status'] = $this->status;
        $json['createdAt'] = $this->createdAt;
        $json['updatedAt'] = $this->updatedAt;

        return $json;
    }
}
