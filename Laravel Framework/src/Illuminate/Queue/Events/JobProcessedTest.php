<?php

namespace tests\Illuminate\Queue\Events;

use Illuminate\Queue\Events\JobProcessed;
use Mockery as m;

class JobProcessedTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_connectionName = null;
/**
* @var mixed
*/
protected $_job = null;
/**
* @var \Illuminate\Queue\Events\JobProcessed
*/
protected $jobProcessed;

public function setUp()
{
    parent::setUp();

    $this->_connectionName = null;
    $this->_job = null;
    $this->jobProcessed = new \Illuminate\Queue\Events\JobProcessed($this->_connectionName, $this->_job);
}
}
