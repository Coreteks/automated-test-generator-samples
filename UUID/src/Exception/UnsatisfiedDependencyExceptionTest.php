<?php

namespace tests\Ramsey\Uuid\Exception;

use Mockery as m;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

class UnsatisfiedDependencyExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Exception\UnsatisfiedDependencyException
*/
protected $unsatisfiedDependencyException;

public function setUp()
{
    parent::setUp();

    $this->unsatisfiedDependencyException = new \Ramsey\Uuid\Exception\UnsatisfiedDependencyException();
}
}
