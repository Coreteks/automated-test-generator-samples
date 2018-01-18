<?php

namespace tests\Psy\Command\ListCommand;

use Mockery as m;
use Psy\Command\ListCommand\VariableEnumerator;
use Psy\Context;
use Psy\VarDumper\Presenter;

class VariableEnumeratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_presenter;
/**
* @var \Mockery\MockInterface
*/
protected $_context;
/**
* @var \Psy\Command\ListCommand\VariableEnumerator
*/
protected $variableEnumerator;

public function setUp()
{
    parent::setUp();

    $this->_presenter = m::mock(\Psy\VarDumper\Presenter::class);
    $this->_context = m::mock(\Psy\Context::class);
    $this->variableEnumerator = new \Psy\Command\ListCommand\VariableEnumerator($this->_presenter, $this->_context);
}
}
