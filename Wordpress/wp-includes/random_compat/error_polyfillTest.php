<?php

namespace tests;

use Mockery as m;
use TypeError;

class TypeErrorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \TypeError
*/
protected $typeError;

public function setUp()
{
    parent::setUp();

    $this->typeError = new \TypeError();
}
}
