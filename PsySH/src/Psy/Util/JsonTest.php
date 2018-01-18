<?php

namespace tests\Psy\Util;

use Mockery as m;
use Psy\Util\Json;

class JsonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Util\Json
*/
protected $json;

public function setUp()
{
    parent::setUp();

    $this->json = new \Psy\Util\Json();
}

public function testEncode0()
{
    $val = m::mock('UntypedParameter_val_');
    $opt = m::mock('UntypedParameter_opt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == false (line 29)

    $actual = $this->json->encode($val, $opt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode1()
{
    $val = m::mock('UntypedParameter_val_');
    $opt = m::mock('UntypedParameter_opt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == true (line 29)

    $actual = $this->json->encode($val, $opt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
