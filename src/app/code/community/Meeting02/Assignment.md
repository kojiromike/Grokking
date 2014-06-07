1. Rewrite the sales/order model to add the customer group model as an email template variable in the `sendNewOrderEmail()` method, so the group code can be added to the email using `{{var customer_group.getCode()}}`.
2. Create an observer that redirects the visitor to the base URL if the CMS home page URL key is accessed directly (i.e. /home -> /).
3. Add a new frontend route and create an index controller and an index action that set the return value of `$this->getFullActionName()` to the response body.
4. Rewrite the `Mage_Customer_AccountController::loginAction()` method to set a category view of your choice as the before_auth_url.
5. Create a dynamic rewrite of the payment/data helper only if the version of Magento is older than version 1.4, and if the ccsave payment option is enabled for the current store.
6. Create a diagram of the important classes involved in a request dispatch.
7. Magento can use several ways to specify the current store view for a given request. List the priority of all the different ways.
