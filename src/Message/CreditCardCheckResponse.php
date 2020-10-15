<?php


namespace Omnipay\Segpay\Message;

class CreditCardCheckResponse extends AbstractResponse
{

    public function getCheckoutId()
    {
        return $this->getData()['id'];
    }

    public function getPaymentFormJsUrl()
    {
        return  $this->getData()['endpoint'] . '/v1/paymentWidgets.js?checkoutId=' . $this->getCheckoutId();
    }

    protected function isExpectedResultCode($resultCode)
    {
        return (bool)preg_match('/^(000\.200)/', $resultCode);
    }
}