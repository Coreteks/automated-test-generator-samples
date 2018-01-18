<?php

namespace tests\PHPUnit\Framework;

use Mockery as m;
use PHPUnit\Framework\SyntheticError;

class SyntheticErrorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_message = null;
/**
* @var mixed
*/
protected $_code = null;
/**
* @var mixed
*/
protected $_file = null;
/**
* @var mixed
*/
protected $_line = null;
/**
* @var mixed
*/
protected $_trace = null;
/**
* @var \PHPUnit\Framework\SyntheticError
*/
protected $syntheticError;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->_code = null;
    $this->_file = null;
    $this->_line = null;
    $this->_trace = null;
    $this->syntheticError = new \PHPUnit\Framework\SyntheticError($this->_message, $this->_code, $this->_file, $this->_line, $this->_trace);
}

public function testGetSyntheticFile0()
{
    // TODO: Your mock expectations here

    $actual = $this->syntheticError->getSyntheticFile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSyntheticLine0()
{
    // TODO: Your mock expectations here

    $actual = $this->syntheticError->getSyntheticLine();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSyntheticTrace0()
{
    // TODO: Your mock expectations here

    $actual = $this->syntheticError->getSyntheticTrace();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
