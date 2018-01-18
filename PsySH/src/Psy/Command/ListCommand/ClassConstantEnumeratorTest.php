<?php

namespace tests\Psy\Command\ListCommand;

use Mockery as m;
use Psy\Command\ListCommand\ClassConstantEnumerator;

class ClassConstantEnumeratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Command\ListCommand\ClassConstantEnumerator
*/
protected $classConstantEnumerator;

public function setUp()
{
    parent::setUp();

    $this->classConstantEnumerator = new \Psy\Command\ListCommand\ClassConstantEnumerator();
}
}
