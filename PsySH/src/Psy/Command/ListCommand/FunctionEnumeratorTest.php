<?php

namespace tests\Psy\Command\ListCommand;

use Mockery as m;
use Psy\Command\ListCommand\FunctionEnumerator;

class FunctionEnumeratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Command\ListCommand\FunctionEnumerator
*/
protected $functionEnumerator;

public function setUp()
{
    parent::setUp();

    $this->functionEnumerator = new \Psy\Command\ListCommand\FunctionEnumerator();
}
}
