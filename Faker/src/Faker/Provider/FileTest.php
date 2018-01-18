<?php

namespace tests\Faker\Provider;

use Faker\Provider\File;
use Mockery as m;

class FileTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\File
*/
protected $file;

public function setUp()
{
    parent::setUp();

    $this->file = new \Faker\Provider\File();
}

public function testMimeType0()
{
    // TODO: Your mock expectations here

    $actual = $this->file->mimeType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFileExtension0()
{
    // TODO: Your mock expectations here

    $actual = $this->file->fileExtension();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFile0()
{
    $sourceDirectory = m::mock('UntypedParameter_sourceDirectory_');
    $targetDirectory = m::mock('UntypedParameter_targetDirectory_');
    $fullPath = m::mock('UntypedParameter_fullPath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_dir($sourceDirectory)) == false (line 574)
    // if (!is_dir($targetDirectory)) == false (line 578)
    // if ($sourceDirectory == $targetDirectory) == false (line 582)
    // if (empty($files)) == false (line 591)
    // if (false === copy($sourceFullPath, $destinationFullPath)) == false (line 600)

    $actual = $this->file->file($sourceDirectory, $targetDirectory, $fullPath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFile1()
{
    $sourceDirectory = m::mock('UntypedParameter_sourceDirectory_');
    $targetDirectory = m::mock('UntypedParameter_targetDirectory_');
    $fullPath = m::mock('UntypedParameter_fullPath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_dir($sourceDirectory)) == false (line 574)
    // if (!is_dir($targetDirectory)) == false (line 578)
    // if ($sourceDirectory == $targetDirectory) == false (line 582)
    // if (empty($files)) == false (line 591)
    // if (false === copy($sourceFullPath, $destinationFullPath)) == true (line 600)

    $actual = $this->file->file($sourceDirectory, $targetDirectory, $fullPath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testFile2()
{
    $sourceDirectory = m::mock('UntypedParameter_sourceDirectory_');
    $targetDirectory = m::mock('UntypedParameter_targetDirectory_');
    $fullPath = m::mock('UntypedParameter_fullPath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_dir($sourceDirectory)) == false (line 574)
    // if (!is_dir($targetDirectory)) == false (line 578)
    // if ($sourceDirectory == $targetDirectory) == false (line 582)
    // if (empty($files)) == true (line 591)
    // throw new \InvalidArgumentException(sprintf('Source directory %s is empty.', $sourceDirectory)) -> exception (line 592)

    $actual = $this->file->file($sourceDirectory, $targetDirectory, $fullPath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testFile3()
{
    $sourceDirectory = m::mock('UntypedParameter_sourceDirectory_');
    $targetDirectory = m::mock('UntypedParameter_targetDirectory_');
    $fullPath = m::mock('UntypedParameter_fullPath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_dir($sourceDirectory)) == false (line 574)
    // if (!is_dir($targetDirectory)) == false (line 578)
    // if ($sourceDirectory == $targetDirectory) == true (line 582)
    // throw new \InvalidArgumentException('Source and target directories must differ.') -> exception (line 583)

    $actual = $this->file->file($sourceDirectory, $targetDirectory, $fullPath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testFile4()
{
    $sourceDirectory = m::mock('UntypedParameter_sourceDirectory_');
    $targetDirectory = m::mock('UntypedParameter_targetDirectory_');
    $fullPath = m::mock('UntypedParameter_fullPath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_dir($sourceDirectory)) == false (line 574)
    // if (!is_dir($targetDirectory)) == true (line 578)
    // throw new \InvalidArgumentException(sprintf('Target directory %s does not exist or is not a directory.', $targetDirectory)) -> exception (line 579)

    $actual = $this->file->file($sourceDirectory, $targetDirectory, $fullPath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testFile5()
{
    $sourceDirectory = m::mock('UntypedParameter_sourceDirectory_');
    $targetDirectory = m::mock('UntypedParameter_targetDirectory_');
    $fullPath = m::mock('UntypedParameter_fullPath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_dir($sourceDirectory)) == true (line 574)
    // throw new \InvalidArgumentException(sprintf('Source directory %s does not exist or is not a directory.', $sourceDirectory)) -> exception (line 575)

    $actual = $this->file->file($sourceDirectory, $targetDirectory, $fullPath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
