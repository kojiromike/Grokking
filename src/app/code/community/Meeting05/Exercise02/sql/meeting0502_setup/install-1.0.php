<?php

return call_user_func(
/**
 * Add a customer/customer multi select attribute using a custom source and backend model.
 * Make it possible to unset all options for that attribute on customers using the Admin interface.
 *
 * @param Mage_Eav_Model_Entity_Setup $installer
 * @param Varien_Db_Adapter_Interface $conn
 * @return bool true on success
 */
function (Mage_Eav_Model_Entity_Setup $installer, Varien_Db_Adapter_Interface $conn) {
    $attr = array(
        'backend' => 'meeting0502/backend',
        // 'type' => 'multiselect',
        //'frontend' => 'select',
        'input' => 'multiselect',
        'label' => 'Sanctimony',
        // 'frontend_class' =>
        'source' => 'meeting0502/source',
        'required' => false,
        // 'user_defined' =>
        // 'default' =>
        // 'unique' =>
        'note' => 'You did this to yourself',
        //'global' =>
        // 'option' => array('values' => $options),
    );
    $installer
        ->startSetup()
        ->addAttribute('customer', 'sanctimoniousness', $attr)
        ->endSetup();
    return true;
}, $this, $conn);
