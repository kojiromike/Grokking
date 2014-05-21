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
 * @category    Meeting01
 * @package     Meeting01_RewriteOrder
 * @copyright   Copyright (c) 2013 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Order model
 *
 * Supported events:
 *  sales_order_load_after
 *  sales_order_save_before
 *  sales_order_save_after
 *  sales_order_delete_before
 *  sales_order_delete_after
 *
 * @method Mage_Sales_Model_Resource_Order _getResource()
 * @method Mage_Sales_Model_Resource_Order getResource()
 * @method string getState()
 * @method string getStatus()
 * @method Mage_Sales_Model_Order setStatus(string $value)
 * @method string getCouponCode()
 * @method Mage_Sales_Model_Order setCouponCode(string $value)
 * @method string getProtectCode()
 * @method Mage_Sales_Model_Order setProtectCode(string $value)
 * @method string getShippingDescription()
 * @method Mage_Sales_Model_Order setShippingDescription(string $value)
 * @method int getIsVirtual()
 * @method Mage_Sales_Model_Order setIsVirtual(int $value)
 * @method int getStoreId()
 * @method Mage_Sales_Model_Order setStoreId(int $value)
 * @method int getCustomerId()
 * @method Mage_Sales_Model_Order setCustomerId(int $value)
 * @method float getBaseDiscountAmount()
 * @method Mage_Sales_Model_Order setBaseDiscountAmount(float $value)
 * @method float getBaseDiscountCanceled()
 * @method Mage_Sales_Model_Order setBaseDiscountCanceled(float $value)
 * @method float getBaseDiscountInvoiced()
 * @method Mage_Sales_Model_Order setBaseDiscountInvoiced(float $value)
 * @method float getBaseDiscountRefunded()
 * @method Mage_Sales_Model_Order setBaseDiscountRefunded(float $value)
 * @method float getBaseGrandTotal()
 * @method Mage_Sales_Model_Order setBaseGrandTotal(float $value)
 * @method float getBaseShippingAmount()
 * @method Mage_Sales_Model_Order setBaseShippingAmount(float $value)
 * @method float getBaseShippingCanceled()
 * @method Mage_Sales_Model_Order setBaseShippingCanceled(float $value)
 * @method float getBaseShippingInvoiced()
 * @method Mage_Sales_Model_Order setBaseShippingInvoiced(float $value)
 * @method float getBaseShippingRefunded()
 * @method Mage_Sales_Model_Order setBaseShippingRefunded(float $value)
 * @method float getBaseShippingTaxAmount()
 * @method Mage_Sales_Model_Order setBaseShippingTaxAmount(float $value)
 * @method float getBaseShippingTaxRefunded()
 * @method Mage_Sales_Model_Order setBaseShippingTaxRefunded(float $value)
 * @method float getBaseSubtotal()
 * @method Mage_Sales_Model_Order setBaseSubtotal(float $value)
 * @method float getBaseSubtotalCanceled()
 * @method Mage_Sales_Model_Order setBaseSubtotalCanceled(float $value)
 * @method float getBaseSubtotalInvoiced()
 * @method Mage_Sales_Model_Order setBaseSubtotalInvoiced(float $value)
 * @method float getBaseSubtotalRefunded()
 * @method Mage_Sales_Model_Order setBaseSubtotalRefunded(float $value)
 * @method float getBaseTaxAmount()
 * @method Mage_Sales_Model_Order setBaseTaxAmount(float $value)
 * @method float getBaseTaxCanceled()
 * @method Mage_Sales_Model_Order setBaseTaxCanceled(float $value)
 * @method float getBaseTaxInvoiced()
 * @method Mage_Sales_Model_Order setBaseTaxInvoiced(float $value)
 * @method float getBaseTaxRefunded()
 * @method Mage_Sales_Model_Order setBaseTaxRefunded(float $value)
 * @method float getBaseToGlobalRate()
 * @method Mage_Sales_Model_Order setBaseToGlobalRate(float $value)
 * @method float getBaseToOrderRate()
 * @method Mage_Sales_Model_Order setBaseToOrderRate(float $value)
 * @method float getBaseTotalCanceled()
 * @method Mage_Sales_Model_Order setBaseTotalCanceled(float $value)
 * @method float getBaseTotalInvoiced()
 * @method Mage_Sales_Model_Order setBaseTotalInvoiced(float $value)
 * @method float getBaseTotalInvoicedCost()
 * @method Mage_Sales_Model_Order setBaseTotalInvoicedCost(float $value)
 * @method float getBaseTotalOfflineRefunded()
 * @method Mage_Sales_Model_Order setBaseTotalOfflineRefunded(float $value)
 * @method float getBaseTotalOnlineRefunded()
 * @method Mage_Sales_Model_Order setBaseTotalOnlineRefunded(float $value)
 * @method float getBaseTotalPaid()
 * @method Mage_Sales_Model_Order setBaseTotalPaid(float $value)
 * @method float getBaseTotalQtyOrdered()
 * @method Mage_Sales_Model_Order setBaseTotalQtyOrdered(float $value)
 * @method float getBaseTotalRefunded()
 * @method Mage_Sales_Model_Order setBaseTotalRefunded(float $value)
 * @method float getDiscountAmount()
 * @method Mage_Sales_Model_Order setDiscountAmount(float $value)
 * @method float getDiscountCanceled()
 * @method Mage_Sales_Model_Order setDiscountCanceled(float $value)
 * @method float getDiscountInvoiced()
 * @method Mage_Sales_Model_Order setDiscountInvoiced(float $value)
 * @method float getDiscountRefunded()
 * @method Mage_Sales_Model_Order setDiscountRefunded(float $value)
 * @method float getGrandTotal()
 * @method Mage_Sales_Model_Order setGrandTotal(float $value)
 * @method float getShippingAmount()
 * @method Mage_Sales_Model_Order setShippingAmount(float $value)
 * @method float getShippingCanceled()
 * @method Mage_Sales_Model_Order setShippingCanceled(float $value)
 * @method float getShippingInvoiced()
 * @method Mage_Sales_Model_Order setShippingInvoiced(float $value)
 * @method float getShippingRefunded()
 * @method Mage_Sales_Model_Order setShippingRefunded(float $value)
 * @method float getShippingTaxAmount()
 * @method Mage_Sales_Model_Order setShippingTaxAmount(float $value)
 * @method float getShippingTaxRefunded()
 * @method Mage_Sales_Model_Order setShippingTaxRefunded(float $value)
 * @method float getStoreToBaseRate()
 * @method Mage_Sales_Model_Order setStoreToBaseRate(float $value)
 * @method float getStoreToOrderRate()
 * @method Mage_Sales_Model_Order setStoreToOrderRate(float $value)
 * @method float getSubtotal()
 * @method Mage_Sales_Model_Order setSubtotal(float $value)
 * @method float getSubtotalCanceled()
 * @method Mage_Sales_Model_Order setSubtotalCanceled(float $value)
 * @method float getSubtotalInvoiced()
 * @method Mage_Sales_Model_Order setSubtotalInvoiced(float $value)
 * @method float getSubtotalRefunded()
 * @method Mage_Sales_Model_Order setSubtotalRefunded(float $value)
 * @method float getTaxAmount()
 * @method Mage_Sales_Model_Order setTaxAmount(float $value)
 * @method float getTaxCanceled()
 * @method Mage_Sales_Model_Order setTaxCanceled(float $value)
 * @method float getTaxInvoiced()
 * @method Mage_Sales_Model_Order setTaxInvoiced(float $value)
 * @method float getTaxRefunded()
 * @method Mage_Sales_Model_Order setTaxRefunded(float $value)
 * @method float getTotalCanceled()
 * @method Mage_Sales_Model_Order setTotalCanceled(float $value)
 * @method float getTotalInvoiced()
 * @method Mage_Sales_Model_Order setTotalInvoiced(float $value)
 * @method float getTotalOfflineRefunded()
 * @method Mage_Sales_Model_Order setTotalOfflineRefunded(float $value)
 * @method float getTotalOnlineRefunded()
 * @method Mage_Sales_Model_Order setTotalOnlineRefunded(float $value)
 * @method float getTotalPaid()
 * @method Mage_Sales_Model_Order setTotalPaid(float $value)
 * @method float getTotalQtyOrdered()
 * @method Mage_Sales_Model_Order setTotalQtyOrdered(float $value)
 * @method float getTotalRefunded()
 * @method Mage_Sales_Model_Order setTotalRefunded(float $value)
 * @method int getCanShipPartially()
 * @method Mage_Sales_Model_Order setCanShipPartially(int $value)
 * @method int getCanShipPartiallyItem()
 * @method Mage_Sales_Model_Order setCanShipPartiallyItem(int $value)
 * @method int getCustomerIsGuest()
 * @method Mage_Sales_Model_Order setCustomerIsGuest(int $value)
 * @method int getCustomerNoteNotify()
 * @method Mage_Sales_Model_Order setCustomerNoteNotify(int $value)
 * @method int getBillingAddressId()
 * @method Mage_Sales_Model_Order setBillingAddressId(int $value)
 * @method int getCustomerGroupId()
 * @method Mage_Sales_Model_Order setCustomerGroupId(int $value)
 * @method int getEditIncrement()
 * @method Mage_Sales_Model_Order setEditIncrement(int $value)
 * @method int getEmailSent()
 * @method Mage_Sales_Model_Order setEmailSent(int $value)
 * @method int getForcedDoShipmentWithInvoice()
 * @method Mage_Sales_Model_Order setForcedDoShipmentWithInvoice(int $value)
 * @method int getGiftMessageId()
 * @method Mage_Sales_Model_Order setGiftMessageId(int $value)
 * @method int getPaymentAuthorizationExpiration()
 * @method Mage_Sales_Model_Order setPaymentAuthorizationExpiration(int $value)
 * @method int getPaypalIpnCustomerNotified()
 * @method Mage_Sales_Model_Order setPaypalIpnCustomerNotified(int $value)
 * @method int getQuoteAddressId()
 * @method Mage_Sales_Model_Order setQuoteAddressId(int $value)
 * @method int getQuoteId()
 * @method Mage_Sales_Model_Order setQuoteId(int $value)
 * @method int getShippingAddressId()
 * @method Mage_Sales_Model_Order setShippingAddressId(int $value)
 * @method float getAdjustmentNegative()
 * @method Mage_Sales_Model_Order setAdjustmentNegative(float $value)
 * @method float getAdjustmentPositive()
 * @method Mage_Sales_Model_Order setAdjustmentPositive(float $value)
 * @method float getBaseAdjustmentNegative()
 * @method Mage_Sales_Model_Order setBaseAdjustmentNegative(float $value)
 * @method float getBaseAdjustmentPositive()
 * @method Mage_Sales_Model_Order setBaseAdjustmentPositive(float $value)
 * @method float getBaseShippingDiscountAmount()
 * @method Mage_Sales_Model_Order setBaseShippingDiscountAmount(float $value)
 * @method float getBaseSubtotalInclTax()
 * @method Mage_Sales_Model_Order setBaseSubtotalInclTax(float $value)
 * @method Mage_Sales_Model_Order setBaseTotalDue(float $value)
 * @method float getPaymentAuthorizationAmount()
 * @method Mage_Sales_Model_Order setPaymentAuthorizationAmount(float $value)
 * @method float getShippingDiscountAmount()
 * @method Mage_Sales_Model_Order setShippingDiscountAmount(float $value)
 * @method float getSubtotalInclTax()
 * @method Mage_Sales_Model_Order setSubtotalInclTax(float $value)
 * @method Mage_Sales_Model_Order setTotalDue(float $value)
 * @method float getWeight()
 * @method Mage_Sales_Model_Order setWeight(float $value)
 * @method string getCustomerDob()
 * @method Mage_Sales_Model_Order setCustomerDob(string $value)
 * @method string getIncrementId()
 * @method Mage_Sales_Model_Order setIncrementId(string $value)
 * @method string getAppliedRuleIds()
 * @method Mage_Sales_Model_Order setAppliedRuleIds(string $value)
 * @method string getBaseCurrencyCode()
 * @method Mage_Sales_Model_Order setBaseCurrencyCode(string $value)
 * @method string getCustomerEmail()
 * @method Mage_Sales_Model_Order setCustomerEmail(string $value)
 * @method string getCustomerFirstname()
 * @method Mage_Sales_Model_Order setCustomerFirstname(string $value)
 * @method string getCustomerLastname()
 * @method Mage_Sales_Model_Order setCustomerLastname(string $value)
 * @method string getCustomerMiddlename()
 * @method Mage_Sales_Model_Order setCustomerMiddlename(string $value)
 * @method string getCustomerPrefix()
 * @method Mage_Sales_Model_Order setCustomerPrefix(string $value)
 * @method string getCustomerSuffix()
 * @method Mage_Sales_Model_Order setCustomerSuffix(string $value)
 * @method string getCustomerTaxvat()
 * @method Mage_Sales_Model_Order setCustomerTaxvat(string $value)
 * @method string getDiscountDescription()
 * @method Mage_Sales_Model_Order setDiscountDescription(string $value)
 * @method string getExtCustomerId()
 * @method Mage_Sales_Model_Order setExtCustomerId(string $value)
 * @method string getExtOrderId()
 * @method Mage_Sales_Model_Order setExtOrderId(string $value)
 * @method string getGlobalCurrencyCode()
 * @method Mage_Sales_Model_Order setGlobalCurrencyCode(string $value)
 * @method string getHoldBeforeState()
 * @method Mage_Sales_Model_Order setHoldBeforeState(string $value)
 * @method string getHoldBeforeStatus()
 * @method Mage_Sales_Model_Order setHoldBeforeStatus(string $value)
 * @method string getOrderCurrencyCode()
 * @method Mage_Sales_Model_Order setOrderCurrencyCode(string $value)
 * @method string getOriginalIncrementId()
 * @method Mage_Sales_Model_Order setOriginalIncrementId(string $value)
 * @method string getRelationChildId()
 * @method Mage_Sales_Model_Order setRelationChildId(string $value)
 * @method string getRelationChildRealId()
 * @method Mage_Sales_Model_Order setRelationChildRealId(string $value)
 * @method string getRelationParentId()
 * @method Mage_Sales_Model_Order setRelationParentId(string $value)
 * @method string getRelationParentRealId()
 * @method Mage_Sales_Model_Order setRelationParentRealId(string $value)
 * @method string getRemoteIp()
 * @method Mage_Sales_Model_Order setRemoteIp(string $value)
 * @method Mage_Sales_Model_Order setShippingMethod(string $value)
 * @method string getStoreCurrencyCode()
 * @method Mage_Sales_Model_Order setStoreCurrencyCode(string $value)
 * @method string getStoreName()
 * @method Mage_Sales_Model_Order setStoreName(string $value)
 * @method string getXForwardedFor()
 * @method Mage_Sales_Model_Order setXForwardedFor(string $value)
 * @method string getCustomerNote()
 * @method Mage_Sales_Model_Order setCustomerNote(string $value)
 * @method string getCreatedAt()
 * @method Mage_Sales_Model_Order setCreatedAt(string $value)
 * @method string getUpdatedAt()
 * @method Mage_Sales_Model_Order setUpdatedAt(string $value)
 * @method int getTotalItemCount()
 * @method Mage_Sales_Model_Order setTotalItemCount(int $value)
 * @method int getCustomerGender()
 * @method Mage_Sales_Model_Order setCustomerGender(int $value)
 * @method float getHiddenTaxAmount()
 * @method Mage_Sales_Model_Order setHiddenTaxAmount(float $value)
 * @method float getBaseHiddenTaxAmount()
 * @method Mage_Sales_Model_Order setBaseHiddenTaxAmount(float $value)
 * @method float getShippingHiddenTaxAmount()
 * @method Mage_Sales_Model_Order setShippingHiddenTaxAmount(float $value)
 * @method float getBaseShippingHiddenTaxAmount()
 * @method Mage_Sales_Model_Order setBaseShippingHiddenTaxAmount(float $value)
 * @method float getHiddenTaxInvoiced()
 * @method Mage_Sales_Model_Order setHiddenTaxInvoiced(float $value)
 * @method float getBaseHiddenTaxInvoiced()
 * @method Mage_Sales_Model_Order setBaseHiddenTaxInvoiced(float $value)
 * @method float getHiddenTaxRefunded()
 * @method Mage_Sales_Model_Order setHiddenTaxRefunded(float $value)
 * @method float getBaseHiddenTaxRefunded()
 * @method Mage_Sales_Model_Order setBaseHiddenTaxRefunded(float $value)
 * @method float getShippingInclTax()
 * @method Mage_Sales_Model_Order setShippingInclTax(float $value)
 * @method float getBaseShippingInclTax()
 * @method Mage_Sales_Model_Order setBaseShippingInclTax(float $value)
 *
 * @category    Mage
 * @package     Mage_Sales
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Meeting01_RewriteOrder_Model_Sales_Order extends Mage_Sales_Model_Order
{
    /**
     * Send email with order data
     *
     * @return Mage_Sales_Model_Order
     * @throws Exception
     */
    public function sendNewOrderEmail()
    {
        $storeId = $this->getStore()->getId();

        if (!Mage::helper('sales')->canSendNewOrderEmail($storeId)) {
            return $this;
        }

        $emailSentAttributeValue = $this->load($this->getId())->getData('email_sent');
        $this->setEmailSent((bool)$emailSentAttributeValue);
        if ($this->getEmailSent()) {
            return $this;
        }

        // Get the destination email addresses to send copies to
        $copyTo = $this->_getEmails(self::XML_PATH_EMAIL_COPY_TO);
        $copyMethod = Mage::getStoreConfig(self::XML_PATH_EMAIL_COPY_METHOD, $storeId);

        // Start store emulation process
        $appEmulation = Mage::getSingleton('core/app_emulation');
        $initialEnvironmentInfo = $appEmulation->startEnvironmentEmulation($storeId);

        try {
            // Retrieve specified view block from appropriate design package (depends on emulated store)
            $paymentBlock = Mage::helper('payment')->getInfoBlock($this->getPayment())
                ->setIsSecureMode(true);
            $paymentBlock->getMethod()->setStore($storeId);
            $paymentBlockHtml = $paymentBlock->toHtml();
        } catch (Exception $exception) {
            // Stop store emulation process
            $appEmulation->stopEnvironmentEmulation($initialEnvironmentInfo);
            throw $exception;
        }

        // Stop store emulation process
        $appEmulation->stopEnvironmentEmulation($initialEnvironmentInfo);

        // Retrieve corresponding email template id and customer name
        if ($this->getCustomerIsGuest()) {
            $templateId = Mage::getStoreConfig(self::XML_PATH_EMAIL_GUEST_TEMPLATE, $storeId);
            $customerName = $this->getBillingAddress()->getName();
        } else {
            $templateId = Mage::getStoreConfig(self::XML_PATH_EMAIL_TEMPLATE, $storeId);
            $customerName = $this->getCustomerName();
        }

        $mailer = Mage::getModel('core/email_template_mailer');
        $emailInfo = Mage::getModel('core/email_info');
        $emailInfo->addTo($this->getCustomerEmail(), $customerName);
        if ($copyTo && $copyMethod == 'bcc') {
            // Add bcc to customer email
            foreach ($copyTo as $email) {
                $emailInfo->addBcc($email);
            }
        }
        $mailer->addEmailInfo($emailInfo);

        // Email copies are sent as separated emails if their copy method is 'copy'
        if ($copyTo && $copyMethod == 'copy') {
            foreach ($copyTo as $email) {
                $emailInfo = Mage::getModel('core/email_info');
                $emailInfo->addTo($email);
                $mailer->addEmailInfo($emailInfo);
            }
        }

        // Set all required params and send emails
        $mailer->setSender(Mage::getStoreConfig(self::XML_PATH_EMAIL_IDENTITY, $storeId));
        $mailer->setStoreId($storeId);
        $mailer->setTemplateId($templateId);
        $mailer->setTemplateParams(array(
            'order'          => $this,
            'billing'        => $this->getBillingAddress(),
            'payment_html'   => $paymentBlockHtml,
            'customer_group' => $this->_getCustomerGroup(),
        ));
        $mailer->send();

        $this->setEmailSent(true);
        $this->_getResource()->saveAttribute($this, 'email_sent');

        return $this;
    }
    protected function _getCustomerGroup()
    {
        return Mage::getModel('customer/group')->load($this->getCustomerGroupId());
    }
}