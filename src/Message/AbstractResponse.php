<?php


namespace Omnipay\Segpay\Message;


use Omnipay\Common\Message\AbstractResponse as OmnipayAbstractResponse;
use Omnipay\Common\Message\RequestInterface;

abstract class AbstractResponse extends OmnipayAbstractResponse
{
    public function getMessage()
    {
        return $this->getData()['result']['description'];
    }

    public function isSuccessful()
    {
        return (bool)$this->isExpectedResultCode($this->getData()['result']['code']);
    }

    abstract protected function isExpectedResultCode($resultCode);
}