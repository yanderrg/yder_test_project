<?php

namespace Controller\Math;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MathControllerTest extends WebTestCase
{
    public function testAdd(): void
    {
        $client = static ::createClient();
        $client->request('GET', '/add/10/20');

        $this->assertSame(200, $client->getResponse()->getStatusCode());
        $this->assertStringContainsString('Result: 30', $client->getResponse()->getContent());
    }
}