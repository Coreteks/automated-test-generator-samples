<?php

namespace tests\PHPUnit\Util;

use Mockery as m;
use PHPUnit\Util\Filesystem;

class FilesystemTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Util\Filesystem
*/
protected $filesystem;

public function setUp()
{
    parent::setUp();

    $this->filesystem = new \PHPUnit\Util\Filesystem();
}

public function testClassNameToFilename0()
{
    $className = m::mock('UntypedParameter_className_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->classNameToFilename($className);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
