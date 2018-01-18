<?php

namespace tests\PHPUnit\Framework;

use Mockery as m;
use PHPUnit\Framework\InvalidCoversTargetException;

class InvalidCoversTargetExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\InvalidCoversTargetException
*/
protected $invalidCoversTargetException;

public function setUp()
{
    parent::setUp();

    $this->invalidCoversTargetException = new \PHPUnit\Framework\InvalidCoversTargetException();
}
}
