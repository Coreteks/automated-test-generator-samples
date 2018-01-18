<?php

namespace tests\Illuminate\Support\Debug;

use Illuminate\Support\Debug\Dumper;
use Mockery as m;

class DumperTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Debug\Dumper
*/
protected $dumper;

public function setUp()
{
    parent::setUp();

    $this->dumper = new \Illuminate\Support\Debug\Dumper();
}

public function testDump0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (class_exists(\Symfony\Component\VarDumper\Dumper\CliDumper::class)) == false (line 18)

    $actual = $this->dumper->dump($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDump1()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (class_exists(\Symfony\Component\VarDumper\Dumper\CliDumper::class)) == true (line 18)

    $actual = $this->dumper->dump($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
