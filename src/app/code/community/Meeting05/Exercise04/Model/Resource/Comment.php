<?php
/**
 * Created by PhpStorm.
 * User: smithm5
 * Date: 6/28/14
 * Time: 11:47 PM
 */

class Meeting05_Exercise04_Model_Resource_Comment extends Mage_Core_Model_Resource_Db_Abstract {
    protected function _construct()
    {
        $this->_init('meeting0504/comment', 'id');
    }
}
