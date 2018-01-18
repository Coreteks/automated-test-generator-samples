<?php

namespace tests\Illuminate\Mail;

use Illuminate\Mail\Mailable;
use Mockery as m;

class MailableTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Mail\Mailable
*/
protected $mailable;

public function setUp()
{
    parent::setUp();

    $this->mailable = new \Illuminate\Mail\Mailable();
}

public function testSend0()
{
    $mailer = m::mock(\Illuminate\Contracts\Mail\Mailer::class);

    // TODO: Your mock expectations here

    $actual = $this->mailable->send($mailer);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue0()
{
    $queue = m::mock(\Illuminate\Contracts\Queue\Factory::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (property_exists($this, 'delay')) == false (line 136)

    $actual = $this->mailable->queue($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue1()
{
    $queue = m::mock(\Illuminate\Contracts\Queue\Factory::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (property_exists($this, 'delay')) == true (line 136)

    $actual = $this->mailable->queue($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLater0()
{
    $delay = m::mock('UntypedParameter_delay_');
    $queue = m::mock(\Illuminate\Contracts\Queue\Factory::class);

    // TODO: Your mock expectations here

    $actual = $this->mailable->later($delay, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender0()
{
    // TODO: Your mock expectations here

    $actual = $this->mailable->render();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuildViewData0()
{
    // TODO: Your mock expectations here

    $actual = $this->mailable->buildViewData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuildViewData1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($property->getDeclaringClass()->getName() != self::class) == false (line 232)

    $actual = $this->mailable->buildViewData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuildViewData2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($property->getDeclaringClass()->getName() != self::class) == true (line 232)

    $actual = $this->mailable->buildViewData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPriority0()
{
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    $actual = $this->mailable->priority($level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->mailable->from($address, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasFrom0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->mailable->hasFrom($address, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->mailable->to($address, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasTo0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->mailable->hasTo($address, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCc0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->mailable->cc($address, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasCc0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->mailable->hasCc($address, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBcc0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->mailable->bcc($address, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasBcc0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->mailable->hasBcc($address, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplyTo0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->mailable->replyTo($address, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasReplyTo0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->mailable->hasReplyTo($address, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubject0()
{
    $subject = m::mock('UntypedParameter_subject_');

    // TODO: Your mock expectations here

    $actual = $this->mailable->subject($subject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMarkdown0()
{
    $view = m::mock('UntypedParameter_view_');
    $data = [];

    // TODO: Your mock expectations here

    $actual = $this->mailable->markdown($view, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testView0()
{
    $view = m::mock('UntypedParameter_view_');
    $data = [];

    // TODO: Your mock expectations here

    $actual = $this->mailable->view($view, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testText0()
{
    $textView = m::mock('UntypedParameter_textView_');
    $data = [];

    // TODO: Your mock expectations here

    $actual = $this->mailable->text($textView, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWith0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($key)) == false (line 627)

    $actual = $this->mailable->with($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWith1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($key)) == true (line 627)

    $actual = $this->mailable->with($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttach0()
{
    $file = m::mock('UntypedParameter_file_');
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->mailable->attach($file, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttachData0()
{
    $data = m::mock('UntypedParameter_data_');
    $name = m::mock('UntypedParameter_name_');
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->mailable->attachData($data, $name, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithSwiftMessage0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->mailable->withSwiftMessage($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \BadMethodCallException
 */
public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::startsWith($method, 'with')) == false (line 689)
    // throw new \BadMethodCallException("Method [{$method}] does not exist on mailable.") -> exception (line 693)

    $actual = $this->mailable->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call1()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::startsWith($method, 'with')) == true (line 689)

    $actual = $this->mailable->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
