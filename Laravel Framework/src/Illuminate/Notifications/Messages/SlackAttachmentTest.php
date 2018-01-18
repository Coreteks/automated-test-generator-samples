<?php

namespace tests\Illuminate\Notifications\Messages;

use Illuminate\Notifications\Messages\SlackAttachment;
use Mockery as m;

class SlackAttachmentTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Notifications\Messages\SlackAttachment
*/
protected $slackAttachment;

public function setUp()
{
    parent::setUp();

    $this->slackAttachment = new \Illuminate\Notifications\Messages\SlackAttachment();
}

public function testTitle0()
{
    $title = m::mock('UntypedParameter_title_');
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    $actual = $this->slackAttachment->title($title, $url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContent0()
{
    $content = m::mock('UntypedParameter_content_');

    // TODO: Your mock expectations here

    $actual = $this->slackAttachment->content($content);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFallback0()
{
    $fallback = m::mock('UntypedParameter_fallback_');

    // TODO: Your mock expectations here

    $actual = $this->slackAttachment->fallback($fallback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testColor0()
{
    $color = m::mock('UntypedParameter_color_');

    // TODO: Your mock expectations here

    $actual = $this->slackAttachment->color($color);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField0()
{
    $title = m::mock('UntypedParameter_title_');
    $content = m::mock('UntypedParameter_content_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_callable($title)) == false (line 179)

    $actual = $this->slackAttachment->field($title, $content);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField1()
{
    $title = m::mock('UntypedParameter_title_');
    $content = m::mock('UntypedParameter_content_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_callable($title)) == true (line 179)

    $actual = $this->slackAttachment->field($title, $content);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFields0()
{
    $fields = [];

    // TODO: Your mock expectations here

    $actual = $this->slackAttachment->fields($fields);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMarkdown0()
{
    $fields = [];

    // TODO: Your mock expectations here

    $actual = $this->slackAttachment->markdown($fields);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImage0()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    $actual = $this->slackAttachment->image($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testThumb0()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    $actual = $this->slackAttachment->thumb($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthor0()
{
    $name = m::mock('UntypedParameter_name_');
    $link = m::mock('UntypedParameter_link_');
    $icon = m::mock('UntypedParameter_icon_');

    // TODO: Your mock expectations here

    $actual = $this->slackAttachment->author($name, $link, $icon);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFooter0()
{
    $footer = m::mock('UntypedParameter_footer_');

    // TODO: Your mock expectations here

    $actual = $this->slackAttachment->footer($footer);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFooterIcon0()
{
    $icon = m::mock('UntypedParameter_icon_');

    // TODO: Your mock expectations here

    $actual = $this->slackAttachment->footerIcon($icon);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTimestamp0()
{
    $timestamp = m::mock('UntypedParameter_timestamp_');

    // TODO: Your mock expectations here

    $actual = $this->slackAttachment->timestamp($timestamp);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
