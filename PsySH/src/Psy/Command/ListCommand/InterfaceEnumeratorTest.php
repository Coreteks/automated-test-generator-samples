<?php

namespace tests\Psy\Command\ListCommand;

use Mockery as m;
use Psy\Command\ListCommand\InterfaceEnumerator;
use Psy\VarDumper\Presenter;

class InterfaceEnumeratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_presenter;
/**
* @var \Psy\Command\ListCommand\InterfaceEnumerator
*/
protected $interfaceEnumerator;

public function setUp()
{
    parent::setUp();

    $this->_presenter = m::mock(\Psy\VarDumper\Presenter::class);
    $this->interfaceEnumerator = new \Psy\Command\ListCommand\InterfaceEnumerator($this->_presenter);
}
}
