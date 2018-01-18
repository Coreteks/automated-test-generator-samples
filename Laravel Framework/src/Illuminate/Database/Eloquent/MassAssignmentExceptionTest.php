<?php

namespace tests\Illuminate\Database\Eloquent;

use Illuminate\Database\Eloquent\MassAssignmentException;
use Mockery as m;

class MassAssignmentExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Eloquent\MassAssignmentException
*/
protected $massAssignmentException;

public function setUp()
{
    parent::setUp();

    $this->massAssignmentException = new \Illuminate\Database\Eloquent\MassAssignmentException();
}
}
