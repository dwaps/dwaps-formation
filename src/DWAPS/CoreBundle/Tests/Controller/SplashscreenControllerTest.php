<?php

namespace DWAPS\CoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SplashscreenControllerTest extends WebTestCase
{
    public function testLogo()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/logo');
    }

}
