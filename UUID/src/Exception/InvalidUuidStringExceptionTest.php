<?php

namespace tests\Ramsey\Uuid\Exception;

use Mockery as m;
use Ramsey\Uuid\Exception\InvalidUuidStringException;

class InvalidUuidStringExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Exception\InvalidUuidStringException
*/
protected $invalidUuidStringException;

public function setUp()
{
    parent::setUp();

    $this->invalidUuidStringException = new \Ramsey\Uuid\Exception\InvalidUuidStringException();
}
}
