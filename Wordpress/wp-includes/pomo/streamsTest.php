<?php

namespace tests;

use Mockery as m;
use POMO_CachedIntFileReader;

class POMO_CachedIntFileReaderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_filename = null;
/**
* @var \POMO_CachedIntFileReader
*/
protected $pOMO_CachedIntFileReader;

public function setUp()
{
    parent::setUp();

    $this->_filename = null;
    $this->pOMO_CachedIntFileReader = new \POMO_CachedIntFileReader($this->_filename);
}

public function testPOMO_CachedIntFileReader0()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    $actual = $this->pOMO_CachedIntFileReader->POMO_CachedIntFileReader($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
