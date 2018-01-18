<?php

namespace tests\Illuminate\Notifications\Messages;

use Illuminate\Notifications\Messages\SimpleMessage;
use Mockery as m;

class SimpleMessageTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Notifications\Messages\SimpleMessage
*/
protected $simpleMessage;

public function setUp()
{
    parent::setUp();

    $this->simpleMessage = new \Illuminate\Notifications\Messages\SimpleMessage();
}

public function testSuccess0()
{
    // TODO: Your mock expectations here

    $actual = $this->simpleMessage->success();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError0()
{
    // TODO: Your mock expectations here

    $actual = $this->simpleMessage->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLevel0()
{
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    $actual = $this->simpleMessage->level($level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubject0()
{
    $subject = m::mock('UntypedParameter_subject_');

    // TODO: Your mock expectations here

    $actual = $this->simpleMessage->subject($subject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGreeting0()
{
    $greeting = m::mock('UntypedParameter_greeting_');

    // TODO: Your mock expectations here

    $actual = $this->simpleMessage->greeting($greeting);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSalutation0()
{
    $salutation = m::mock('UntypedParameter_salutation_');

    // TODO: Your mock expectations here

    $actual = $this->simpleMessage->salutation($salutation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLine0()
{
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    $actual = $this->simpleMessage->line($line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWith0()
{
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($line instanceof \Illuminate\Notifications\Action) == false (line 161)
    // if (!$this->actionText) == false (line 163)

    $actual = $this->simpleMessage->with($line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWith1()
{
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($line instanceof \Illuminate\Notifications\Action) == false (line 161)
    // if (!$this->actionText) == true (line 163)

    $actual = $this->simpleMessage->with($line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWith2()
{
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($line instanceof \Illuminate\Notifications\Action) == true (line 161)

    $actual = $this->simpleMessage->with($line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAction0()
{
    $text = m::mock('UntypedParameter_text_');
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    $actual = $this->simpleMessage->action($text, $url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToArray0()
{
    // TODO: Your mock expectations here

    $actual = $this->simpleMessage->toArray();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
