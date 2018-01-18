<?php

namespace tests\Illuminate\Auth\Events;

use Illuminate\Auth\Events\Failed;
use Mockery as m;

class FailedTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_user = null;
/**
* @var mixed
*/
protected $_credentials = null;
/**
* @var \Illuminate\Auth\Events\Failed
*/
protected $failed;

public function setUp()
{
    parent::setUp();

    $this->_user = null;
    $this->_credentials = null;
    $this->failed = new \Illuminate\Auth\Events\Failed($this->_user, $this->_credentials);
}
}
