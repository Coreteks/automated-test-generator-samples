<?php

namespace tests\Illuminate\Foundation\Bus;

use Illuminate\Foundation\Bus\PendingChain;
use Mockery as m;

class PendingChainTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_class = null;
/**
* @var mixed
*/
protected $_chain = null;
/**
* @var \Illuminate\Foundation\Bus\PendingChain
*/
protected $pendingChain;

public function setUp()
{
    parent::setUp();

    $this->_class = null;
    $this->_chain = null;
    $this->pendingChain = new \Illuminate\Foundation\Bus\PendingChain($this->_class, $this->_chain);
}

public function testDispatch0()
{
    // TODO: Your mock expectations here

    $actual = $this->pendingChain->dispatch();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
