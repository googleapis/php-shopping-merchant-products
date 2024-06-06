<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/products/v1beta/products_common.proto

namespace Google\Shopping\Merchant\Products\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message that represents installment.
 *
 * Generated from protobuf message <code>google.shopping.merchant.products.v1beta.Installment</code>
 */
class Installment extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of installments the buyer has to pay.
     *
     * Generated from protobuf field <code>int64 months = 1;</code>
     */
    protected $months = 0;
    /**
     * The amount the buyer has to pay per month.
     *
     * Generated from protobuf field <code>.google.shopping.type.Price amount = 2;</code>
     */
    protected $amount = null;
    /**
     * The up-front down payment amount the buyer has to pay.
     *
     * Generated from protobuf field <code>optional .google.shopping.type.Price downpayment = 3;</code>
     */
    protected $downpayment = null;
    /**
     * Type of installment payments.
     * Supported values are:
     *   * "`finance`"
     *   * "`lease`"
     *
     * Generated from protobuf field <code>optional string credit_type = 4;</code>
     */
    protected $credit_type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $months
     *           The number of installments the buyer has to pay.
     *     @type \Google\Shopping\Type\Price $amount
     *           The amount the buyer has to pay per month.
     *     @type \Google\Shopping\Type\Price $downpayment
     *           The up-front down payment amount the buyer has to pay.
     *     @type string $credit_type
     *           Type of installment payments.
     *           Supported values are:
     *             * "`finance`"
     *             * "`lease`"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Products\V1Beta\ProductsCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of installments the buyer has to pay.
     *
     * Generated from protobuf field <code>int64 months = 1;</code>
     * @return int|string
     */
    public function getMonths()
    {
        return $this->months;
    }

    /**
     * The number of installments the buyer has to pay.
     *
     * Generated from protobuf field <code>int64 months = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMonths($var)
    {
        GPBUtil::checkInt64($var);
        $this->months = $var;

        return $this;
    }

    /**
     * The amount the buyer has to pay per month.
     *
     * Generated from protobuf field <code>.google.shopping.type.Price amount = 2;</code>
     * @return \Google\Shopping\Type\Price|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    public function hasAmount()
    {
        return isset($this->amount);
    }

    public function clearAmount()
    {
        unset($this->amount);
    }

    /**
     * The amount the buyer has to pay per month.
     *
     * Generated from protobuf field <code>.google.shopping.type.Price amount = 2;</code>
     * @param \Google\Shopping\Type\Price $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Type\Price::class);
        $this->amount = $var;

        return $this;
    }

    /**
     * The up-front down payment amount the buyer has to pay.
     *
     * Generated from protobuf field <code>optional .google.shopping.type.Price downpayment = 3;</code>
     * @return \Google\Shopping\Type\Price|null
     */
    public function getDownpayment()
    {
        return $this->downpayment;
    }

    public function hasDownpayment()
    {
        return isset($this->downpayment);
    }

    public function clearDownpayment()
    {
        unset($this->downpayment);
    }

    /**
     * The up-front down payment amount the buyer has to pay.
     *
     * Generated from protobuf field <code>optional .google.shopping.type.Price downpayment = 3;</code>
     * @param \Google\Shopping\Type\Price $var
     * @return $this
     */
    public function setDownpayment($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Type\Price::class);
        $this->downpayment = $var;

        return $this;
    }

    /**
     * Type of installment payments.
     * Supported values are:
     *   * "`finance`"
     *   * "`lease`"
     *
     * Generated from protobuf field <code>optional string credit_type = 4;</code>
     * @return string
     */
    public function getCreditType()
    {
        return isset($this->credit_type) ? $this->credit_type : '';
    }

    public function hasCreditType()
    {
        return isset($this->credit_type);
    }

    public function clearCreditType()
    {
        unset($this->credit_type);
    }

    /**
     * Type of installment payments.
     * Supported values are:
     *   * "`finance`"
     *   * "`lease`"
     *
     * Generated from protobuf field <code>optional string credit_type = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCreditType($var)
    {
        GPBUtil::checkString($var, True);
        $this->credit_type = $var;

        return $this;
    }

}

