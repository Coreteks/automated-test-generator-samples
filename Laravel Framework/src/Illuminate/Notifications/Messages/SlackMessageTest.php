<?php

namespace tests\Illuminate\Notifications\Messages;

use Illuminate\Notifications\Messages\SlackMessage;
use Mockery as m;

class SlackMessageTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Notifications\Messages\SlackMessage
*/
protected $slackMessage;

public function setUp()
{
    parent::setUp();

    $this->slackMessage = new \Illuminate\Notifications\Messages\SlackMessage();
}

public function testSuccess0()
{
    // TODO: Your mock expectations here

    $actual = $this->slackMessage->success();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWarning0()
{
    // TODO: Your mock expectations here

    $actual = $this->slackMessage->warning();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError0()
{
    // TODO: Your mock expectations here

    $actual = $this->slackMessage->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom0()
{
    $username = m::mock('UntypedParameter_username_');
    $icon = m::mock('UntypedParameter_icon_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($icon)) == false (line 133)

    $actual = $this->slackMessage->from($username, $icon);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom1()
{
    $username = m::mock('UntypedParameter_username_');
    $icon = m::mock('UntypedParameter_icon_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($icon)) == true (line 133)

    $actual = $this->slackMessage->from($username, $icon);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImage0()
{
    $image = m::mock('UntypedParameter_image_');

    // TODO: Your mock expectations here

    $actual = $this->slackMessage->image($image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo0()
{
    $channel = m::mock('UntypedParameter_channel_');

    // TODO: Your mock expectations here

    $actual = $this->slackMessage->to($channel);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContent0()
{
    $content = m::mock('UntypedParameter_content_');

    // TODO: Your mock expectations here

    $actual = $this->slackMessage->content($content);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttachment0()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->slackMessage->attachment($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testColor0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->level) (line 201)
    // Case 'success' == false (line 202)
    // Case 'error' == false (line 204)
    // Case 'warning' == false (line 206)

    $actual = $this->slackMessage->color();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testColor1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->level) (line 201)
    // Case 'success' == false (line 202)
    // Case 'error' == false (line 204)
    // Case 'warning' == true (line 206)

    $actual = $this->slackMessage->color();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testColor2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->level) (line 201)
    // Case 'success' == false (line 202)
    // Case 'error' == true (line 204)

    $actual = $this->slackMessage->color();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testColor3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->level) (line 201)
    // Case 'success' == true (line 202)

    $actual = $this->slackMessage->color();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLinkNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->slackMessage->linkNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnfurlLinks0()
{
    $unfurl = m::mock('UntypedParameter_unfurl_');

    // TODO: Your mock expectations here

    $actual = $this->slackMessage->unfurlLinks($unfurl);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnfurlMedia0()
{
    $unfurl = m::mock('UntypedParameter_unfurl_');

    // TODO: Your mock expectations here

    $actual = $this->slackMessage->unfurlMedia($unfurl);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHttp0()
{
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->slackMessage->http($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
