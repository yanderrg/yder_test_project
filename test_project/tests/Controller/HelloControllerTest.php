<?php

namespace Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HelloControllerTest extends WebTestCase
{
    public function testHello()
    {
        $client = static ::createClient();
        $client->request('GET', '/hello/Team');

        $this->assertSame(200, $client->getResponse()->getStatusCode());
        $this->assertStringContainsString('Hello Team', $client->getResponse()->getContent());
    }

    public function testHelloWorld()
    {
        $client = static ::createClient();
        $client->request('GET', '/hello');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertStringContainsString('Hello Word', $client->getResponse()->getContent());
    }

}