<?php

namespace tests\Illuminate\Queue\Events;

use Illuminate\Queue\Events\Looping;
use Mockery as m;

class LoopingTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_connectionName = null;
/**
* @var mixed
*/
protected $_queue = null;
/**
* @var \Illuminate\Queue\Events\Looping
*/
protected $looping;

public function setUp()
{
    parent::setUp();

    $this->_connectionName = null;
    $this->_queue = null;
    $this->looping = new \Illuminate\Queue\Events\Looping($this->_connectionName, $this->_queue);
}
}
