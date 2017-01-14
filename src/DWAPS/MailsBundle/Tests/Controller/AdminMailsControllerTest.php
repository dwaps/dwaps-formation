<?php

namespace DWAPS\MailsBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminMailsControllerTest extends WebTestCase
{
    public function testContact()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contact');
    }

    public function testListeformations()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listeFormations');
    }

    public function testConfirmcontact()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/confirmContact');
    }

}
