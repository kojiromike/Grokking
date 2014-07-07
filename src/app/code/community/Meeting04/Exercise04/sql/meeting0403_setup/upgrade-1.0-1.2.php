<?php
/**
 * Created by PhpStorm.
 * User: smithm5
 * Date: 6/30/14
 * Time: 12:55 AM
 */
return call_user_func(
/**
 * Set up comments
 *
 * @param Mage_Core_Model_Resource_Setup $installer
 * @return bool true on success
 */
    function (Mage_Core_Model_Resource_Setup $installer) {
        $commentTblName = 'meeting0404/comment';
        $installer->startSetup();
        $commentTable = $installer->getTable($commentTblName);
        $conn = $installer->getConnection();
        $tbl = $conn
            ->addColumn($commentTable, Varien_Db_Ddl_Table)
            ->newTable($commentTable)
            ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
                'nullable' => false,
                'primary' => true,
                'identity' => true,
            ))->addColumn('text', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(), 'The comment text');
        $installer->endSetup();
        return true;
    }, $this);
