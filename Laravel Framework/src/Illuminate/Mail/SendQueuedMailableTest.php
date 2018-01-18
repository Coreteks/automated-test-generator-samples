<?php

namespace tests\Illuminate\Mail;

use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Mail\SendQueuedMailable;
use Mockery as m;

class SendQueuedMailableTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_mailable;
/**
* @var \Illuminate\Mail\SendQueuedMailable
*/
protected $sendQueuedMailable;

public function setUp()
{
    parent::setUp();

    $this->_mailable = m::mock(\Illuminate\Contracts\Mail\Mailable::class);
    $this->sendQueuedMailable = new \Illuminate\Mail\SendQueuedMailable($this->_mailable);
}

public function testHandle0()
{
    $mailer = m::mock(\Illuminate\Contracts\Mail\Mailer::class);

    // TODO: Your mock expectations here

    $actual = $this->sendQueuedMailable->handle($mailer);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplayName0()
{
    // TODO: Your mock expectations here

    $actual = $this->sendQueuedMailable->displayName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFailed0()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->mailable, 'failed')) == false (line 73)

    $actual = $this->sendQueuedMailable->failed($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFailed1()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->mailable, 'failed')) == true (line 73)

    $actual = $this->sendQueuedMailable->failed($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__clone0()
{
    // TODO: Your mock expectations here

    $actual = $this->sendQueuedMailable->__clone();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
