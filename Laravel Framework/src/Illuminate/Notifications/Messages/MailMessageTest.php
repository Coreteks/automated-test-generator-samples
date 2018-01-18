<?php

namespace tests\Illuminate\Notifications\Messages;

use Illuminate\Notifications\Messages\MailMessage;
use Mockery as m;

class MailMessageTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Notifications\Messages\MailMessage
*/
protected $mailMessage;

public function setUp()
{
    parent::setUp();

    $this->mailMessage = new \Illuminate\Notifications\Messages\MailMessage();
}

public function testView0()
{
    $view = m::mock('UntypedParameter_view_');
    $data = [];

    // TODO: Your mock expectations here

    $actual = $this->mailMessage->view($view, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMarkdown0()
{
    $view = m::mock('UntypedParameter_view_');
    $data = [];

    // TODO: Your mock expectations here

    $actual = $this->mailMessage->markdown($view, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplate0()
{
    $template = m::mock('UntypedParameter_template_');

    // TODO: Your mock expectations here

    $actual = $this->mailMessage->template($template);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->mailMessage->from($address, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplyTo0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->mailMessage->replyTo($address, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCc0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->mailMessage->cc($address, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBcc0()
{
    $address = m::mock('UntypedParameter_address_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->mailMessage->bcc($address, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttach0()
{
    $file = m::mock('UntypedParameter_file_');
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->mailMessage->attach($file, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttachData0()
{
    $data = m::mock('UntypedParameter_data_');
    $name = m::mock('UntypedParameter_name_');
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->mailMessage->attachData($data, $name, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPriority0()
{
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    $actual = $this->mailMessage->priority($level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData0()
{
    // TODO: Your mock expectations here

    $actual = $this->mailMessage->data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
