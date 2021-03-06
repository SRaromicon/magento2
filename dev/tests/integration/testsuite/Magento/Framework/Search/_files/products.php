<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @copyright   Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/** @var $product \Magento\Catalog\Model\Product */
$product = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()
    ->create('Magento\Catalog\Model\Product');
$product->isObjectNew(true);
$product->setTypeId(\Magento\Catalog\Model\Product\Type::TYPE_SIMPLE)
    ->setId(1)
    ->setAttributeSetId(4)
    ->setWebsiteIds(array(1))
    ->setName('Green socks')
    ->setSku('green_socks')
    ->setPrice(10)
    ->setWeight(1)
    ->setShortDescription("Unisex green socks for some good peoples")
    ->setTaxClassId(0)
    ->setTierPrice(
        array(
            array(
                'website_id' => 0,
                'cust_group' => \Magento\Customer\Service\V1\CustomerGroupServiceInterface::CUST_GROUP_ALL,
                'price_qty' => 2,
                'price' => 8,
            ),
            array(
                'website_id' => 0,
                'cust_group' => \Magento\Customer\Service\V1\CustomerGroupServiceInterface::CUST_GROUP_ALL,
                'price_qty' => 5,
                'price' => 5,
            ),
            array(
                'website_id' => 0,
                'cust_group' => \Magento\Customer\Service\V1\CustomerGroupServiceInterface::NOT_LOGGED_IN_ID,
                'price_qty' => 3,
                'price' => 5,
            ),
        )
    )
    ->setDescription('Unisex <b>green socks</b> for some good peoples')
    ->setMetaTitle('green socks metadata')
    ->setMetaKeyword('green,socks,unisex')
    ->setMetaDescription('green socks metadata description')
    ->setVisibility(\Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH)
    ->setStatus(\Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED)
    ->setCategoryIds(array(2))
    ->setStockData(
        array(
            'use_config_manage_stock' => 1,
            'qty' => 100,
            'is_qty_decimal' => 0,
            'is_in_stock' => 1,
        )
    )
    ->setCanSaveCustomOptions(true)
    ->setProductOptions(
        array(
            array(
                'id' => 1,
                'option_id' => 0,
                'previous_group' => 'text',
                'title' => 'Stone',
                'type' => 'field',
                'is_require' => 1,
                'sort_order' => 0,
                'price' => 1,
                'price_type' => 'fixed',
                'sku' => 'stone-1',
                'max_characters' => 100
            )
        )
    )
    ->setHasOptions(true)
    ->save();

/** @var $product \Magento\Catalog\Model\Product */
$product = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()
    ->create('Magento\Catalog\Model\Product');
$product->isObjectNew(true);
$product->setTypeId(\Magento\Catalog\Model\Product\Type::TYPE_SIMPLE)
    ->setId(2)
    ->setAttributeSetId(4)
    ->setWebsiteIds(array(1))
    ->setName('White shorts')
    ->setSku('white_shorts')
    ->setPrice(12)
    ->setWeight(2)
    ->setShortDescription("Small white shorts for your children")
    ->setTaxClassId(0)
    ->setTierPrice(
        array(
            array(
                'website_id' => 0,
                'cust_group' => \Magento\Customer\Service\V1\CustomerGroupServiceInterface::CUST_GROUP_ALL,
                'price_qty' => 2,
                'price' => 8,
            ),
            array(
                'website_id' => 0,
                'cust_group' => \Magento\Customer\Service\V1\CustomerGroupServiceInterface::CUST_GROUP_ALL,
                'price_qty' => 5,
                'price' => 5,
            ),
            array(
                'website_id' => 0,
                'cust_group' => \Magento\Customer\Service\V1\CustomerGroupServiceInterface::NOT_LOGGED_IN_ID,
                'price_qty' => 3,
                'price' => 5,
            ),
        )
    )
    ->setDescription('Small <b>white shorts</b> for your children')
    ->setMetaTitle('white shorts for your children metadata')
    ->setMetaKeyword('white,shorts,children')
    ->setMetaDescription('white shorts for your children metadata description')
    ->setVisibility(\Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH)
    ->setStatus(\Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED)
    ->setCategoryIds(array(2))
    ->setStockData(
        array(
            'use_config_manage_stock' => 1,
            'qty' => 100,
            'is_qty_decimal' => 0,
            'is_in_stock' => 1,
        )
    )
    ->setCanSaveCustomOptions(true)
    ->setProductOptions(
        array(
            array(
                'id' => 2,
                'option_id' => 0,
                'previous_group' => 'text',
                'title' => 'Gold',
                'type' => 'field',
                'is_require' => 1,
                'sort_order' => 0,
                'price' => 1,
                'price_type' => 'fixed',
                'sku' => 'Gold',
                'max_characters' => 100
            )
        )
    )
    ->setHasOptions(true)
    ->save();

/** @var $product \Magento\Catalog\Model\Product */
$product = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()
    ->create('Magento\Catalog\Model\Product');
$product->isObjectNew(true);
$product->setTypeId(\Magento\Catalog\Model\Product\Type::TYPE_SIMPLE)
    ->setId(3)
    ->setAttributeSetId(4)
    ->setWebsiteIds(array(1))
    ->setName('Red trousers')
    ->setSku('red_trousers')
    ->setPrice(14)
    ->setWeight(3)
    ->setShortDescription("Red pants for men")
    ->setTaxClassId(0)
    ->setTierPrice(
        array(
            array(
                'website_id' => 0,
                'cust_group' => \Magento\Customer\Service\V1\CustomerGroupServiceInterface::CUST_GROUP_ALL,
                'price_qty' => 2,
                'price' => 8,
            ),
            array(
                'website_id' => 0,
                'cust_group' => \Magento\Customer\Service\V1\CustomerGroupServiceInterface::CUST_GROUP_ALL,
                'price_qty' => 5,
                'price' => 5,
            ),
            array(
                'website_id' => 0,
                'cust_group' => \Magento\Customer\Service\V1\CustomerGroupServiceInterface::NOT_LOGGED_IN_ID,
                'price_qty' => 3,
                'price' => 5,
            ),
        )
    )
    ->setDescription('Red pants for <b>men</b>')
    ->setMetaTitle('Red trousers meta title')
    ->setMetaKeyword('red,trousers,meta,men')
    ->setMetaDescription('Red trousers meta description')
    ->setVisibility(\Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH)
    ->setStatus(\Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED)
    ->setCategoryIds(array(2))
    ->setStockData(
        array(
            'use_config_manage_stock' => 1,
            'qty' => 100,
            'is_qty_decimal' => 0,
            'is_in_stock' => 1,
        )
    )
    ->setCanSaveCustomOptions(true)
    ->setProductOptions(
        array(
            array(
                'id' => 3,
                'option_id' => 0,
                'previous_group' => 'text',
                'title' => 'Silver',
                'type' => 'field',
                'is_require' => 1,
                'sort_order' => 0,
                'price' => 1,
                'price_type' => 'fixed',
                'sku' => 'silver',
                'max_characters' => 100
            )
        )
    )
    ->setHasOptions(true)
    ->save();

/** @var $product \Magento\Catalog\Model\Product */
$product = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()
    ->create('Magento\Catalog\Model\Product');
$product->isObjectNew(true);
$product->setTypeId(\Magento\Catalog\Model\Product\Type::TYPE_SIMPLE)
    ->setId(4)
    ->setAttributeSetId(4)
    ->setWebsiteIds(array(1))
    ->setName('Blue briefs')
    ->setSku('blue_briefs')
    ->setPrice(14)
    ->setWeight(3)
    ->setShortDescription("Blue briefs for Russian men")
    ->setTaxClassId(0)
    ->setTierPrice(
        array(
            array(
                'website_id' => 0,
                'cust_group' => \Magento\Customer\Service\V1\CustomerGroupServiceInterface::CUST_GROUP_ALL,
                'price_qty' => 2,
                'price' => 8,
            ),
            array(
                'website_id' => 0,
                'cust_group' => \Magento\Customer\Service\V1\CustomerGroupServiceInterface::CUST_GROUP_ALL,
                'price_qty' => 5,
                'price' => 5,
            ),
            array(
                'website_id' => 0,
                'cust_group' => \Magento\Customer\Service\V1\CustomerGroupServiceInterface::NOT_LOGGED_IN_ID,
                'price_qty' => 3,
                'price' => 5,
            ),
        )
    )
    ->setDescription('Blue briefs for <b>men</b>')
    ->setMetaTitle('Blue briefs meta title')
    ->setMetaKeyword('blue,briefs,meta,men')
    ->setMetaDescription('Blue briefs meta description')
    ->setVisibility(\Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH)
    ->setStatus(\Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED)
    ->setCategoryIds(array(2))
    ->setStockData(
        array(
            'use_config_manage_stock' => 1,
            'qty' => 100,
            'is_qty_decimal' => 0,
            'is_in_stock' => 1,
        )
    )
    ->save();

/** @var $product \Magento\Catalog\Model\Product */
$product = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()
    ->create('Magento\Catalog\Model\Product');
$product->isObjectNew(true);
$product->setTypeId(\Magento\Catalog\Model\Product\Type::TYPE_SIMPLE)
    ->setId(5)
    ->setAttributeSetId(4)
    ->setWebsiteIds(array(1))
    ->setName('Grey shorts')
    ->setSku('grey_shorts')
    ->setPrice(14)
    ->setWeight(3)
    ->setShortDescription("Grey shorts for all peoples")
    ->setTaxClassId(0)
    ->setTierPrice(
        array(
            array(
                'website_id' => 0,
                'cust_group' => \Magento\Customer\Service\V1\CustomerGroupServiceInterface::CUST_GROUP_ALL,
                'price_qty' => 2,
                'price' => 8,
            ),
            array(
                'website_id' => 0,
                'cust_group' => \Magento\Customer\Service\V1\CustomerGroupServiceInterface::CUST_GROUP_ALL,
                'price_qty' => 5,
                'price' => 5,
            ),
            array(
                'website_id' => 0,
                'cust_group' => \Magento\Customer\Service\V1\CustomerGroupServiceInterface::NOT_LOGGED_IN_ID,
                'price_qty' => 3,
                'price' => 5,
            ),
        )
    )
    ->setDescription('Grey shorts for <b>peoples</b>')
    ->setMetaTitle('Grey shorts meta title')
    ->setMetaKeyword('grey,shorts,meta,men')
    ->setMetaDescription('Grey shorts meta description')
    ->setVisibility(\Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH)
    ->setStatus(\Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED)
    ->setCategoryIds(array(2))
    ->setStockData(
        array(
            'use_config_manage_stock' => 1,
            'qty' => 100,
            'is_qty_decimal' => 0,
            'is_in_stock' => 1,
        )
    )
    ->save();
