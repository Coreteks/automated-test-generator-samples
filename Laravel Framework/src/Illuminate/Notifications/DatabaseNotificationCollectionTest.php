<?php

namespace tests\Illuminate\Notifications;

use Illuminate\Notifications\DatabaseNotificationCollection;
use Mockery as m;

class DatabaseNotificationCollectionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Notifications\DatabaseNotificationCollection
*/
protected $databaseNotificationCollection;

public function setUp()
{
    parent::setUp();

    $this->databaseNotificationCollection = new \Illuminate\Notifications\DatabaseNotificationCollection();
}

public function testMarkAsRead0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseNotificationCollection->markAsRead();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMarkAsUnread0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseNotificationCollection->markAsUnread();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
