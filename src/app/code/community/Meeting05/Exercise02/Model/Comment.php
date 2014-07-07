<?php
/**
 * Created by PhpStorm.
 * User: smithm5
 * Date: 6/28/14
 * Time: 11:32 PM
 */

/**
 * Class Meeting05_Exercise02_Model_Comment
 *
 * @method Meeting05_Exercise02_Model_Comment setId($id)
 * @method mixed getId()
 * @method Meeting05_Exercise02_Model_Comment setText(string $text)
 * @method string getText()
 */
class Meeting05_Exercise02_Model_Comment extends Mage_Core_Model_Abstract {
    protected function _construct()
    {
        $this->_init('meeting0502/comment');
    }
}
