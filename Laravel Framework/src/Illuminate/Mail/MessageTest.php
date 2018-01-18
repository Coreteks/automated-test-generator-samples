<?php

namespace tests\Illuminate\Mail;

use Illuminate\Mail\Message;
use Mockery as m;

class MessageTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_swift = null;
/**
* @var \Illuminate\Mail\Message
*/
protected $message;

public function setUp()
{
    parent::setUp();

    $this->_swift = null;
    $this->message = new \Illuminate\Mail\Message($this->_swift);
}

public function testFrom0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->message->from($address, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSender0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->message->sender($address, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReturnPath0()
{
    $address = m::mock('UntypedParameter_address_');

    // TODO: Your mock expectations here

    $actual = $this->message->returnPath($address);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');
    $override = m::mock('UntypedParameter_override_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($override) == false (line 89)

    $actual = $this->message->to($address, $name, $override);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo1()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');
    $override = m::mock('UntypedParameter_override_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($override) == true (line 89)

    $actual = $this->message->to($address, $name, $override);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCc0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');
    $override = m::mock('UntypedParameter_override_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($override) == false (line 108)

    $actual = $this->message->cc($address, $name, $override);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCc1()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');
    $override = m::mock('UntypedParameter_override_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($override) == true (line 108)

    $actual = $this->message->cc($address, $name, $override);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBcc0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');
    $override = m::mock('UntypedParameter_override_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($override) == false (line 127)

    $actual = $this->message->bcc($address, $name, $override);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBcc1()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');
    $override = m::mock('UntypedParameter_override_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($override) == true (line 127)

    $actual = $this->message->bcc($address, $name, $override);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplyTo0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->message->replyTo($address, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubject0()
{
    $subject = m::mock('UntypedParameter_subject_');

    // TODO: Your mock expectations here

    $actual = $this->message->subject($subject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPriority0()
{
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    $actual = $this->message->priority($level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttach0()
{
    $file = m::mock('UntypedParameter_file_');
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->message->attach($file, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttachData0()
{
    $data = m::mock('UntypedParameter_data_');
    $name = m::mock('UntypedParameter_name_');
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->message->attachData($data, $name, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEmbed0()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->embeddedFiles[$file])) == false (line 253)

    $actual = $this->message->embed($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEmbed1()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->embeddedFiles[$file])) == true (line 253)

    $actual = $this->message->embed($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEmbedData0()
{
    $data = m::mock('UntypedParameter_data_');
    $name = m::mock('UntypedParameter_name_');
    $contentType = m::mock('UntypedParameter_contentType_');

    // TODO: Your mock expectations here

    $actual = $this->message->embedData($data, $name, $contentType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSwiftMessage0()
{
    // TODO: Your mock expectations here

    $actual = $this->message->getSwiftMessage();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->message->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
