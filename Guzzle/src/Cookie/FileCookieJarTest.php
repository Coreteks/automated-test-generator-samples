<?php

namespace tests\GuzzleHttp\Cookie;

use GuzzleHttp\Cookie\FileCookieJar;
use Mockery as m;

class FileCookieJarTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_cookieFile = null;
/**
* @var mixed
*/
protected $_storeSessionCookies = null;
/**
* @var \GuzzleHttp\Cookie\FileCookieJar
*/
protected $fileCookieJar;

public function setUp()
{
    parent::setUp();

    $this->_cookieFile = null;
    $this->_storeSessionCookies = null;
    $this->fileCookieJar = new \GuzzleHttp\Cookie\FileCookieJar($this->_cookieFile, $this->_storeSessionCookies);
}

public function test__destruct0()
{
    // TODO: Your mock expectations here

    $actual = $this->fileCookieJar->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave0()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === file_put_contents($filename, $jsonStr)) == false (line 59)

    $actual = $this->fileCookieJar->save($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testSave1()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === file_put_contents($filename, $jsonStr)) == true (line 59)
    // throw new \RuntimeException("Unable to save file {$filename}") -> exception (line 60)

    $actual = $this->fileCookieJar->save($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave2()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\GuzzleHttp\Cookie\CookieJar::shouldPersist($cookie, $this->storeSessionCookies)) == false (line 53)
    // if (false === file_put_contents($filename, $jsonStr)) == false (line 59)

    $actual = $this->fileCookieJar->save($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testSave3()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\GuzzleHttp\Cookie\CookieJar::shouldPersist($cookie, $this->storeSessionCookies)) == false (line 53)
    // if (false === file_put_contents($filename, $jsonStr)) == true (line 59)
    // throw new \RuntimeException("Unable to save file {$filename}") -> exception (line 60)

    $actual = $this->fileCookieJar->save($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave4()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\GuzzleHttp\Cookie\CookieJar::shouldPersist($cookie, $this->storeSessionCookies)) == true (line 53)
    // if (false === file_put_contents($filename, $jsonStr)) == false (line 59)

    $actual = $this->fileCookieJar->save($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testSave5()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\GuzzleHttp\Cookie\CookieJar::shouldPersist($cookie, $this->storeSessionCookies)) == true (line 53)
    // if (false === file_put_contents($filename, $jsonStr)) == true (line 59)
    // throw new \RuntimeException("Unable to save file {$filename}") -> exception (line 60)

    $actual = $this->fileCookieJar->save($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad0()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === $json) == false (line 75)
    // if ($json === '') == false (line 77)
    // if (is_array($data)) == false (line 82)
    // if (strlen($data)) == false (line 86)

    $actual = $this->fileCookieJar->load($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testLoad1()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === $json) == false (line 75)
    // if ($json === '') == false (line 77)
    // if (is_array($data)) == false (line 82)
    // if (strlen($data)) == true (line 86)
    // throw new \RuntimeException("Invalid cookie file: {$filename}") -> exception (line 87)

    $actual = $this->fileCookieJar->load($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad2()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === $json) == false (line 75)
    // if ($json === '') == false (line 77)
    // if (is_array($data)) == true (line 82)

    $actual = $this->fileCookieJar->load($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad3()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === $json) == false (line 75)
    // if ($json === '') == false (line 77)
    // if (is_array($data)) == true (line 82)

    $actual = $this->fileCookieJar->load($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad4()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === $json) == false (line 75)
    // if ($json === '') == true (line 77)

    $actual = $this->fileCookieJar->load($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testLoad5()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === $json) == true (line 75)
    // throw new \RuntimeException("Unable to load file {$filename}") -> exception (line 76)

    $actual = $this->fileCookieJar->load($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
