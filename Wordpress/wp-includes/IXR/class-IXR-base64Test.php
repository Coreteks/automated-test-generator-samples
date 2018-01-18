<?php

namespace tests;

use IXR_Base64;
use Mockery as m;

class IXR_Base64Test extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_data = null;
/**
* @var \IXR_Base64
*/
protected $iXR_Base64;

public function setUp()
{
    parent::setUp();

    $this->_data = null;
    $this->iXR_Base64 = new \IXR_Base64($this->_data);
}

public function testIXR_Base640()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    $actual = $this->iXR_Base64->IXR_Base64($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetXml0()
{
    // TODO: Your mock expectations here

    $actual = $this->iXR_Base64->getXml();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
