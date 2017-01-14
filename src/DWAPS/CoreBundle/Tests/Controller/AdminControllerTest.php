<?php

namespace DWAPS\CoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminControllerTest extends WebTestCase
{
    public function testNav()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'admin-nav');
    }

}
