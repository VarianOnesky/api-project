<?php

namespace Acme\ApiBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProjectControllerTest extends WebTestCase
{
    public function testJsonFormat()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/projects/1');

        $response = $client->getResponse();

        $response->headers->contains('Content-Type', 'application/json');
    }
}
