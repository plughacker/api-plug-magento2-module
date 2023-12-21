<?php
/*
 * PlugAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;
use PlugHacker\PlugAPILib\Utils\DateTimeHelper;

/**
 *Response object for getting a usage
 */
class GetUsageResponse implements JsonSerializable
{
    /**
     * Id
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * Quantity
     * @required
     * @var integer $quantity public property
     */
    public $quantity;

    /**
     * Description
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * Used at
     * @required
     * @maps used_at
     * @factory \PlugHacker\PlugAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $usedAt public property
     */
    public $usedAt;

    /**
     * Creation date
     * @required
     * @maps created_at
     * @factory \PlugHacker\PlugAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdAt public property
     */
    public $createdAt;

    /**
     * Status
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * @todo Write general description for this property
     * @maps deleted_at
     * @factory \PlugHacker\PlugAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $deletedAt public property
     */
    public $deletedAt;

    /**
     * Subscription item
     * @required
     * @maps subscription_item
     * @var \PlugHacker\PlugAPILib\Models\GetSubscriptionItemResponse $subscriptionItem public property
     */
    public $subscriptionItem;

    /**
     * Identification code in the client system
     * @var string|null $code public property
     */
    public $code;

    /**
     * Identification group in the client system
     * @var string|null $group public property
     */
    public $group;

    /**
     * Field used in item scheme type 'Percent'
     * @var integer|null $amount public property
     */
    public $amount;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                       $id               Initialization value for $this->id
     * @param integer                      $quantity         Initialization value for $this->quantity
     * @param string                       $description      Initialization value for $this->description
     * @param \DateTime                    $usedAt           Initialization value for $this->usedAt
     * @param \DateTime                    $createdAt        Initialization value for $this->createdAt
     * @param string                       $status           Initialization value for $this->status
     * @param \DateTime                    $deletedAt        Initialization value for $this->deletedAt
     * @param GetSubscriptionItemResponse  $subscriptionItem Initialization value for $this->subscriptionItem
     * @param string                       $code             Initialization value for $this->code
     * @param string                       $group            Initialization value for $this->group
     * @param integer                      $amount           Initialization value for $this->amount
     */
    public function __construct()
    {
        if (11 == func_num_args()) {
            $this->id               = func_get_arg(0);
            $this->quantity         = func_get_arg(1);
            $this->description      = func_get_arg(2);
            $this->usedAt           = func_get_arg(3);
            $this->createdAt        = func_get_arg(4);
            $this->status           = func_get_arg(5);
            $this->deletedAt        = func_get_arg(6);
            $this->subscriptionItem = func_get_arg(7);
            $this->code             = func_get_arg(8);
            $this->group            = func_get_arg(9);
            $this->amount           = func_get_arg(10);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['id']                = $this->id;
        $json['quantity']          = $this->quantity;
        $json['description']       = $this->description;
        $json['used_at']           = DateTimeHelper::toRfc3339DateTime($this->usedAt);
        $json['created_at']        = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['status']            = $this->status;
        $json['deleted_at']        = isset($this->deletedAt) ?
            DateTimeHelper::toRfc3339DateTime($this->deletedAt) : null;
        $json['subscription_item'] = $this->subscriptionItem;
        $json['code']              = $this->code;
        $json['group']             = $this->group;
        $json['amount']            = $this->amount;

        return $json;
    }
}
