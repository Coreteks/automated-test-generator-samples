<?php

namespace tests\Illuminate\Queue;

use Illuminate\Queue\WorkerOptions;
use Mockery as m;

class WorkerOptionsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_delay = null;
/**
* @var mixed
*/
protected $_memory = null;
/**
* @var mixed
*/
protected $_timeout = null;
/**
* @var mixed
*/
protected $_sleep = null;
/**
* @var mixed
*/
protected $_maxTries = null;
/**
* @var mixed
*/
protected $_force = null;
/**
* @var \Illuminate\Queue\WorkerOptions
*/
protected $workerOptions;

public function setUp()
{
    parent::setUp();

    $this->_delay = null;
    $this->_memory = null;
    $this->_timeout = null;
    $this->_sleep = null;
    $this->_maxTries = null;
    $this->_force = null;
    $this->workerOptions = new \Illuminate\Queue\WorkerOptions($this->_delay, $this->_memory, $this->_timeout, $this->_sleep, $this->_maxTries, $this->_force);
}
}
