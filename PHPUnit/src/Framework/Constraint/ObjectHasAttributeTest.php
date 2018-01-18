<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\ObjectHasAttribute;

class ObjectHasAttributeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Constraint\ObjectHasAttribute
*/
protected $objectHasAttribute;

public function setUp()
{
    parent::setUp();

    $this->objectHasAttribute = new \PHPUnit\Framework\Constraint\ObjectHasAttribute();
}
}
