<?php

return call_user_func(
/**
 * Set up comments
 *
 * @param Mage_Core_Model_Resource_Setup $installer
 * @return bool true on success
 */
function (Mage_Core_Model_Resource_Setup $installer) {
    $commentTblName = 'meeting0402_comments';
    $installer->startSetup();
    $commentTable = $installer->getTable($commentTblName);
    if (!$installer->tableExists($commentTable)) {
        $conn = $installer->getConnection();
        $tbl = $conn
            ->newTable($commentTable)
            ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
                'nullable' => false,
                'primary' => true,
                'identity' => true,
            ))->addColumn('text', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(), 'The comment text');
        $conn->createTable($tbl);
    }
    $installer->endSetup();
    return true;
}, $this);
