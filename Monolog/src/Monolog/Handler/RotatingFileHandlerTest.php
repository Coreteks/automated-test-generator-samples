<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\RotatingFileHandler;

class RotatingFileHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_filename = null;
/**
* @var mixed
*/
protected $_maxFiles = null;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var mixed
*/
protected $_filePermission = null;
/**
* @var mixed
*/
protected $_useLocking = null;
/**
* @var \Monolog\Handler\RotatingFileHandler
*/
protected $rotatingFileHandler;

public function setUp()
{
    parent::setUp();

    $this->_filename = null;
    $this->_maxFiles = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->_filePermission = null;
    $this->_useLocking = null;
    $this->rotatingFileHandler = new \Monolog\Handler\RotatingFileHandler($this->_filename, $this->_maxFiles, $this->_level, $this->_bubble, $this->_filePermission, $this->_useLocking);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (true === $this->mustRotate) == false (line 65)

    $actual = $this->rotatingFileHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (true === $this->mustRotate) == true (line 65)

    $actual = $this->rotatingFileHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetFilenameFormat0()
{
    $filenameFormat = m::mock('UntypedParameter_filenameFormat_');
    $dateFormat = m::mock('UntypedParameter_dateFormat_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!preg_match('{^Y(([/_.-]?m)([/_.-]?d)?)?$}', $dateFormat)) == false (line 72)
    // if (substr_count($filenameFormat, '{date}') === 0) == false (line 80)

    $actual = $this->rotatingFileHandler->setFilenameFormat($filenameFormat, $dateFormat);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testSetFilenameFormat1()
{
    $filenameFormat = m::mock('UntypedParameter_filenameFormat_');
    $dateFormat = m::mock('UntypedParameter_dateFormat_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!preg_match('{^Y(([/_.-]?m)([/_.-]?d)?)?$}', $dateFormat)) == false (line 72)
    // if (substr_count($filenameFormat, '{date}') === 0) == true (line 80)
    // throw new \InvalidArgumentException('Invalid filename format - format must contain at least `{date}`, because otherwise rotating is impossible.') -> exception (line 81)

    $actual = $this->rotatingFileHandler->setFilenameFormat($filenameFormat, $dateFormat);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testSetFilenameFormat2()
{
    $filenameFormat = m::mock('UntypedParameter_filenameFormat_');
    $dateFormat = m::mock('UntypedParameter_dateFormat_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!preg_match('{^Y(([/_.-]?m)([/_.-]?d)?)?$}', $dateFormat)) == true (line 72)
    // throw new \InvalidArgumentException('Invalid date format - format must be one of ' . 'RotatingFileHandler::FILE_PER_DAY ("Y-m-d"), RotatingFileHandler::FILE_PER_MONTH ("Y-m") ' . 'or RotatingFileHandler::FILE_PER_YEAR ("Y"), or you can set one of the ' . 'date formats using slashes, underscores and/or dots instead of dashes.') -> exception (line 73)

    $actual = $this->rotatingFileHandler->setFilenameFormat($filenameFormat, $dateFormat);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
