<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/products/v1beta/products_common.proto

namespace Google\Shopping\Merchant\Products\V1beta\ProductStatus\ItemLevelIssue;

use UnexpectedValueException;

/**
 * How the issue affects the serving of the product.
 *
 * Protobuf type <code>google.shopping.merchant.products.v1beta.ProductStatus.ItemLevelIssue.Severity</code>
 */
class Severity
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>SEVERITY_UNSPECIFIED = 0;</code>
     */
    const SEVERITY_UNSPECIFIED = 0;
    /**
     * This issue represents a warning and does not have a direct affect
     * on the product.
     *
     * Generated from protobuf enum <code>NOT_IMPACTED = 1;</code>
     */
    const NOT_IMPACTED = 1;
    /**
     * The product is demoted and most likely have limited performance
     * in search results
     *
     * Generated from protobuf enum <code>DEMOTED = 2;</code>
     */
    const DEMOTED = 2;
    /**
     * Issue disapproves the product.
     *
     * Generated from protobuf enum <code>DISAPPROVED = 3;</code>
     */
    const DISAPPROVED = 3;

    private static $valueToName = [
        self::SEVERITY_UNSPECIFIED => 'SEVERITY_UNSPECIFIED',
        self::NOT_IMPACTED => 'NOT_IMPACTED',
        self::DEMOTED => 'DEMOTED',
        self::DISAPPROVED => 'DISAPPROVED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


