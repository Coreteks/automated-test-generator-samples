<?php

namespace tests\Illuminate\Notifications\Console;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Notifications\Console\NotificationTableCommand;
use Illuminate\Support\Composer;
use Mockery as m;

class NotificationTableCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_files;
/**
* @var \Mockery\MockInterface
*/
protected $_composer;
/**
* @var \Illuminate\Notifications\Console\NotificationTableCommand
*/
protected $notificationTableCommand;

public function setUp()
{
    parent::setUp();

    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->_composer = m::mock(\Illuminate\Support\Composer::class);
    $this->notificationTableCommand = new \Illuminate\Notifications\Console\NotificationTableCommand($this->_files, $this->_composer);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->notificationTableCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
