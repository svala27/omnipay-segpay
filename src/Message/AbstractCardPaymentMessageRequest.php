<?php

namespace Omnipay\Segpay\Message;

abstract class AbstractCardPaymentMessageRequest extends AbstractRequest
{

    public function getData()
    {
        $data = parent::getData();
        if (false !== $this->getSimulation()) {
            $data['testMode'] = $this->getSimulation();
        }
        return $data;
    }
}
