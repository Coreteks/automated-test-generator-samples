<?php

namespace tests\Illuminate\Database;

use Illuminate\Database\MigrationServiceProvider;
use Mockery as m;

class MigrationServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\MigrationServiceProvider
*/
protected $migrationServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->migrationServiceProvider = new \Illuminate\Database\MigrationServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->migrationServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProvides0()
{
    // TODO: Your mock expectations here

    $actual = $this->migrationServiceProvider->provides();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
