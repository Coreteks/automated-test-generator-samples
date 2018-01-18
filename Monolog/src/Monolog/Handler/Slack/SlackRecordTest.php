<?php

namespace tests\Monolog\Handler\Slack;

use Mockery as m;
use Monolog\Formatter\FormatterInterface;
use Monolog\Handler\Slack\SlackRecord;

class SlackRecordTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_channel = null;
/**
* @var mixed
*/
protected $_username = null;
/**
* @var mixed
*/
protected $_useAttachment = null;
/**
* @var mixed
*/
protected $_userIcon = null;
/**
* @var mixed
*/
protected $_useShortAttachment = null;
/**
* @var mixed
*/
protected $_includeContextAndExtra = null;
/**
* @var array
*/
protected $_excludeFields = [];
/**
* @var \Mockery\MockInterface
*/
protected $_formatter;
/**
* @var \Monolog\Handler\Slack\SlackRecord
*/
protected $slackRecord;

public function setUp()
{
    parent::setUp();

    $this->_channel = null;
    $this->_username = null;
    $this->_useAttachment = null;
    $this->_userIcon = null;
    $this->_useShortAttachment = null;
    $this->_includeContextAndExtra = null;
    $this->_excludeFields = [];
    $this->_formatter = m::mock(\Monolog\Formatter\FormatterInterface::class);
    $this->slackRecord = new \Monolog\Handler\Slack\SlackRecord($this->_channel, $this->_username, $this->_useAttachment, $this->_userIcon, $this->_useShortAttachment, $this->_includeContextAndExtra, $this->_excludeFields, $this->_formatter);
}

public function testGetSlackData0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData2()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData3()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData4()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData5()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData6()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData7()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData8()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData9()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData10()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData11()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData12()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData13()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData14()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData15()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData16()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData17()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData18()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData19()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData20()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData21()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData22()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData23()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData24()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData25()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData26()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData27()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData28()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData29()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData30()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData31()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData32()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData33()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData34()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData35()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData36()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData37()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData38()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData39()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData40()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData41()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData42()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData43()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData44()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData45()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData46()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData47()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData48()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData49()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData50()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData51()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData52()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData53()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData54()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData55()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData56()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData57()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData58()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData59()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData60()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData61()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData62()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData63()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData64()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData65()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData66()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData67()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData68()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData69()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData70()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData71()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData72()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData73()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData74()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData75()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData76()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData77()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData78()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData79()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData80()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData81()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData82()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData83()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData84()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData85()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData86()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData87()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData88()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData89()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData90()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData91()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData92()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData93()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData94()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData95()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData96()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData97()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData98()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData99()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData100()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData101()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData102()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData103()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData104()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData105()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData106()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData107()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData108()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData109()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData110()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData111()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData112()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData113()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData114()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData115()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData116()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData117()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData118()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData119()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData120()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData121()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData122()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData123()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData124()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData125()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData126()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData127()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData128()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData129()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData130()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData131()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == false (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData132()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData133()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData134()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData135()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData136()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData137()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData138()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData139()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData140()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData141()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData142()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData143()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData144()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData145()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData146()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData147()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData148()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData149()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData150()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData151()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData152()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData153()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData154()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData155()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData156()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData157()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData158()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData159()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData160()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData161()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData162()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData163()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData164()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData165()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData166()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData167()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData168()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData169()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData170()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData171()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData172()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData173()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData174()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData175()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData176()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData177()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData178()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData179()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData180()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData181()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData182()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData183()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData184()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData185()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData186()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData187()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData188()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData189()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData190()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData191()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData192()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData193()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData194()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData195()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData196()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData197()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == false (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData198()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData199()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData200()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData201()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData202()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData203()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData204()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData205()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData206()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData207()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData208()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData209()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData210()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData211()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData212()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData213()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData214()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData215()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData216()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData217()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData218()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData219()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData220()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData221()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData222()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData223()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData224()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData225()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData226()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData227()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData228()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData229()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData230()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == false (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData231()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData232()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData233()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == false (line 123)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData234()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData235()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData236()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData237()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData238()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData239()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData240()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData241()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData242()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData243()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData244()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData245()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData246()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData247()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData248()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == false (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData249()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData250()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData251()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == false (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData252()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData253()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData254()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData255()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData256()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData257()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == false (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData258()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData259()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData260()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == false (line 142)
    // if ($this->useShortAttachment) == true (line 146)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData261()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == false (line 166)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData262()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == false (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSlackData263()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->username) == true (line 109)
    // if ($this->channel) == true (line 113)
    // if ($this->formatter && !$this->useAttachment) == true (line 117)
    // if ($this->useAttachment) == true (line 123)
    // if ($this->useShortAttachment) == true (line 133)
    // if ($this->includeContextAndExtra) == true (line 140)
    // if (empty($record[$key])) == true (line 142)
    // if ($this->userIcon) == true (line 166)
    // if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) == true (line 167)

    $actual = $this->slackRecord->getSlackData($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAttachmentColor0()
{
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 186)
    // Case $level >= \Monolog\Logger::ERROR == false (line 187)
    // Case $level >= \Monolog\Logger::WARNING == false (line 189)
    // Case $level >= \Monolog\Logger::INFO == false (line 191)
    // Default (line 193)

    $actual = $this->slackRecord->getAttachmentColor($level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAttachmentColor1()
{
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 186)
    // Case $level >= \Monolog\Logger::ERROR == false (line 187)
    // Case $level >= \Monolog\Logger::WARNING == false (line 189)
    // Case $level >= \Monolog\Logger::INFO == true (line 191)

    $actual = $this->slackRecord->getAttachmentColor($level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAttachmentColor2()
{
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 186)
    // Case $level >= \Monolog\Logger::ERROR == false (line 187)
    // Case $level >= \Monolog\Logger::WARNING == true (line 189)

    $actual = $this->slackRecord->getAttachmentColor($level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAttachmentColor3()
{
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 186)
    // Case $level >= \Monolog\Logger::ERROR == true (line 187)

    $actual = $this->slackRecord->getAttachmentColor($level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStringify0()
{
    $fields = m::mock('UntypedParameter_fields_');

    // TODO: Your mock expectations here

    $actual = $this->slackRecord->stringify($fields);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetFormatter0()
{
    $formatter = m::mock(\Monolog\Formatter\FormatterInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->slackRecord->setFormatter($formatter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
