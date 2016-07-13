<?php

namespace Ray\SentryModule;

use Ray\Di\Injector;

class SentryModuleTest extends \PHPUnit_Framework_TestCase
{
    public function testModule()
    {
        $client = (new Injector(new SentryModule('http://public:secret@example.com/1')))->getInstance(\Raven_Client::class);
        $this->assertInstanceOf(\Raven_Client::class, $client);
    }
}
