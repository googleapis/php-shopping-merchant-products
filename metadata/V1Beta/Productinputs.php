<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/products/v1beta/productinputs.proto

namespace GPBMetadata\Google\Shopping\Merchant\Products\V1Beta;

class Productinputs
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Shopping\Merchant\Products\V1Beta\ProductsCommon::initOnce();
        \GPBMetadata\Google\Shopping\Type\Types::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
<google/shopping/merchant/products/v1beta/productinputs.proto(google.shopping.merchant.products.v1betagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/empty.proto>google/shopping/merchant/products/v1beta/products_common.proto google/shopping/type/types.proto"�
ProductInput
name (	B�A
product (	B�AB
channel (2).google.shopping.type.Channel.ChannelEnumB�A�A
offer_id (	B�A�A 
content_language (	B�A�A

feed_label (	B�A�A 
version_number (B�AH �M

attributes (24.google.shopping.merchant.products.v1beta.AttributesB�AE
custom_attributes	 (2%.google.shopping.type.CustomAttributeB�A:z�Aw
\'merchantapi.googleapis.com/ProductInput/accounts/{account}/productInputs/{productinput}*productInputs2productInputB
_version_number"�
InsertProductInputRequest:
parent (	B*�A�A$"merchantapi.googleapis.com/ProductR
product_input (26.google.shopping.merchant.products.v1beta.ProductInputB�A
data_source (	B�A"t
DeleteProductInputRequest=
name (	B/�A�A)
\'merchantapi.googleapis.com/ProductInput
data_source (	B�A2�
ProductInputsService�
InsertProductInputC.google.shopping.merchant.products.v1beta.InsertProductInputRequest6.google.shopping.merchant.products.v1beta.ProductInput"P���J"9/products/v1beta/{parent=accounts/*}/productInputs:insert:product_input�
DeleteProductInputC.google.shopping.merchant.products.v1beta.DeleteProductInputRequest.google.protobuf.Empty"A�Aname���4*2/products/v1beta/{name=accounts/*/productInputs/*}G�Amerchantapi.googleapis.com�A\'https://www.googleapis.com/auth/contentB�
,com.google.shopping.merchant.products.v1betaBProductInputsProtoPZNcloud.google.com/go/shopping/merchant/products/apiv1beta/productspb;productspbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

