<?php

namespace tests\Faker\Provider\zh_TW;

use Faker\Provider\zh_TW\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\zh_TW\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\zh_TW\Internet();
}

public function testUserName0()
{
    // TODO: Your mock expectations here

    $actual = $this->internet->userName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDomainWord0()
{
    // TODO: Your mock expectations here

    $actual = $this->internet->domainWord();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
