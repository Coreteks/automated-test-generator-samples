<?php

namespace tests\Psy\Input;

use Mockery as m;
use Psy\Input\CodeArgument;

class CodeArgumentTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var mixed
*/
protected $_mode = null;
/**
* @var mixed
*/
protected $_description = null;
/**
* @var mixed
*/
protected $_default = null;
/**
* @var \Psy\Input\CodeArgument
*/
protected $codeArgument;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->_mode = null;
    $this->_description = null;
    $this->_default = null;
    $this->codeArgument = new \Psy\Input\CodeArgument($this->_name, $this->_mode, $this->_description, $this->_default);
}
}
