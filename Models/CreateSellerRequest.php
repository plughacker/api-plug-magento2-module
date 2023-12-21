<?php
/*
 * PlugAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class CreateSellerRequest implements JsonSerializable
{
    /**
     * Name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Seller's code identification
     * @var string|null $code public property
     */
    public $code;

    /**
     * Description
     * @var string|null $description public property
     */
    public $description;

    /**
     * Document number (individual / company)
     * @var string|null $document public property
     */
    public $document;

    /**
     * Address
     * @var \PlugHacker\PlugAPILib\Models\CreateAddressRequest|null $address public property
     */
    public $address;

    /**
     * Person type (individual / company)
     * @var string|null $type public property
     */
    public $type;

    /**
     * Metadata
     * @required
     * @var array $metadata public property
     */
    public $metadata;

    /**
     * Constructor to set initial or default values of member properties
     * @param string               $name        Initialization value for $this->name
     * @param string               $code        Initialization value for $this->code
     * @param string               $description Initialization value for $this->description
     * @param string               $document    Initialization value for $this->document
     * @param CreateAddressRequest $address     Initialization value for $this->address
     * @param string               $type        Initialization value for $this->type
     * @param array                $metadata    Initialization value for $this->metadata
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->name        = func_get_arg(0);
            $this->code        = func_get_arg(1);
            $this->description = func_get_arg(2);
            $this->document    = func_get_arg(3);
            $this->address     = func_get_arg(4);
            $this->type        = func_get_arg(5);
            $this->metadata    = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['name']        = $this->name;
        $json['code']        = $this->code;
        $json['description'] = $this->description;
        $json['document']    = $this->document;
        $json['address']     = $this->address;
        $json['type']        = $this->type;
        $json['metadata']    = $this->metadata;

        return $json;
    }
}
