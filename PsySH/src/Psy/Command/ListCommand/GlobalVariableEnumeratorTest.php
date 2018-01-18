<?php

namespace tests\Psy\Command\ListCommand;

use Mockery as m;
use Psy\Command\ListCommand\GlobalVariableEnumerator;

class GlobalVariableEnumeratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Command\ListCommand\GlobalVariableEnumerator
*/
protected $globalVariableEnumerator;

public function setUp()
{
    parent::setUp();

    $this->globalVariableEnumerator = new \Psy\Command\ListCommand\GlobalVariableEnumerator();
}
}
