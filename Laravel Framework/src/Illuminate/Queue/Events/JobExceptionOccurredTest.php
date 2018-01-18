<?php

namespace tests\Illuminate\Queue\Events;

use Illuminate\Queue\Events\JobExceptionOccurred;
use Mockery as m;

class JobExceptionOccurredTest extends \PHPUnit_Framework_TestCase
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
* @var \Illuminate\Queue\Events\JobExceptionOccurred
*/
protected $jobExceptionOccurred;

public function setUp()
{
    parent::setUp();

    $this->_connectionName = null;
    $this->_job = null;
    $this->_exception = null;
    $this->jobExceptionOccurred = new \Illuminate\Queue\Events\JobExceptionOccurred($this->_connectionName, $this->_job, $this->_exception);
}
}
