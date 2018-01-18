<?php

namespace tests\Psy\Command\ListCommand;

use Mockery as m;
use Psy\Command\ListCommand\ConstantEnumerator;

class ConstantEnumeratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Command\ListCommand\ConstantEnumerator
*/
protected $constantEnumerator;

public function setUp()
{
    parent::setUp();

    $this->constantEnumerator = new \Psy\Command\ListCommand\ConstantEnumerator();
}
}
