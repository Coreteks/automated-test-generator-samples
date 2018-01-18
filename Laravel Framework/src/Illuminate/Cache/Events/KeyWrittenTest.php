<?php

namespace tests\Illuminate\Cache\Events;

use Illuminate\Cache\Events\KeyWritten;
use Mockery as m;

class KeyWrittenTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_key = null;
/**
* @var mixed
*/
protected $_value = null;
/**
* @var mixed
*/
protected $_minutes = null;
/**
* @var mixed
*/
protected $_tags = null;
/**
* @var \Illuminate\Cache\Events\KeyWritten
*/
protected $keyWritten;

public function setUp()
{
    parent::setUp();

    $this->_key = null;
    $this->_value = null;
    $this->_minutes = null;
    $this->_tags = null;
    $this->keyWritten = new \Illuminate\Cache\Events\KeyWritten($this->_key, $this->_value, $this->_minutes, $this->_tags);
}
}
