<?php

namespace tests\Illuminate\Http\Resources;

use Illuminate\Http\Resources\MergeValue;
use Mockery as m;

class MergeValueTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_data = null;
/**
* @var \Illuminate\Http\Resources\MergeValue
*/
protected $mergeValue;

public function setUp()
{
    parent::setUp();

    $this->_data = null;
    $this->mergeValue = new \Illuminate\Http\Resources\MergeValue($this->_data);
}
}
