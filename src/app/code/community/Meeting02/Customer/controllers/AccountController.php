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
 * @category    Meeting02
 * @package     Meeting02_RedirectToRoot
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Assign a redirect before routing home
 *
 * @category    Meeting04
 * @package     Meeting04_Customer
 */
require_once(Mage::getModuleDir('controllers', 'Mage_Customer') . DS . 'AccountController.php');
class Meeting04_Customer_AccountController extends Mage_Customer_AccountController
{
    /**
     * Log in and redirect to a category page
     *
     * @return null
     */
    public function loginAction()
    {
        $this->_getSession()->setBeforeAuthUrl(Mage::getUrl('category'));
        parent::loginAction();
    }
}