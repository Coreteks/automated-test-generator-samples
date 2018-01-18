<?php

namespace tests\Illuminate\Auth\Events;

use Illuminate\Auth\Events\Authenticated;
use Mockery as m;

class AuthenticatedTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_user = null;
/**
* @var \Illuminate\Auth\Events\Authenticated
*/
protected $authenticated;

public function setUp()
{
    parent::setUp();

    $this->_user = null;
    $this->authenticated = new \Illuminate\Auth\Events\Authenticated($this->_user);
}
}
