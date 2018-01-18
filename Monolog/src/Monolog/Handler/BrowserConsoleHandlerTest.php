<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\BrowserConsoleHandler;

class BrowserConsoleHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Monolog\Handler\BrowserConsoleHandler
*/
protected $browserConsoleHandler;

public function setUp()
{
    parent::setUp();

    $this->browserConsoleHandler = new \Monolog\Handler\BrowserConsoleHandler();
}

public function testSend0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($format === 'unknown') == false (line 63)
    // if (count(self::$records)) == false (line 67)

    $actual = $this->browserConsoleHandler->send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($format === 'unknown') == false (line 63)
    // if (count(self::$records)) == true (line 67)
    // if ($format === 'html') == false (line 68)
    // if ($format === 'js') == false (line 70)

    $actual = $this->browserConsoleHandler->send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($format === 'unknown') == false (line 63)
    // if (count(self::$records)) == true (line 67)
    // if ($format === 'html') == false (line 68)
    // if ($format === 'js') == true (line 70)

    $actual = $this->browserConsoleHandler->send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($format === 'unknown') == false (line 63)
    // if (count(self::$records)) == true (line 67)
    // if ($format === 'html') == true (line 68)

    $actual = $this->browserConsoleHandler->send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($format === 'unknown') == true (line 63)

    $actual = $this->browserConsoleHandler->send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset0()
{
    // TODO: Your mock expectations here

    $actual = $this->browserConsoleHandler->reset();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
