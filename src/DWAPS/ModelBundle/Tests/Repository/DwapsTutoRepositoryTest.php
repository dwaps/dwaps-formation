<?php

namespace DWAPS\ModelBundle\Tests\Repository;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use DWAPS\ModelBundle\Repository\DwapsTutoRepository;


class DwapsTutoRepositoryTest extends WebTestCase
{
	private $test;

	public function setUp()
	{
		$this->test = true;
	}

    public function testFindAll()
    {
    }

    public function testTest()
    {
    	$this->assertTrue( $this->test );
    	$this->assertEquals( 'ok', 'dac' );
    }
}