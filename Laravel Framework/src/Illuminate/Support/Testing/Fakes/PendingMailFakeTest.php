<?php

namespace tests\Illuminate\Support\Testing\Fakes;

use Illuminate\Support\Testing\Fakes\PendingMailFake;
use Mockery as m;

class PendingMailFakeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_mailer = null;
/**
* @var \Illuminate\Support\Testing\Fakes\PendingMailFake
*/
protected $pendingMailFake;

public function setUp()
{
    parent::setUp();

    $this->_mailer = null;
    $this->pendingMailFake = new \Illuminate\Support\Testing\Fakes\PendingMailFake($this->_mailer);
}

public function testSend0()
{
    $mailable = m::mock(\Illuminate\Mail\Mailable::class);

    // TODO: Your mock expectations here

    $actual = $this->pendingMailFake->send($mailable);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSendNow0()
{
    $mailable = m::mock(\Illuminate\Mail\Mailable::class);

    // TODO: Your mock expectations here

    $actual = $this->pendingMailFake->sendNow($mailable);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue0()
{
    $mailable = m::mock(\Illuminate\Mail\Mailable::class);

    // TODO: Your mock expectations here

    $actual = $this->pendingMailFake->queue($mailable);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
