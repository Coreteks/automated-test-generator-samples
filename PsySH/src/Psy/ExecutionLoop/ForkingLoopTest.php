<?php

namespace tests\Psy\ExecutionLoop;

use Mockery as m;
use Psy\ExecutionLoop\ForkingLoop;

class ForkingLoopTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\ExecutionLoop\ForkingLoop
*/
protected $forkingLoop;

public function setUp()
{
    parent::setUp();

    $this->forkingLoop = new \Psy\ExecutionLoop\ForkingLoop();
}

public function testRun0()
{
    $shell = m::mock(\Psy\Shell::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$up) == false (line 40)
    // if ($pid < 0) == false (line 45)
    // if ($pid > 0) == false (line 47)
    // if (function_exists('setproctitle')) == false (line 72)

    $actual = $this->forkingLoop->run($shell);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun1()
{
    $shell = m::mock(\Psy\Shell::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$up) == false (line 40)
    // if ($pid < 0) == false (line 45)
    // if ($pid > 0) == false (line 47)
    // if (function_exists('setproctitle')) == true (line 72)

    $actual = $this->forkingLoop->run($shell);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun2()
{
    $shell = m::mock(\Psy\Shell::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$up) == false (line 40)
    // if ($pid < 0) == false (line 45)
    // if ($pid > 0) == true (line 47)
    // if (stream_select($read, $write, $except, null) === false) == false (line 57)
    // if ($content) == false (line 64)

    $actual = $this->forkingLoop->run($shell);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun3()
{
    $shell = m::mock(\Psy\Shell::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$up) == false (line 40)
    // if ($pid < 0) == false (line 45)
    // if ($pid > 0) == true (line 47)
    // if (stream_select($read, $write, $except, null) === false) == false (line 57)
    // if ($content) == true (line 64)

    $actual = $this->forkingLoop->run($shell);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testRun4()
{
    $shell = m::mock(\Psy\Shell::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$up) == false (line 40)
    // if ($pid < 0) == false (line 45)
    // if ($pid > 0) == true (line 47)
    // if (stream_select($read, $write, $except, null) === false) == true (line 57)
    // throw new \RuntimeException('Error waiting for execution loop.') -> exception (line 58)

    $actual = $this->forkingLoop->run($shell);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testRun5()
{
    $shell = m::mock(\Psy\Shell::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$up) == false (line 40)
    // if ($pid < 0) == true (line 45)
    // throw new \RuntimeException('Unable to start execution loop.') -> exception (line 46)

    $actual = $this->forkingLoop->run($shell);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testRun6()
{
    $shell = m::mock(\Psy\Shell::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$up) == true (line 40)
    // throw new \RuntimeException('Unable to create socket pair.') -> exception (line 41)

    $actual = $this->forkingLoop->run($shell);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeLoop0()
{
    // TODO: Your mock expectations here

    $actual = $this->forkingLoop->beforeLoop();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAfterLoop0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->savegame)) == false (line 103)

    $actual = $this->forkingLoop->afterLoop();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAfterLoop1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->savegame)) == true (line 103)

    $actual = $this->forkingLoop->afterLoop();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
