<?php

namespace tests\Illuminate\Database;

use Illuminate\Database\DatabaseServiceProvider;
use Mockery as m;

class DatabaseServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\DatabaseServiceProvider
*/
protected $databaseServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->databaseServiceProvider = new \Illuminate\Database\DatabaseServiceProvider();
}

public function testBoot0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseServiceProvider->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
