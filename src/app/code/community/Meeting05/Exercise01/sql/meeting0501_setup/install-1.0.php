<?php

/**
 * Use a setup script to add a catalog/product select attribute using the Magento
 * eav/entity_attribute_source_table. Also add some options.
 */
return call_user_func(
/**
 * Set up comments
 *
 * @param Mage_Eav_Model_Entity_Setup $installer
 * @param Varien_Db_Adapter_Interface $conn
 * @return bool true on success
 */
function (Mage_Eav_Model_Entity_Setup $installer, Varien_Db_Adapter_Interface $conn) {
    $options = array(
        'zip',
        'mild',
        'moderate',
        'much',
        'starving',
    );
    $attr = array(
        // 'backend' => 'int',
        'type' => 'int',
        // 'frontend' => 'select',
        'input' => 'select',
        'label' => 'Voraciousness',
        // 'frontend_class' =>
        'source' => 'eav/entity_attribute_source_table',
        'required' => false,
        // 'user_defined' =>
        // 'default' =>
        // 'unique' =>
        'note' => 'Added by monkeys',
        //'global' =>
        'option' => array('values' => $options),
    );
    $installer
        ->startSetup()
        ->addAttribute('catalog_product', 'voraciousness', $attr)
        ->endSetup();
    return true;
}, $this, $conn);
