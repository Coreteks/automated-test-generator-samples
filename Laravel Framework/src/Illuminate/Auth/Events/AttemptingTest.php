<?php

namespace tests\Illuminate\Auth\Events;

use Illuminate\Auth\Events\Attempting;
use Mockery as m;

class AttemptingTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_credentials = null;
/**
* @var mixed
*/
protected $_remember = null;
/**
* @var \Illuminate\Auth\Events\Attempting
*/
protected $attempting;

public function setUp()
{
    parent::setUp();

    $this->_credentials = null;
    $this->_remember = null;
    $this->attempting = new \Illuminate\Auth\Events\Attempting($this->_credentials, $this->_remember);
}
}
