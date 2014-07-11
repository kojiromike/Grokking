<?php
/**
 * Copyright (c) 2013-2014 eBay Enterprise, Inc.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @copyright   Copyright (c) 2013-2014 eBay Enterprise, Inc. (http://www.ebayenterprise.com/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
/** @var Mage_Eav_Model_Entity_Setup $installer */
$installer = $this;
/** @var EbayEnterprise_MageLog_Helper_Data $logHelper */
//$logHelper = // Mage::getHelper('ebayenterprise_magelog');

$websiteScope = Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL;
$attrDefaults = array(
    'is_global' => false,
    'frontend_input' => 'text',
    'default_value_text' => '',
    'default_value_yesno' => false,
    'default_value_date' => '',
    'default_value_textarea' => '',
    'is_unique' => false,
    'is_required' => false,
    'frontend_class' => '',
    'is_searchable' => true,
    'is_visible_in_advanced_search' => true,
    'is_comparable' => true,
    'is_used_for_promo_rules' => false,
    'is_html_allowed_on_front' => true,
    'is_visible_on_front' => false,
    'used_in_product_listing' => false,
    'used_for_sort_by' => false,
    'is_configurable' => false,
    'is_filterable' => false,
    'is_filterable_in_search' => false,
    'backend_type' => 'varchar',
    'default_value' => '',
);
$attrs = array(
    'size' => array(
        'scope' => $websiteScope,
        'frontend_label' => 'Size',
        'group' => 'General',
        'frontend_input' => 'text',
        'unique' => false,
        'apply_to' => array('simple', 'configurable', 'bundle'),
        'default' => '',
    ), 'style_id' => array(
        'scope' => $websiteScope,
        'frontend_label' => 'Style Id',
        'group' => 'General',
        'frontend_input' => 'text',
        'unique' => false,
        'apply_to' => array('simple', 'configurable', 'virtual', 'bundle', 'downloadable', 'giftcard'),
        'default' => '',
    ), 'is_clean' => array(
        'scope' => $websiteScope,
        'frontend_label' => 'Is Clean',
        'group' => 'Retail Order Management',
        'frontend_input' => 'boolean',
        'unique' => false,
        'apply_to' => array('simple', 'configurable', 'virtual', 'bundle', 'downloadable', 'giftcard'),
        'default' => false,
        'backend_type' => 'int',
    ), 'unresolved_product_links' => array(
        'scope' => $websiteScope,
        'frontend_label' => 'Unresolved Product Links',
        'group' => 'Retail Order Management',
        'frontend_input' => 'textarea',
        'unique' => false,
        'apply_to' => array('simple', 'configurable', 'virtual', 'bundle', 'downloadable', 'giftcard'),
        'default' => '',
        'backend_type' => 'text',
    ), 'hts_codes' => array(
        'scope' => $websiteScope,
        'frontend_label' => 'HTS Codes',
        'group' => 'Retail Order Management',
        'frontend_input' => 'textarea',
        'unique' => false,
        'apply_to' => array('simple', 'configurable', 'virtual', 'bundle', 'downloadable', 'giftcard'),
        'default' => '',
        'backend_type' => 'text',
    ), 'tax_code' => array(
        'scope' => $websiteScope,
        'frontend_label' => 'Tax Code',
        'group' => 'Prices',
        'frontend_input' => 'text',
        'unique' => false,
        'is_required' => true,
        'apply_to' => array('simple', 'virtual', 'bundle', 'downloadable', 'giftcard'),
    )
);
$installer->startSetup();
foreach ($attrs as $code => $data) {
    Mage::log(sprintf('[%s] Installing attribute "%s".', 'EbayEnterprise_Eb2cProduct', $code));
    $installer->addAttribute('catalog_product', $code, array_merge($attrDefaults, $data));
}
$installer->endSetup();
