<?php

namespace tests\Illuminate\Notifications;

use Illuminate\Notifications\DatabaseNotification;
use Mockery as m;

class DatabaseNotificationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Notifications\DatabaseNotification
*/
protected $databaseNotification;

public function setUp()
{
    parent::setUp();

    $this->databaseNotification = new \Illuminate\Notifications\DatabaseNotification();
}

public function testNotifiable0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseNotification->notifiable();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMarkAsRead0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($this->read_at)) == false (line 55)

    $actual = $this->databaseNotification->markAsRead();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMarkAsRead1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($this->read_at)) == true (line 55)

    $actual = $this->databaseNotification->markAsRead();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMarkAsUnread0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->read_at)) == false (line 67)

    $actual = $this->databaseNotification->markAsUnread();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMarkAsUnread1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->read_at)) == true (line 67)

    $actual = $this->databaseNotification->markAsUnread();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseNotification->read();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnread0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseNotification->unread();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNewCollection0()
{
    $models = [];

    // TODO: Your mock expectations here

    $actual = $this->databaseNotification->newCollection($models);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
