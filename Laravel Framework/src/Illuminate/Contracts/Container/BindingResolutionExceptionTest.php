<?php

namespace tests\Illuminate\Contracts\Container;

use Illuminate\Contracts\Container\BindingResolutionException;
use Mockery as m;

class BindingResolutionExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Contracts\Container\BindingResolutionException
*/
protected $bindingResolutionException;

public function setUp()
{
    parent::setUp();

    $this->bindingResolutionException = new \Illuminate\Contracts\Container\BindingResolutionException();
}
}
