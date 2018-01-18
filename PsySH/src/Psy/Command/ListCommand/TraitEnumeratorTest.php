<?php

namespace tests\Psy\Command\ListCommand;

use Mockery as m;
use Psy\Command\ListCommand\TraitEnumerator;
use Psy\VarDumper\Presenter;

class TraitEnumeratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_presenter;
/**
* @var \Psy\Command\ListCommand\TraitEnumerator
*/
protected $traitEnumerator;

public function setUp()
{
    parent::setUp();

    $this->_presenter = m::mock(\Psy\VarDumper\Presenter::class);
    $this->traitEnumerator = new \Psy\Command\ListCommand\TraitEnumerator($this->_presenter);
}
}
