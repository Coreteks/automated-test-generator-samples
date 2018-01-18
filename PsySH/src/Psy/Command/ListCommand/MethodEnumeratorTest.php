<?php

namespace tests\Psy\Command\ListCommand;

use Mockery as m;
use Psy\Command\ListCommand\MethodEnumerator;

class MethodEnumeratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Command\ListCommand\MethodEnumerator
*/
protected $methodEnumerator;

public function setUp()
{
    parent::setUp();

    $this->methodEnumerator = new \Psy\Command\ListCommand\MethodEnumerator();
}
}
