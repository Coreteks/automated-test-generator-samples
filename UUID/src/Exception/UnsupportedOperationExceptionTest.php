<?php

namespace tests\Ramsey\Uuid\Exception;

use Mockery as m;
use Ramsey\Uuid\Exception\UnsupportedOperationException;

class UnsupportedOperationExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Exception\UnsupportedOperationException
*/
protected $unsupportedOperationException;

public function setUp()
{
    parent::setUp();

    $this->unsupportedOperationException = new \Ramsey\Uuid\Exception\UnsupportedOperationException();
}
}
