<?php
/**
 * Created by PhpStorm.
 * User: smithm5
 * Date: 6/29/14
 * Time: 1:57 PM
 */

return call_user_func(
/**
 * Set up comments
 *
 * @param Mage_Core_Model_Resource_Setup $installer
 * @return bool true on success
 */
function (Mage_Core_Model_Resource_Setup $installer) {
    $installer->startSetup();
    /**
     * @var $commentModel Meeting05_Exercise04_Model_Comment
     */
    $commentModel = Mage::getModel('meeting0504/comment');
    /**
     * @var $commentCollection Meeting05_Exercise04_Model_Resource_Comment_Collection
     */
    $commentCollection = $commentModel->getResourceCollection();
    $data = array('This prod is great', 'I love cheese!', 'Words are hard');
    foreach ($data as $text) {
        /** @var Meeting05_Exercise04_Model_Comment $item */
        $item = $commentCollection->getNewEmptyItem()
            ->setText($text);
        $commentCollection->addItem($item);
    }
    $commentCollection->save();
    $installer->endSetup();
    return true;
}, $this);
