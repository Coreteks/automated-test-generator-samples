<?php

namespace tests\Psy;

use Mockery as m;
use Psy\ConfigPaths;

class ConfigPathsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\ConfigPaths
*/
protected $configPaths;

public function setUp()
{
    parent::setUp();

    $this->configPaths = new \Psy\ConfigPaths();
}

public function testGetConfigDirs0()
{
    // TODO: Your mock expectations here

    $actual = $this->configPaths->getConfigDirs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHomeConfigDirs0()
{
    // TODO: Your mock expectations here

    $actual = $this->configPaths->getHomeConfigDirs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCurrentConfigDir0()
{
    // TODO: Your mock expectations here

    $actual = $this->configPaths->getCurrentConfigDir();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCurrentConfigDir1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (@is_dir($configDir)) == false (line 71)

    $actual = $this->configPaths->getCurrentConfigDir();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCurrentConfigDir2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (@is_dir($configDir)) == true (line 71)

    $actual = $this->configPaths->getCurrentConfigDir();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConfigFiles0()
{
    $names = [];
    $configDir = m::mock('UntypedParameter_configDir_');

    // TODO: Your mock expectations here

    $actual = $this->configPaths->getConfigFiles($names, $configDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDataDirs0()
{
    // TODO: Your mock expectations here

    $actual = $this->configPaths->getDataDirs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDataFiles0()
{
    $names = [];
    $dataDir = m::mock('UntypedParameter_dataDir_');

    // TODO: Your mock expectations here

    $actual = $this->configPaths->getDataFiles($names, $dataDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testGetRuntimeDir0()
{
    // TODO: Your mock expectations here

    $actual = $this->configPaths->getRuntimeDir();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRuntimeDir1()
{
    // TODO: Your mock expectations here

    $actual = $this->configPaths->getRuntimeDir();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRuntimeDir2()
{
    // TODO: Your mock expectations here

    $actual = $this->configPaths->getRuntimeDir();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouchFileWithMkdir0()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($file)) == false (line 210)
    // if (!is_dir($dir)) == false (line 222)
    // if (!is_dir($dir) || !is_writable($dir)) == false (line 227)

    $actual = $this->configPaths->touchFileWithMkdir($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouchFileWithMkdir1()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($file)) == false (line 210)
    // if (!is_dir($dir)) == false (line 222)
    // if (!is_dir($dir) || !is_writable($dir)) == true (line 227)

    $actual = $this->configPaths->touchFileWithMkdir($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouchFileWithMkdir2()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($file)) == false (line 210)
    // if (!is_dir($dir)) == true (line 222)
    // if (!is_dir($dir) || !is_writable($dir)) == false (line 227)

    $actual = $this->configPaths->touchFileWithMkdir($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouchFileWithMkdir3()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($file)) == false (line 210)
    // if (!is_dir($dir)) == true (line 222)
    // if (!is_dir($dir) || !is_writable($dir)) == true (line 227)

    $actual = $this->configPaths->touchFileWithMkdir($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouchFileWithMkdir4()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($file)) == true (line 210)
    // if (is_writable($file)) == false (line 211)

    $actual = $this->configPaths->touchFileWithMkdir($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouchFileWithMkdir5()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($file)) == true (line 210)
    // if (is_writable($file)) == true (line 211)

    $actual = $this->configPaths->touchFileWithMkdir($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
