<?php

namespace tests;

use Mockery as m;
use SimplePie_Cache;

class SimplePie_CacheTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \SimplePie_Cache
*/
protected $simplePie_Cache;

public function setUp()
{
    parent::setUp();

    $this->simplePie_Cache = new \SimplePie_Cache();
}

public function testGet_handler0()
{
    $location = m::mock('UntypedParameter_location_');
    $filename = m::mock('UntypedParameter_filename_');
    $extension = m::mock('UntypedParameter_extension_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty(self::$handlers[$type])) == false (line 86)

    $actual = $this->simplePie_Cache->get_handler($location, $filename, $extension);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_handler1()
{
    $location = m::mock('UntypedParameter_location_');
    $filename = m::mock('UntypedParameter_filename_');
    $extension = m::mock('UntypedParameter_extension_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty(self::$handlers[$type])) == true (line 86)

    $actual = $this->simplePie_Cache->get_handler($location, $filename, $extension);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate0()
{
    $location = m::mock('UntypedParameter_location_');
    $filename = m::mock('UntypedParameter_filename_');
    $extension = m::mock('UntypedParameter_extension_');

    // TODO: Your mock expectations here

    $actual = $this->simplePie_Cache->create($location, $filename, $extension);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister0()
{
    $type = m::mock('UntypedParameter_type_');
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    $actual = $this->simplePie_Cache->register($type, $class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_URL0()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($params['query'])) == false (line 127)

    $actual = $this->simplePie_Cache->parse_URL($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_URL1()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($params['query'])) == true (line 127)

    $actual = $this->simplePie_Cache->parse_URL($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
