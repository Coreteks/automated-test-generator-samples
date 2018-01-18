<?php

namespace tests\Illuminate\Notifications\Messages;

use Illuminate\Notifications\Messages\SlackAttachmentField;
use Mockery as m;

class SlackAttachmentFieldTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Notifications\Messages\SlackAttachmentField
*/
protected $slackAttachmentField;

public function setUp()
{
    parent::setUp();

    $this->slackAttachmentField = new \Illuminate\Notifications\Messages\SlackAttachmentField();
}

public function testTitle0()
{
    $title = m::mock('UntypedParameter_title_');

    // TODO: Your mock expectations here

    $actual = $this->slackAttachmentField->title($title);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContent0()
{
    $content = m::mock('UntypedParameter_content_');

    // TODO: Your mock expectations here

    $actual = $this->slackAttachmentField->content($content);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLong0()
{
    // TODO: Your mock expectations here

    $actual = $this->slackAttachmentField->long();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToArray0()
{
    // TODO: Your mock expectations here

    $actual = $this->slackAttachmentField->toArray();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
