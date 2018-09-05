<?php

use Sicaboy\LaravelHttpProxy\HttpProxy;

class HttpProxyTest extends PHPUnit_Framework_TestCase
{
    private $httpProxy;

    public function setUp()
    {
        parent::setUp();
        $this->httpProxy = new HttpProxy('http', '123.207.35.36', 5010, []);
    }
    public function testProxy()
    {
        $this->assertTrue($this->httpProxy instanceof HttpProxy);

        $isWithPort = ( strpos($this->httpProxy->getProxy(),':') > 0 );
        $this->assertTrue($isWithPort);
    }
}
