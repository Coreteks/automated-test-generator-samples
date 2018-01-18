<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Functional;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Functional\WebTestCase;

class WebTestCaseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Functional\WebTestCase
*/
protected $webTestCase;

public function setUp()
{
    parent::setUp();

    $this->webTestCase = new \Symfony\Bundle\FrameworkBundle\Tests\Functional\WebTestCase();
}

public function testAssertRedirect0()
{
    $response = m::mock('UntypedParameter_response_');
    $location = m::mock('UntypedParameter_location_');

    // TODO: Your mock expectations here

    $actual = $this->webTestCase->assertRedirect($response, $location);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetUpBeforeClass0()
{
    // TODO: Your mock expectations here

    $actual = $this->webTestCase->setUpBeforeClass();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTearDownAfterClass0()
{
    // TODO: Your mock expectations here

    $actual = $this->webTestCase->tearDownAfterClass();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
