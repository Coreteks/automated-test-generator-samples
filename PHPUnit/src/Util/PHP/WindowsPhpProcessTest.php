<?php

namespace tests\PHPUnit\Util\PHP;

use Mockery as m;
use PHPUnit\Util\PHP\WindowsPhpProcess;

class WindowsPhpProcessTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Util\PHP\WindowsPhpProcess
*/
protected $windowsPhpProcess;

public function setUp()
{
    parent::setUp();

    $this->windowsPhpProcess = new \PHPUnit\Util\PHP\WindowsPhpProcess();
}

public function testGetCommand0()
{
    $settings = [];
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    $actual = $this->windowsPhpProcess->getCommand($settings, $file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
