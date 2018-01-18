<?php

namespace tests\Illuminate\Support\Testing\Fakes;

use Illuminate\Support\Testing\Fakes\MailFake;
use Mockery as m;

class MailFakeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Testing\Fakes\MailFake
*/
protected $mailFake;

public function setUp()
{
    parent::setUp();

    $this->mailFake = new \Illuminate\Support\Testing\Fakes\MailFake();
}

public function testAssertSent0()
{
    $mailable = m::mock('UntypedParameter_mailable_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_numeric($callback)) == false (line 35)

    $actual = $this->mailFake->assertSent($mailable, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSent1()
{
    $mailable = m::mock('UntypedParameter_mailable_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_numeric($callback)) == true (line 35)

    $actual = $this->mailFake->assertSent($mailable, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertNotSent0()
{
    $mailable = m::mock('UntypedParameter_mailable_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->mailFake->assertNotSent($mailable, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertNothingSent0()
{
    // TODO: Your mock expectations here

    $actual = $this->mailFake->assertNothingSent();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertQueued0()
{
    $mailable = m::mock('UntypedParameter_mailable_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_numeric($callback)) == false (line 94)

    $actual = $this->mailFake->assertQueued($mailable, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertQueued1()
{
    $mailable = m::mock('UntypedParameter_mailable_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_numeric($callback)) == true (line 94)

    $actual = $this->mailFake->assertQueued($mailable, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertNotQueued0()
{
    $mailable = m::mock('UntypedParameter_mailable_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->mailFake->assertNotQueued($mailable, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertNothingQueued0()
{
    // TODO: Your mock expectations here

    $actual = $this->mailFake->assertNothingQueued();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSent0()
{
    $mailable = m::mock('UntypedParameter_mailable_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasSent($mailable)) == false (line 153)

    $actual = $this->mailFake->sent($mailable, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSent1()
{
    $mailable = m::mock('UntypedParameter_mailable_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasSent($mailable)) == true (line 153)

    $actual = $this->mailFake->sent($mailable, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasSent0()
{
    $mailable = m::mock('UntypedParameter_mailable_');

    // TODO: Your mock expectations here

    $actual = $this->mailFake->hasSent($mailable);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueued0()
{
    $mailable = m::mock('UntypedParameter_mailable_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasQueued($mailable)) == false (line 186)

    $actual = $this->mailFake->queued($mailable, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueued1()
{
    $mailable = m::mock('UntypedParameter_mailable_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasQueued($mailable)) == true (line 186)

    $actual = $this->mailFake->queued($mailable, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasQueued0()
{
    $mailable = m::mock('UntypedParameter_mailable_');

    // TODO: Your mock expectations here

    $actual = $this->mailFake->hasQueued($mailable);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo0()
{
    $users = m::mock('UntypedParameter_users_');

    // TODO: Your mock expectations here

    $actual = $this->mailFake->to($users);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBcc0()
{
    $users = m::mock('UntypedParameter_users_');

    // TODO: Your mock expectations here

    $actual = $this->mailFake->bcc($users);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRaw0()
{
    $text = m::mock('UntypedParameter_text_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->mailFake->raw($text, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend0()
{
    $view = m::mock('UntypedParameter_view_');
    $data = [];
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$view instanceof \Illuminate\Contracts\Mail\Mailable) == false (line 280)
    // if ($view instanceof \Illuminate\Contracts\Queue\ShouldQueue) == false (line 284)

    $actual = $this->mailFake->send($view, $data, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend1()
{
    $view = m::mock('UntypedParameter_view_');
    $data = [];
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$view instanceof \Illuminate\Contracts\Mail\Mailable) == false (line 280)
    // if ($view instanceof \Illuminate\Contracts\Queue\ShouldQueue) == true (line 284)

    $actual = $this->mailFake->send($view, $data, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend2()
{
    $view = m::mock('UntypedParameter_view_');
    $data = [];
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$view instanceof \Illuminate\Contracts\Mail\Mailable) == true (line 280)

    $actual = $this->mailFake->send($view, $data, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue0()
{
    $view = m::mock('UntypedParameter_view_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$view instanceof \Illuminate\Contracts\Mail\Mailable) == false (line 300)

    $actual = $this->mailFake->queue($view, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue1()
{
    $view = m::mock('UntypedParameter_view_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$view instanceof \Illuminate\Contracts\Mail\Mailable) == true (line 300)

    $actual = $this->mailFake->queue($view, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFailures0()
{
    // TODO: Your mock expectations here

    $actual = $this->mailFake->failures();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
