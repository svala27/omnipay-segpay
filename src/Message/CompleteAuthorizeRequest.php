<?php

namespace Omnipay\Segpay\Message;

class CompleteAuthorizeRequest extends CompletePurchaseRequest
{
    protected function createResponse($data)
    {
        return $this->response = new CompleteAuthorizeResponse($this, $data);
    }
}