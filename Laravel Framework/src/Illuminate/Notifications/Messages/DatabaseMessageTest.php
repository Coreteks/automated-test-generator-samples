<?php

namespace tests\Illuminate\Notifications\Messages;

use Illuminate\Notifications\Messages\DatabaseMessage;
use Mockery as m;

class DatabaseMessageTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_data = [];
/**
* @var \Illuminate\Notifications\Messages\DatabaseMessage
*/
protected $databaseMessage;

public function setUp()
{
    parent::setUp();

    $this->_data = [];
    $this->databaseMessage = new \Illuminate\Notifications\Messages\DatabaseMessage($this->_data);
}
}
