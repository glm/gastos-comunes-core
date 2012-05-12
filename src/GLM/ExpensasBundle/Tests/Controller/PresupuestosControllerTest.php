<?php

namespace GLM\ExpensasBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PresupuestosControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/expensas/presupuestos');

        $this->assertTrue($crawler->filter('html:contains("Presupuestos ok")')->count() > 0);
    }
}
