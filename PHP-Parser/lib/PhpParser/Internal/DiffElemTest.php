<?php

namespace tests\PhpParser\Internal;

use Mockery as m;
use PhpParser\Internal\DiffElem;

class DiffElemTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_type = null;
/**
* @var mixed
*/
protected $_old = null;
/**
* @var mixed
*/
protected $_new = null;
/**
* @var \PhpParser\Internal\DiffElem
*/
protected $diffElem;

public function setUp()
{
    parent::setUp();

    $this->_type = null;
    $this->_old = null;
    $this->_new = null;
    $this->diffElem = new \PhpParser\Internal\DiffElem($this->_type, $this->_old, $this->_new);
}
}
