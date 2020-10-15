<?php

namespace Omnipay\Segpay\Message;

use Mockery;
use Omnipay\Tests\TestCase;

class AbstractResponseTest extends TestCase
{

    private $response;

    public function setUp()
    {
        $request = new AuthorizeRequest($this->getHttpClient(), $this->getHttpRequest());

        $data = [
            'result' => [
                'code' => 'foo',
                'description' => 'bar'
            ]
        ];

        $this->response = Mockery::mock('\Omnipay\Segpay\Message\AbstractResponse', [$request, $data])->makePartial();
    }

    public function testGetData()
    {

        $data = $this->response->getData();

        $this->assertTrue(array_key_exists('result', $data));
        $this->assertSame('foo', $data['result']['code']);
        $this->assertSame('bar', $data['result']['description']);
    }

    public function testGetMessage()
    {
        $this->assertSame('bar', $this->response->getMessage());
    }
}
