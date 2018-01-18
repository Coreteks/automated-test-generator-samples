<?php

namespace tests\Psy\Output;

use Mockery as m;
use Psy\Output\ProcOutputPager;
use Symfony\Component\Console\Output\StreamOutput;

class ProcOutputPagerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_output;
/**
* @var mixed
*/
protected $_cmd = null;
/**
* @var \Psy\Output\ProcOutputPager
*/
protected $procOutputPager;

public function setUp()
{
    parent::setUp();

    $this->_output = m::mock(\Symfony\Component\Console\Output\StreamOutput::class);
    $this->_cmd = null;
    $this->procOutputPager = new \Psy\Output\ProcOutputPager($this->_output, $this->_cmd);
}

public function testDoWrite0()
{
    $message = m::mock('UntypedParameter_message_');
    $newline = m::mock('UntypedParameter_newline_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === @fwrite($pipe, $message . ($newline ? PHP_EOL : ''))) == false (line 54)

    $actual = $this->procOutputPager->doWrite($message, $newline);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testDoWrite1()
{
    $message = m::mock('UntypedParameter_message_');
    $newline = m::mock('UntypedParameter_newline_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === @fwrite($pipe, $message . ($newline ? PHP_EOL : ''))) == true (line 54)
    // throw new \RuntimeException('Unable to write output.') -> exception (line 57)

    $actual = $this->procOutputPager->doWrite($message, $newline);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->pipe)) == false (line 69)
    // if (isset($this->proc)) == false (line 73)

    $actual = $this->procOutputPager->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->pipe)) == false (line 69)
    // if (isset($this->proc)) == true (line 73)
    // if ($exit !== 0) == false (line 75)

    $actual = $this->procOutputPager->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testClose2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->pipe)) == false (line 69)
    // if (isset($this->proc)) == true (line 73)
    // if ($exit !== 0) == true (line 75)
    // throw new \RuntimeException('Error closing output stream') -> exception (line 76)

    $actual = $this->procOutputPager->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->pipe)) == true (line 69)
    // if (isset($this->proc)) == false (line 73)

    $actual = $this->procOutputPager->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->pipe)) == true (line 69)
    // if (isset($this->proc)) == true (line 73)
    // if ($exit !== 0) == false (line 75)

    $actual = $this->procOutputPager->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testClose5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->pipe)) == true (line 69)
    // if (isset($this->proc)) == true (line 73)
    // if ($exit !== 0) == true (line 75)
    // throw new \RuntimeException('Error closing output stream') -> exception (line 76)

    $actual = $this->procOutputPager->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
