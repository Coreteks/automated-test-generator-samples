<?php

namespace tests\Psy\Command\ListCommand;

use Mockery as m;
use Psy\Command\ListCommand\ClassEnumerator;

class ClassEnumeratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Command\ListCommand\ClassEnumerator
*/
protected $classEnumerator;

public function setUp()
{
    parent::setUp();

    $this->classEnumerator = new \Psy\Command\ListCommand\ClassEnumerator();
}
}
