<?php

namespace tests\Illuminate\Mail;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\View\Factory;
use Illuminate\Mail\Mailer;
use Mockery as m;
use Swift_Mailer;

class MailerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_views;
/**
* @var \Mockery\MockInterface
*/
protected $_swift;
/**
* @var \Mockery\MockInterface
*/
protected $_events;
/**
* @var \Illuminate\Mail\Mailer
*/
protected $mailer;

public function setUp()
{
    parent::setUp();

    $this->_views = m::mock(\Illuminate\Contracts\View\Factory::class);
    $this->_swift = m::mock(\Swift_Mailer::class);
    $this->_events = m::mock(\Illuminate\Contracts\Events\Dispatcher::class);
    $this->mailer = new \Illuminate\Mail\Mailer($this->_views, $this->_swift, $this->_events);
}

public function testAlwaysFrom0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->mailer->alwaysFrom($address, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAlwaysReplyTo0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->mailer->alwaysReplyTo($address, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAlwaysTo0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->mailer->alwaysTo($address, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo0()
{
    $users = m::mock('UntypedParameter_users_');

    // TODO: Your mock expectations here

    $actual = $this->mailer->to($users);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBcc0()
{
    $users = m::mock('UntypedParameter_users_');

    // TODO: Your mock expectations here

    $actual = $this->mailer->bcc($users);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRaw0()
{
    $text = m::mock('UntypedParameter_text_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->mailer->raw($text, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPlain0()
{
    $view = m::mock('UntypedParameter_view_');
    $data = [];
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->mailer->plain($view, $data, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender0()
{
    $view = m::mock('UntypedParameter_view_');
    $data = [];

    // TODO: Your mock expectations here

    $actual = $this->mailer->render($view, $data);
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
    // if ($view instanceof \Illuminate\Contracts\Mail\Mailable) == false (line 204)
    // if (isset($this->to['address'])) == false (line 225)
    // if ($this->shouldSendMessage($swiftMessage)) == false (line 234)

    $actual = $this->mailer->send($view, $data, $callback);
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
    // if ($view instanceof \Illuminate\Contracts\Mail\Mailable) == false (line 204)
    // if (isset($this->to['address'])) == false (line 225)
    // if ($this->shouldSendMessage($swiftMessage)) == true (line 234)

    $actual = $this->mailer->send($view, $data, $callback);
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
    // if ($view instanceof \Illuminate\Contracts\Mail\Mailable) == false (line 204)
    // if (isset($this->to['address'])) == true (line 225)
    // if ($this->shouldSendMessage($swiftMessage)) == false (line 234)

    $actual = $this->mailer->send($view, $data, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend3()
{
    $view = m::mock('UntypedParameter_view_');
    $data = [];
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($view instanceof \Illuminate\Contracts\Mail\Mailable) == false (line 204)
    // if (isset($this->to['address'])) == true (line 225)
    // if ($this->shouldSendMessage($swiftMessage)) == true (line 234)

    $actual = $this->mailer->send($view, $data, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend4()
{
    $view = m::mock('UntypedParameter_view_');
    $data = [];
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($view instanceof \Illuminate\Contracts\Mail\Mailable) == true (line 204)

    $actual = $this->mailer->send($view, $data, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue0()
{
    $view = m::mock('UntypedParameter_view_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$view instanceof \Illuminate\Contracts\Mail\Mailable) == false (line 353)

    $actual = $this->mailer->queue($view, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testQueue1()
{
    $view = m::mock('UntypedParameter_view_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$view instanceof \Illuminate\Contracts\Mail\Mailable) == true (line 353)
    // throw new \InvalidArgumentException('Only mailables may be queued.') -> exception (line 354)

    $actual = $this->mailer->queue($view, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnQueue0()
{
    $queue = m::mock('UntypedParameter_queue_');
    $view = m::mock('UntypedParameter_view_');

    // TODO: Your mock expectations here

    $actual = $this->mailer->onQueue($queue, $view);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueueOn0()
{
    $queue = m::mock('UntypedParameter_queue_');
    $view = m::mock('UntypedParameter_view_');

    // TODO: Your mock expectations here

    $actual = $this->mailer->queueOn($queue, $view);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLater0()
{
    $delay = m::mock('UntypedParameter_delay_');
    $view = m::mock('UntypedParameter_view_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$view instanceof \Illuminate\Contracts\Mail\Mailable) == false (line 396)

    $actual = $this->mailer->later($delay, $view, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testLater1()
{
    $delay = m::mock('UntypedParameter_delay_');
    $view = m::mock('UntypedParameter_view_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$view instanceof \Illuminate\Contracts\Mail\Mailable) == true (line 396)
    // throw new \InvalidArgumentException('Only mailables may be queued.') -> exception (line 397)

    $actual = $this->mailer->later($delay, $view, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLaterOn0()
{
    $queue = m::mock('UntypedParameter_queue_');
    $delay = m::mock('UntypedParameter_delay_');
    $view = m::mock('UntypedParameter_view_');

    // TODO: Your mock expectations here

    $actual = $this->mailer->laterOn($queue, $delay, $view);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetViewFactory0()
{
    // TODO: Your mock expectations here

    $actual = $this->mailer->getViewFactory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSwiftMailer0()
{
    // TODO: Your mock expectations here

    $actual = $this->mailer->getSwiftMailer();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFailures0()
{
    // TODO: Your mock expectations here

    $actual = $this->mailer->failures();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetSwiftMailer0()
{
    $swift = m::mock('UntypedParameter_swift_');

    // TODO: Your mock expectations here

    $actual = $this->mailer->setSwiftMailer($swift);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetQueue0()
{
    $queue = m::mock(\Illuminate\Contracts\Queue\Factory::class);

    // TODO: Your mock expectations here

    $actual = $this->mailer->setQueue($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
