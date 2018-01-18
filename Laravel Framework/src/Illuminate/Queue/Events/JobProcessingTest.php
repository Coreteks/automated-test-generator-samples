<?php

namespace tests\Illuminate\Queue\Events;

use Illuminate\Queue\Events\JobProcessing;
use Mockery as m;

class JobProcessingTest extends \PHPUnit_Framework_TestCase
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
* @var \Illuminate\Queue\Events\JobProcessing
*/
protected $jobProcessing;

public function setUp()
{
    parent::setUp();

    $this->_connectionName = null;
    $this->_job = null;
    $this->jobProcessing = new \Illuminate\Queue\Events\JobProcessing($this->_connectionName, $this->_job);
}
}
