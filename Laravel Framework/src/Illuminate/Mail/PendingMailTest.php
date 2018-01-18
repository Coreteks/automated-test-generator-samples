<?php

namespace tests\Illuminate\Mail;

use Illuminate\Mail\Mailer;
use Illuminate\Mail\PendingMail;
use Mockery as m;

class PendingMailTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_mailer;
/**
* @var \Illuminate\Mail\PendingMail
*/
protected $pendingMail;

public function setUp()
{
    parent::setUp();

    $this->_mailer = m::mock(\Illuminate\Mail\Mailer::class);
    $this->pendingMail = new \Illuminate\Mail\PendingMail($this->_mailer);
}

public function testTo0()
{
    $users = m::mock('UntypedParameter_users_');

    // TODO: Your mock expectations here

    $actual = $this->pendingMail->to($users);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCc0()
{
    $users = m::mock('UntypedParameter_users_');

    // TODO: Your mock expectations here

    $actual = $this->pendingMail->cc($users);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBcc0()
{
    $users = m::mock('UntypedParameter_users_');

    // TODO: Your mock expectations here

    $actual = $this->pendingMail->bcc($users);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend0()
{
    $mailable = m::mock(\Illuminate\Mail\Mailable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($mailable instanceof \Illuminate\Contracts\Queue\ShouldQueue) == false (line 95)

    $actual = $this->pendingMail->send($mailable);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend1()
{
    $mailable = m::mock(\Illuminate\Mail\Mailable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($mailable instanceof \Illuminate\Contracts\Queue\ShouldQueue) == true (line 95)

    $actual = $this->pendingMail->send($mailable);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSendNow0()
{
    $mailable = m::mock(\Illuminate\Mail\Mailable::class);

    // TODO: Your mock expectations here

    $actual = $this->pendingMail->sendNow($mailable);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue0()
{
    $mailable = m::mock(\Illuminate\Mail\Mailable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($mailable->delay)) == false (line 123)

    $actual = $this->pendingMail->queue($mailable);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue1()
{
    $mailable = m::mock(\Illuminate\Mail\Mailable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($mailable->delay)) == true (line 123)

    $actual = $this->pendingMail->queue($mailable);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLater0()
{
    $delay = m::mock('UntypedParameter_delay_');
    $mailable = m::mock(\Illuminate\Mail\Mailable::class);

    // TODO: Your mock expectations here

    $actual = $this->pendingMail->later($delay, $mailable);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
