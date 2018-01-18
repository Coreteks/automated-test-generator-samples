<?php

namespace tests;

use CI_DB_Cache;
use Mockery as m;

class CI_DB_CacheTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_db = null;
/**
* @var \CI_DB_Cache
*/
protected $cI_DB_Cache;

public function setUp()
{
    parent::setUp();

    $this->_db = null;
    $this->cI_DB_Cache = new \CI_DB_Cache($this->_db);
}

public function testCheck_path0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($path === '') == false (line 94)
    // if (!\is_dir($path)) == false (line 109)
    // if (!\is_really_writable($path)) == false (line 117)

    $actual = $this->cI_DB_Cache->check_path($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_path1()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($path === '') == false (line 94)
    // if (!\is_dir($path)) == false (line 109)
    // if (!\is_really_writable($path)) == true (line 117)

    $actual = $this->cI_DB_Cache->check_path($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_path2()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($path === '') == false (line 94)
    // if (!\is_dir($path)) == true (line 109)

    $actual = $this->cI_DB_Cache->check_path($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_path3()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($path === '') == true (line 94)
    // if ($this->db->cachedir === '') == false (line 96)
    // if (!\is_dir($path)) == false (line 109)
    // if (!\is_really_writable($path)) == false (line 117)

    $actual = $this->cI_DB_Cache->check_path($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_path4()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($path === '') == true (line 94)
    // if ($this->db->cachedir === '') == false (line 96)
    // if (!\is_dir($path)) == false (line 109)
    // if (!\is_really_writable($path)) == true (line 117)

    $actual = $this->cI_DB_Cache->check_path($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_path5()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($path === '') == true (line 94)
    // if ($this->db->cachedir === '') == false (line 96)
    // if (!\is_dir($path)) == true (line 109)

    $actual = $this->cI_DB_Cache->check_path($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_path6()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($path === '') == true (line 94)
    // if ($this->db->cachedir === '') == true (line 96)

    $actual = $this->cI_DB_Cache->check_path($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead0()
{
    $sql = m::mock('UntypedParameter_sql_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_file($filepath) or \FALSE === ($cachedata = \file_get_contents($filepath))) == false (line 146)

    $actual = $this->cI_DB_Cache->read($sql);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead1()
{
    $sql = m::mock('UntypedParameter_sql_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_file($filepath) or \FALSE === ($cachedata = \file_get_contents($filepath))) == true (line 146)

    $actual = $this->cI_DB_Cache->read($sql);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite0()
{
    $sql = m::mock('UntypedParameter_sql_');
    $object = m::mock('UntypedParameter_object_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_dir($dir_path) && !@\mkdir($dir_path, 0750)) == false (line 170)
    // if (\write_file($dir_path . $filename, \serialize($object)) === \FALSE) == false (line 175)

    $actual = $this->cI_DB_Cache->write($sql, $object);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite1()
{
    $sql = m::mock('UntypedParameter_sql_');
    $object = m::mock('UntypedParameter_object_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_dir($dir_path) && !@\mkdir($dir_path, 0750)) == false (line 170)
    // if (\write_file($dir_path . $filename, \serialize($object)) === \FALSE) == true (line 175)

    $actual = $this->cI_DB_Cache->write($sql, $object);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite2()
{
    $sql = m::mock('UntypedParameter_sql_');
    $object = m::mock('UntypedParameter_object_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_dir($dir_path) && !@\mkdir($dir_path, 0750)) == true (line 170)

    $actual = $this->cI_DB_Cache->write($sql, $object);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    $segment_one = m::mock('UntypedParameter_segment_one_');
    $segment_two = m::mock('UntypedParameter_segment_two_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($segment_one === '') == false (line 195)
    // if ($segment_two === '') == false (line 200)

    $actual = $this->cI_DB_Cache->delete($segment_one, $segment_two);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete1()
{
    $segment_one = m::mock('UntypedParameter_segment_one_');
    $segment_two = m::mock('UntypedParameter_segment_two_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($segment_one === '') == false (line 195)
    // if ($segment_two === '') == true (line 200)

    $actual = $this->cI_DB_Cache->delete($segment_one, $segment_two);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete2()
{
    $segment_one = m::mock('UntypedParameter_segment_one_');
    $segment_two = m::mock('UntypedParameter_segment_two_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($segment_one === '') == true (line 195)
    // if ($segment_two === '') == false (line 200)

    $actual = $this->cI_DB_Cache->delete($segment_one, $segment_two);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete3()
{
    $segment_one = m::mock('UntypedParameter_segment_one_');
    $segment_two = m::mock('UntypedParameter_segment_two_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($segment_one === '') == true (line 195)
    // if ($segment_two === '') == true (line 200)

    $actual = $this->cI_DB_Cache->delete($segment_one, $segment_two);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete_all0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_Cache->delete_all();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
