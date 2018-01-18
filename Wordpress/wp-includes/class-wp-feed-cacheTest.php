<?php

namespace tests;

use Mockery as m;
use WP_Feed_Cache;

class WP_Feed_CacheTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Feed_Cache
*/
protected $wP_Feed_Cache;

public function setUp()
{
    parent::setUp();

    $this->wP_Feed_Cache = new \WP_Feed_Cache();
}

public function testCreate0()
{
    $location = m::mock('UntypedParameter_location_');
    $filename = m::mock('UntypedParameter_filename_');
    $extension = m::mock('UntypedParameter_extension_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Feed_Cache->create($location, $filename, $extension);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
