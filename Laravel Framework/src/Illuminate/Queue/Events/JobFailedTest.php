<?php

namespace tests\Illuminate\Queue\Events;

use Illuminate\Queue\Events\JobFailed;
use Mockery as m;

class JobFailedTest extends \PHPUnit_Framework_TestCase
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
* @var mixed
*/
protected $_exception = null;
/**
* @var \Illuminate\Queue\Events\JobFailed
*/
protected $jobFailed;

public function setUp()
{
    parent::setUp();

    $this->_connectionName = null;
    $this->_job = null;
    $this->_exception = null;
    $this->jobFailed = new \Illuminate\Queue\Events\JobFailed($this->_connectionName, $this->_job, $this->_exception);
}
}
