<?php

namespace tests\PhpParser;

use Mockery as m;
use PhpParser\JsonDecoder;

class JsonDecoderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\JsonDecoder
*/
protected $jsonDecoder;

public function setUp()
{
    parent::setUp();

    $this->jsonDecoder = new \PhpParser\JsonDecoder();
}

public function testDecode0()
{
    $json = m::mock('UntypedParameter_json_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (json_last_error()) == false (line 12)

    $actual = $this->jsonDecoder->decode($json);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testDecode1()
{
    $json = m::mock('UntypedParameter_json_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (json_last_error()) == true (line 12)
    // throw new \RuntimeException('JSON decoding error: ' . json_last_error_msg()) -> exception (line 13)

    $actual = $this->jsonDecoder->decode($json);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
