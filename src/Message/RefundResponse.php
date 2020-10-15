<?php


namespace Omnipay\Segpay\Message;


class RefundResponse extends AbstractResponse
{

    protected function isExpectedResultCode($resultCode)
    {
        return (bool)preg_match('/^(000\.000\.|000\.100\.1|000\.[36])/', $resultCode);
    }

    public function getTransactionReference()
    {
        return $this->data['referencedId'];
    }

}