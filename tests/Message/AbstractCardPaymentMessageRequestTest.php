<?php

namespace Omnipay\Segpay\Message;

use Mockery;
use Omnipay\Tests\TestCase;

class AbstractCardPaymentMessageRequestTest extends TestCase
{
    public function setUp()
    {
        $this->request = Mockery::mock('\Omnipay\Segpay\Message\AbstractCardPaymentMessageRequest')->makePartial();
        $this->request->initialize();
    }

    public function testGetData()
    {
        $this->request->setSimulation(true);
        $data = $this->request->getData();

        $this->assertTrue(array_key_exists('testMode', $data));
        $this->assertTrue($data['testMode']);
    }
}
