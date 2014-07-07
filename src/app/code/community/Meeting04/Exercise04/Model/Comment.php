<?php
/**
 * Created by PhpStorm.
 * User: smithm5
 * Date: 6/28/14
 * Time: 11:32 PM
 */

/**
 * Class Meeting04_Exercise04_Model_Comment
 *
 * @method Meeting04_Exercise04_Model_Comment setId($id)
 * @method mixed getId()
 * @method Meeting04_Exercise04_Model_Comment setText(string $text)
 * @method string getText()
 */
class Meeting04_Exercise04_Model_Comment extends Mage_Core_Model_Abstract {
    protected function _construct()
    {
        $this->_init('meeting0404/comment');
    }
}
