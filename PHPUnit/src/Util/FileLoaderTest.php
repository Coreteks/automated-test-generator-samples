<?php

namespace tests\PHPUnit\Util;

use Mockery as m;
use PHPUnit\Util\FileLoader;

class FileLoaderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Util\FileLoader
*/
protected $fileLoader;

public function setUp()
{
    parent::setUp();

    $this->fileLoader = new \PHPUnit\Util\FileLoader();
}

public function testCheckAndLoad0()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$includePathFilename || !$isReadable || $includePathFilename === $localFile) == false (line 43)

    $actual = $this->fileLoader->checkAndLoad($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testCheckAndLoad1()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$includePathFilename || !$isReadable || $includePathFilename === $localFile) == true (line 43)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Cannot open file "%s".' . "\n", $filename)) -> exception (line 44)

    $actual = $this->fileLoader->checkAndLoad($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad0()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    $actual = $this->fileLoader->load($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($variableName !== 'oldVariableNames') == false (line 69)

    $actual = $this->fileLoader->load($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad2()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($variableName !== 'oldVariableNames') == true (line 69)

    $actual = $this->fileLoader->load($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
