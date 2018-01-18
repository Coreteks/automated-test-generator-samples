<?php

namespace tests\PhpParser\Parser;

use Mockery as m;
use PhpParser\Parser\Multiple;

class MultipleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_parsers = [];
/**
* @var \PhpParser\Parser\Multiple
*/
protected $multiple;

public function setUp()
{
    parent::setUp();

    $this->_parsers = [];
    $this->multiple = new \PhpParser\Parser\Multiple($this->_parsers);
}

/**
 * @expectedException \Exception
 */
public function testParse0()
{
    $code = m::mock('UntypedParameter_code_');
    $errorHandler = m::mock(\PhpParser\ErrorHandler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $errorHandler) == false (line 28)
    // if ($firstError === null) == false (line 33)
    // for (...) == false (line 37)
    // throw $firstError -> exception (line 44)

    $actual = $this->multiple->parse($code, $errorHandler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testParse1()
{
    $code = m::mock('UntypedParameter_code_');
    $errorHandler = m::mock(\PhpParser\ErrorHandler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $errorHandler) == false (line 28)
    // if ($firstError === null) == false (line 33)
    // for (...) == true (line 37)
    // if ($error === null) == false (line 39)
    // for (...) == false (line 37)
    // throw $firstError -> exception (line 44)

    $actual = $this->multiple->parse($code, $errorHandler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse2()
{
    $code = m::mock('UntypedParameter_code_');
    $errorHandler = m::mock(\PhpParser\ErrorHandler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $errorHandler) == false (line 28)
    // if ($firstError === null) == false (line 33)
    // for (...) == true (line 37)
    // if ($error === null) == true (line 39)

    $actual = $this->multiple->parse($code, $errorHandler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse3()
{
    $code = m::mock('UntypedParameter_code_');
    $errorHandler = m::mock(\PhpParser\ErrorHandler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $errorHandler) == false (line 28)
    // if ($firstError === null) == true (line 33)

    $actual = $this->multiple->parse($code, $errorHandler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testParse4()
{
    $code = m::mock('UntypedParameter_code_');
    $errorHandler = m::mock(\PhpParser\ErrorHandler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $errorHandler) == true (line 28)
    // if ($firstError === null) == false (line 33)
    // for (...) == false (line 37)
    // throw $firstError -> exception (line 44)

    $actual = $this->multiple->parse($code, $errorHandler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testParse5()
{
    $code = m::mock('UntypedParameter_code_');
    $errorHandler = m::mock(\PhpParser\ErrorHandler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $errorHandler) == true (line 28)
    // if ($firstError === null) == false (line 33)
    // for (...) == true (line 37)
    // if ($error === null) == false (line 39)
    // for (...) == false (line 37)
    // throw $firstError -> exception (line 44)

    $actual = $this->multiple->parse($code, $errorHandler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse6()
{
    $code = m::mock('UntypedParameter_code_');
    $errorHandler = m::mock(\PhpParser\ErrorHandler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $errorHandler) == true (line 28)
    // if ($firstError === null) == false (line 33)
    // for (...) == true (line 37)
    // if ($error === null) == true (line 39)

    $actual = $this->multiple->parse($code, $errorHandler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse7()
{
    $code = m::mock('UntypedParameter_code_');
    $errorHandler = m::mock(\PhpParser\ErrorHandler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $errorHandler) == true (line 28)
    // if ($firstError === null) == true (line 33)

    $actual = $this->multiple->parse($code, $errorHandler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
