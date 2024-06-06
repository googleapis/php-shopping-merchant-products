<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/products/v1beta/products_common.proto

namespace Google\Shopping\Merchant\Products\V1beta\ProductStatus;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The destination status of the product status.
 *
 * Generated from protobuf message <code>google.shopping.merchant.products.v1beta.ProductStatus.DestinationStatus</code>
 */
class DestinationStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the reporting context.
     *
     * Generated from protobuf field <code>.google.shopping.type.ReportingContext.ReportingContextEnum reporting_context = 1;</code>
     */
    protected $reporting_context = 0;
    /**
     * List of country codes (ISO 3166-1 alpha-2) where the offer is approved.
     *
     * Generated from protobuf field <code>repeated string approved_countries = 2;</code>
     */
    private $approved_countries;
    /**
     * List of country codes (ISO 3166-1 alpha-2) where the offer is pending
     * approval.
     *
     * Generated from protobuf field <code>repeated string pending_countries = 3;</code>
     */
    private $pending_countries;
    /**
     * List of country codes (ISO 3166-1 alpha-2) where the offer is
     * disapproved.
     *
     * Generated from protobuf field <code>repeated string disapproved_countries = 4;</code>
     */
    private $disapproved_countries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $reporting_context
     *           The name of the reporting context.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $approved_countries
     *           List of country codes (ISO 3166-1 alpha-2) where the offer is approved.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $pending_countries
     *           List of country codes (ISO 3166-1 alpha-2) where the offer is pending
     *           approval.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $disapproved_countries
     *           List of country codes (ISO 3166-1 alpha-2) where the offer is
     *           disapproved.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Products\V1Beta\ProductsCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the reporting context.
     *
     * Generated from protobuf field <code>.google.shopping.type.ReportingContext.ReportingContextEnum reporting_context = 1;</code>
     * @return int
     */
    public function getReportingContext()
    {
        return $this->reporting_context;
    }

    /**
     * The name of the reporting context.
     *
     * Generated from protobuf field <code>.google.shopping.type.ReportingContext.ReportingContextEnum reporting_context = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setReportingContext($var)
    {
        GPBUtil::checkEnum($var, \Google\Shopping\Type\ReportingContext\ReportingContextEnum::class);
        $this->reporting_context = $var;

        return $this;
    }

    /**
     * List of country codes (ISO 3166-1 alpha-2) where the offer is approved.
     *
     * Generated from protobuf field <code>repeated string approved_countries = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getApprovedCountries()
    {
        return $this->approved_countries;
    }

    /**
     * List of country codes (ISO 3166-1 alpha-2) where the offer is approved.
     *
     * Generated from protobuf field <code>repeated string approved_countries = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setApprovedCountries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->approved_countries = $arr;

        return $this;
    }

    /**
     * List of country codes (ISO 3166-1 alpha-2) where the offer is pending
     * approval.
     *
     * Generated from protobuf field <code>repeated string pending_countries = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPendingCountries()
    {
        return $this->pending_countries;
    }

    /**
     * List of country codes (ISO 3166-1 alpha-2) where the offer is pending
     * approval.
     *
     * Generated from protobuf field <code>repeated string pending_countries = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPendingCountries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->pending_countries = $arr;

        return $this;
    }

    /**
     * List of country codes (ISO 3166-1 alpha-2) where the offer is
     * disapproved.
     *
     * Generated from protobuf field <code>repeated string disapproved_countries = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDisapprovedCountries()
    {
        return $this->disapproved_countries;
    }

    /**
     * List of country codes (ISO 3166-1 alpha-2) where the offer is
     * disapproved.
     *
     * Generated from protobuf field <code>repeated string disapproved_countries = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDisapprovedCountries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->disapproved_countries = $arr;

        return $this;
    }

}


