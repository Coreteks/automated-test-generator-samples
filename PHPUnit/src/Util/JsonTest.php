<?php

namespace tests\PHPUnit\Util;

use Mockery as m;
use PHPUnit\Util\Json;

class JsonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Util\Json
*/
protected $json;

public function setUp()
{
    parent::setUp();

    $this->json = new \PHPUnit\Util\Json();
}

public function testPrettify0()
{
    $json = m::mock('UntypedParameter_json_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\json_last_error()) == false (line 30)

    $actual = $this->json->prettify($json);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testPrettify1()
{
    $json = m::mock('UntypedParameter_json_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\json_last_error()) == true (line 30)
    // throw new \PHPUnit\Framework\Exception('Cannot prettify invalid json') -> exception (line 31)

    $actual = $this->json->prettify($json);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCanonicalize0()
{
    $json = m::mock('UntypedParameter_json_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\json_last_error()) == false (line 50)

    $actual = $this->json->canonicalize($json);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCanonicalize1()
{
    $json = m::mock('UntypedParameter_json_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\json_last_error()) == true (line 50)

    $actual = $this->json->canonicalize($json);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
