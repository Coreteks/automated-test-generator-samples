<?php

namespace tests;

use CI_Email;
use Mockery as m;

class CI_EmailTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_config = [];
/**
* @var \CI_Email
*/
protected $cI_Email;

public function setUp()
{
    parent::setUp();

    $this->_config = [];
    $this->cI_Email = new \CI_Email($this->_config);
}

public function testInitialize0()
{
    $config = [];

    // TODO: Your mock expectations here

    $actual = $this->cI_Email->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize1()
{
    $config = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->{$key})) == false (line 411)

    $actual = $this->cI_Email->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize2()
{
    $config = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->{$key})) == true (line 411)
    // if (\method_exists($this, $method)) == false (line 415)

    $actual = $this->cI_Email->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize3()
{
    $config = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->{$key})) == true (line 411)
    // if (\method_exists($this, $method)) == true (line 415)

    $actual = $this->cI_Email->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClear0()
{
    $clear_attachments = m::mock('UntypedParameter_clear_attachments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($clear_attachments !== \FALSE) == false (line 455)

    $actual = $this->cI_Email->clear($clear_attachments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClear1()
{
    $clear_attachments = m::mock('UntypedParameter_clear_attachments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($clear_attachments !== \FALSE) == true (line 455)

    $actual = $this->cI_Email->clear($clear_attachments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom0()
{
    $from = m::mock('UntypedParameter_from_');
    $name = m::mock('UntypedParameter_name_');
    $return_path = m::mock('UntypedParameter_return_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $from, $match)) == false (line 475)
    // if ($this->validate) == false (line 480)
    // if ($name !== '') == false (line 490)

    $actual = $this->cI_Email->from($from, $name, $return_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom1()
{
    $from = m::mock('UntypedParameter_from_');
    $name = m::mock('UntypedParameter_name_');
    $return_path = m::mock('UntypedParameter_return_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $from, $match)) == false (line 475)
    // if ($this->validate) == false (line 480)
    // if ($name !== '') == true (line 490)
    // if (!\preg_match('/[\\200-\\377]/', $name)) == false (line 493)

    $actual = $this->cI_Email->from($from, $name, $return_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom2()
{
    $from = m::mock('UntypedParameter_from_');
    $name = m::mock('UntypedParameter_name_');
    $return_path = m::mock('UntypedParameter_return_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $from, $match)) == false (line 475)
    // if ($this->validate) == false (line 480)
    // if ($name !== '') == true (line 490)
    // if (!\preg_match('/[\\200-\\377]/', $name)) == true (line 493)

    $actual = $this->cI_Email->from($from, $name, $return_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom3()
{
    $from = m::mock('UntypedParameter_from_');
    $name = m::mock('UntypedParameter_name_');
    $return_path = m::mock('UntypedParameter_return_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $from, $match)) == false (line 475)
    // if ($this->validate) == true (line 480)
    // if ($return_path) == false (line 483)
    // if ($name !== '') == false (line 490)

    $actual = $this->cI_Email->from($from, $name, $return_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom4()
{
    $from = m::mock('UntypedParameter_from_');
    $name = m::mock('UntypedParameter_name_');
    $return_path = m::mock('UntypedParameter_return_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $from, $match)) == false (line 475)
    // if ($this->validate) == true (line 480)
    // if ($return_path) == false (line 483)
    // if ($name !== '') == true (line 490)
    // if (!\preg_match('/[\\200-\\377]/', $name)) == false (line 493)

    $actual = $this->cI_Email->from($from, $name, $return_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom5()
{
    $from = m::mock('UntypedParameter_from_');
    $name = m::mock('UntypedParameter_name_');
    $return_path = m::mock('UntypedParameter_return_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $from, $match)) == false (line 475)
    // if ($this->validate) == true (line 480)
    // if ($return_path) == false (line 483)
    // if ($name !== '') == true (line 490)
    // if (!\preg_match('/[\\200-\\377]/', $name)) == true (line 493)

    $actual = $this->cI_Email->from($from, $name, $return_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom6()
{
    $from = m::mock('UntypedParameter_from_');
    $name = m::mock('UntypedParameter_name_');
    $return_path = m::mock('UntypedParameter_return_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $from, $match)) == false (line 475)
    // if ($this->validate) == true (line 480)
    // if ($return_path) == true (line 483)
    // if ($name !== '') == false (line 490)

    $actual = $this->cI_Email->from($from, $name, $return_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom7()
{
    $from = m::mock('UntypedParameter_from_');
    $name = m::mock('UntypedParameter_name_');
    $return_path = m::mock('UntypedParameter_return_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $from, $match)) == false (line 475)
    // if ($this->validate) == true (line 480)
    // if ($return_path) == true (line 483)
    // if ($name !== '') == true (line 490)
    // if (!\preg_match('/[\\200-\\377]/', $name)) == false (line 493)

    $actual = $this->cI_Email->from($from, $name, $return_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom8()
{
    $from = m::mock('UntypedParameter_from_');
    $name = m::mock('UntypedParameter_name_');
    $return_path = m::mock('UntypedParameter_return_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $from, $match)) == false (line 475)
    // if ($this->validate) == true (line 480)
    // if ($return_path) == true (line 483)
    // if ($name !== '') == true (line 490)
    // if (!\preg_match('/[\\200-\\377]/', $name)) == true (line 493)

    $actual = $this->cI_Email->from($from, $name, $return_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom9()
{
    $from = m::mock('UntypedParameter_from_');
    $name = m::mock('UntypedParameter_name_');
    $return_path = m::mock('UntypedParameter_return_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $from, $match)) == true (line 475)
    // if ($this->validate) == false (line 480)
    // if ($name !== '') == false (line 490)

    $actual = $this->cI_Email->from($from, $name, $return_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom10()
{
    $from = m::mock('UntypedParameter_from_');
    $name = m::mock('UntypedParameter_name_');
    $return_path = m::mock('UntypedParameter_return_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $from, $match)) == true (line 475)
    // if ($this->validate) == false (line 480)
    // if ($name !== '') == true (line 490)
    // if (!\preg_match('/[\\200-\\377]/', $name)) == false (line 493)

    $actual = $this->cI_Email->from($from, $name, $return_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom11()
{
    $from = m::mock('UntypedParameter_from_');
    $name = m::mock('UntypedParameter_name_');
    $return_path = m::mock('UntypedParameter_return_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $from, $match)) == true (line 475)
    // if ($this->validate) == false (line 480)
    // if ($name !== '') == true (line 490)
    // if (!\preg_match('/[\\200-\\377]/', $name)) == true (line 493)

    $actual = $this->cI_Email->from($from, $name, $return_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom12()
{
    $from = m::mock('UntypedParameter_from_');
    $name = m::mock('UntypedParameter_name_');
    $return_path = m::mock('UntypedParameter_return_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $from, $match)) == true (line 475)
    // if ($this->validate) == true (line 480)
    // if ($return_path) == false (line 483)
    // if ($name !== '') == false (line 490)

    $actual = $this->cI_Email->from($from, $name, $return_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom13()
{
    $from = m::mock('UntypedParameter_from_');
    $name = m::mock('UntypedParameter_name_');
    $return_path = m::mock('UntypedParameter_return_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $from, $match)) == true (line 475)
    // if ($this->validate) == true (line 480)
    // if ($return_path) == false (line 483)
    // if ($name !== '') == true (line 490)
    // if (!\preg_match('/[\\200-\\377]/', $name)) == false (line 493)

    $actual = $this->cI_Email->from($from, $name, $return_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom14()
{
    $from = m::mock('UntypedParameter_from_');
    $name = m::mock('UntypedParameter_name_');
    $return_path = m::mock('UntypedParameter_return_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $from, $match)) == true (line 475)
    // if ($this->validate) == true (line 480)
    // if ($return_path) == false (line 483)
    // if ($name !== '') == true (line 490)
    // if (!\preg_match('/[\\200-\\377]/', $name)) == true (line 493)

    $actual = $this->cI_Email->from($from, $name, $return_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom15()
{
    $from = m::mock('UntypedParameter_from_');
    $name = m::mock('UntypedParameter_name_');
    $return_path = m::mock('UntypedParameter_return_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $from, $match)) == true (line 475)
    // if ($this->validate) == true (line 480)
    // if ($return_path) == true (line 483)
    // if ($name !== '') == false (line 490)

    $actual = $this->cI_Email->from($from, $name, $return_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom16()
{
    $from = m::mock('UntypedParameter_from_');
    $name = m::mock('UntypedParameter_name_');
    $return_path = m::mock('UntypedParameter_return_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $from, $match)) == true (line 475)
    // if ($this->validate) == true (line 480)
    // if ($return_path) == true (line 483)
    // if ($name !== '') == true (line 490)
    // if (!\preg_match('/[\\200-\\377]/', $name)) == false (line 493)

    $actual = $this->cI_Email->from($from, $name, $return_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom17()
{
    $from = m::mock('UntypedParameter_from_');
    $name = m::mock('UntypedParameter_name_');
    $return_path = m::mock('UntypedParameter_return_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $from, $match)) == true (line 475)
    // if ($this->validate) == true (line 480)
    // if ($return_path) == true (line 483)
    // if ($name !== '') == true (line 490)
    // if (!\preg_match('/[\\200-\\377]/', $name)) == true (line 493)

    $actual = $this->cI_Email->from($from, $name, $return_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReply_to0()
{
    $replyto = m::mock('UntypedParameter_replyto_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $replyto, $match)) == false (line 523)
    // if ($this->validate) == false (line 528)
    // if ($name !== '') == false (line 533)

    $actual = $this->cI_Email->reply_to($replyto, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReply_to1()
{
    $replyto = m::mock('UntypedParameter_replyto_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $replyto, $match)) == false (line 523)
    // if ($this->validate) == false (line 528)
    // if ($name !== '') == true (line 533)
    // if (!\preg_match('/[\\200-\\377]/', $name)) == false (line 536)

    $actual = $this->cI_Email->reply_to($replyto, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReply_to2()
{
    $replyto = m::mock('UntypedParameter_replyto_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $replyto, $match)) == false (line 523)
    // if ($this->validate) == false (line 528)
    // if ($name !== '') == true (line 533)
    // if (!\preg_match('/[\\200-\\377]/', $name)) == true (line 536)

    $actual = $this->cI_Email->reply_to($replyto, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReply_to3()
{
    $replyto = m::mock('UntypedParameter_replyto_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $replyto, $match)) == false (line 523)
    // if ($this->validate) == true (line 528)
    // if ($name !== '') == false (line 533)

    $actual = $this->cI_Email->reply_to($replyto, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReply_to4()
{
    $replyto = m::mock('UntypedParameter_replyto_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $replyto, $match)) == false (line 523)
    // if ($this->validate) == true (line 528)
    // if ($name !== '') == true (line 533)
    // if (!\preg_match('/[\\200-\\377]/', $name)) == false (line 536)

    $actual = $this->cI_Email->reply_to($replyto, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReply_to5()
{
    $replyto = m::mock('UntypedParameter_replyto_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $replyto, $match)) == false (line 523)
    // if ($this->validate) == true (line 528)
    // if ($name !== '') == true (line 533)
    // if (!\preg_match('/[\\200-\\377]/', $name)) == true (line 536)

    $actual = $this->cI_Email->reply_to($replyto, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReply_to6()
{
    $replyto = m::mock('UntypedParameter_replyto_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $replyto, $match)) == true (line 523)
    // if ($this->validate) == false (line 528)
    // if ($name !== '') == false (line 533)

    $actual = $this->cI_Email->reply_to($replyto, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReply_to7()
{
    $replyto = m::mock('UntypedParameter_replyto_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $replyto, $match)) == true (line 523)
    // if ($this->validate) == false (line 528)
    // if ($name !== '') == true (line 533)
    // if (!\preg_match('/[\\200-\\377]/', $name)) == false (line 536)

    $actual = $this->cI_Email->reply_to($replyto, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReply_to8()
{
    $replyto = m::mock('UntypedParameter_replyto_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $replyto, $match)) == true (line 523)
    // if ($this->validate) == false (line 528)
    // if ($name !== '') == true (line 533)
    // if (!\preg_match('/[\\200-\\377]/', $name)) == true (line 536)

    $actual = $this->cI_Email->reply_to($replyto, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReply_to9()
{
    $replyto = m::mock('UntypedParameter_replyto_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $replyto, $match)) == true (line 523)
    // if ($this->validate) == true (line 528)
    // if ($name !== '') == false (line 533)

    $actual = $this->cI_Email->reply_to($replyto, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReply_to10()
{
    $replyto = m::mock('UntypedParameter_replyto_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $replyto, $match)) == true (line 523)
    // if ($this->validate) == true (line 528)
    // if ($name !== '') == true (line 533)
    // if (!\preg_match('/[\\200-\\377]/', $name)) == false (line 536)

    $actual = $this->cI_Email->reply_to($replyto, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReply_to11()
{
    $replyto = m::mock('UntypedParameter_replyto_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/\<(.*)\\>/', $replyto, $match)) == true (line 523)
    // if ($this->validate) == true (line 528)
    // if ($name !== '') == true (line 533)
    // if (!\preg_match('/[\\200-\\377]/', $name)) == true (line 536)

    $actual = $this->cI_Email->reply_to($replyto, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo0()
{
    $to = m::mock('UntypedParameter_to_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->validate) == false (line 566)
    // if ($this->_get_protocol() !== 'mail') == false (line 571)

    $actual = $this->cI_Email->to($to);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo1()
{
    $to = m::mock('UntypedParameter_to_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->validate) == false (line 566)
    // if ($this->_get_protocol() !== 'mail') == true (line 571)

    $actual = $this->cI_Email->to($to);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo2()
{
    $to = m::mock('UntypedParameter_to_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->validate) == true (line 566)
    // if ($this->_get_protocol() !== 'mail') == false (line 571)

    $actual = $this->cI_Email->to($to);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo3()
{
    $to = m::mock('UntypedParameter_to_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->validate) == true (line 566)
    // if ($this->_get_protocol() !== 'mail') == true (line 571)

    $actual = $this->cI_Email->to($to);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCc0()
{
    $cc = m::mock('UntypedParameter_cc_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->validate) == false (line 593)
    // if ($this->_get_protocol() === 'smtp') == false (line 600)

    $actual = $this->cI_Email->cc($cc);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCc1()
{
    $cc = m::mock('UntypedParameter_cc_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->validate) == false (line 593)
    // if ($this->_get_protocol() === 'smtp') == true (line 600)

    $actual = $this->cI_Email->cc($cc);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCc2()
{
    $cc = m::mock('UntypedParameter_cc_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->validate) == true (line 593)
    // if ($this->_get_protocol() === 'smtp') == false (line 600)

    $actual = $this->cI_Email->cc($cc);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCc3()
{
    $cc = m::mock('UntypedParameter_cc_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->validate) == true (line 593)
    // if ($this->_get_protocol() === 'smtp') == true (line 600)

    $actual = $this->cI_Email->cc($cc);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBcc0()
{
    $bcc = m::mock('UntypedParameter_bcc_');
    $limit = m::mock('UntypedParameter_limit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($limit !== '' && \is_numeric($limit)) == false (line 619)
    // if ($this->validate) == false (line 627)
    // if ($this->_get_protocol() === 'smtp' or $this->bcc_batch_mode && \count($bcc) > $this->bcc_batch_size) == false (line 632)

    $actual = $this->cI_Email->bcc($bcc, $limit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBcc1()
{
    $bcc = m::mock('UntypedParameter_bcc_');
    $limit = m::mock('UntypedParameter_limit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($limit !== '' && \is_numeric($limit)) == false (line 619)
    // if ($this->validate) == false (line 627)
    // if ($this->_get_protocol() === 'smtp' or $this->bcc_batch_mode && \count($bcc) > $this->bcc_batch_size) == true (line 632)

    $actual = $this->cI_Email->bcc($bcc, $limit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBcc2()
{
    $bcc = m::mock('UntypedParameter_bcc_');
    $limit = m::mock('UntypedParameter_limit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($limit !== '' && \is_numeric($limit)) == false (line 619)
    // if ($this->validate) == true (line 627)
    // if ($this->_get_protocol() === 'smtp' or $this->bcc_batch_mode && \count($bcc) > $this->bcc_batch_size) == false (line 632)

    $actual = $this->cI_Email->bcc($bcc, $limit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBcc3()
{
    $bcc = m::mock('UntypedParameter_bcc_');
    $limit = m::mock('UntypedParameter_limit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($limit !== '' && \is_numeric($limit)) == false (line 619)
    // if ($this->validate) == true (line 627)
    // if ($this->_get_protocol() === 'smtp' or $this->bcc_batch_mode && \count($bcc) > $this->bcc_batch_size) == true (line 632)

    $actual = $this->cI_Email->bcc($bcc, $limit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBcc4()
{
    $bcc = m::mock('UntypedParameter_bcc_');
    $limit = m::mock('UntypedParameter_limit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($limit !== '' && \is_numeric($limit)) == true (line 619)
    // if ($this->validate) == false (line 627)
    // if ($this->_get_protocol() === 'smtp' or $this->bcc_batch_mode && \count($bcc) > $this->bcc_batch_size) == false (line 632)

    $actual = $this->cI_Email->bcc($bcc, $limit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBcc5()
{
    $bcc = m::mock('UntypedParameter_bcc_');
    $limit = m::mock('UntypedParameter_limit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($limit !== '' && \is_numeric($limit)) == true (line 619)
    // if ($this->validate) == false (line 627)
    // if ($this->_get_protocol() === 'smtp' or $this->bcc_batch_mode && \count($bcc) > $this->bcc_batch_size) == true (line 632)

    $actual = $this->cI_Email->bcc($bcc, $limit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBcc6()
{
    $bcc = m::mock('UntypedParameter_bcc_');
    $limit = m::mock('UntypedParameter_limit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($limit !== '' && \is_numeric($limit)) == true (line 619)
    // if ($this->validate) == true (line 627)
    // if ($this->_get_protocol() === 'smtp' or $this->bcc_batch_mode && \count($bcc) > $this->bcc_batch_size) == false (line 632)

    $actual = $this->cI_Email->bcc($bcc, $limit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBcc7()
{
    $bcc = m::mock('UntypedParameter_bcc_');
    $limit = m::mock('UntypedParameter_limit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($limit !== '' && \is_numeric($limit)) == true (line 619)
    // if ($this->validate) == true (line 627)
    // if ($this->_get_protocol() === 'smtp' or $this->bcc_batch_mode && \count($bcc) > $this->bcc_batch_size) == true (line 632)

    $actual = $this->cI_Email->bcc($bcc, $limit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubject0()
{
    $subject = m::mock('UntypedParameter_subject_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Email->subject($subject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMessage0()
{
    $body = m::mock('UntypedParameter_body_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Email->message($body);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttach0()
{
    $file = m::mock('UntypedParameter_file_');
    $disposition = m::mock('UntypedParameter_disposition_');
    $newname = m::mock('UntypedParameter_newname_');
    $mime = m::mock('UntypedParameter_mime_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($mime === '') == false (line 686)

    $actual = $this->cI_Email->attach($file, $disposition, $newname, $mime);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttach1()
{
    $file = m::mock('UntypedParameter_file_');
    $disposition = m::mock('UntypedParameter_disposition_');
    $newname = m::mock('UntypedParameter_newname_');
    $mime = m::mock('UntypedParameter_mime_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($mime === '') == true (line 686)
    // if (\strpos($file, '://') === \FALSE && !\file_exists($file)) == false (line 688)
    // if (!($fp = @\fopen($file, 'rb'))) == false (line 694)

    $actual = $this->cI_Email->attach($file, $disposition, $newname, $mime);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttach2()
{
    $file = m::mock('UntypedParameter_file_');
    $disposition = m::mock('UntypedParameter_disposition_');
    $newname = m::mock('UntypedParameter_newname_');
    $mime = m::mock('UntypedParameter_mime_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($mime === '') == true (line 686)
    // if (\strpos($file, '://') === \FALSE && !\file_exists($file)) == false (line 688)
    // if (!($fp = @\fopen($file, 'rb'))) == true (line 694)

    $actual = $this->cI_Email->attach($file, $disposition, $newname, $mime);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttach3()
{
    $file = m::mock('UntypedParameter_file_');
    $disposition = m::mock('UntypedParameter_disposition_');
    $newname = m::mock('UntypedParameter_newname_');
    $mime = m::mock('UntypedParameter_mime_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($mime === '') == true (line 686)
    // if (\strpos($file, '://') === \FALSE && !\file_exists($file)) == true (line 688)

    $actual = $this->cI_Email->attach($file, $disposition, $newname, $mime);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttachment_cid0()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 732)

    $actual = $this->cI_Email->attachment_cid($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttachment_cid1()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 732)
    // if ($this->_attachments[$i]['name'][0] === $filename) == false (line 734)
    // for (...) == false (line 732)

    $actual = $this->cI_Email->attachment_cid($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttachment_cid2()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 732)
    // if ($this->_attachments[$i]['name'][0] === $filename) == true (line 734)

    $actual = $this->cI_Email->attachment_cid($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_header0()
{
    $header = m::mock('UntypedParameter_header_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Email->set_header($header, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_alt_message0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Email->set_alt_message($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_mailtype0()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Email->set_mailtype($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_wordwrap0()
{
    $wordwrap = m::mock('UntypedParameter_wordwrap_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Email->set_wordwrap($wordwrap);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_protocol0()
{
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Email->set_protocol($protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_priority0()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Email->set_priority($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_newline0()
{
    $newline = m::mock('UntypedParameter_newline_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Email->set_newline($newline);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_crlf0()
{
    $crlf = m::mock('UntypedParameter_crlf_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Email->set_crlf($crlf);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate_email0()
{
    $email = m::mock('UntypedParameter_email_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($email)) == false (line 987)

    $actual = $this->cI_Email->validate_email($email);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate_email1()
{
    $email = m::mock('UntypedParameter_email_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($email)) == false (line 987)
    // if (!$this->valid_email($val)) == false (line 995)

    $actual = $this->cI_Email->validate_email($email);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate_email2()
{
    $email = m::mock('UntypedParameter_email_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($email)) == false (line 987)
    // if (!$this->valid_email($val)) == true (line 995)

    $actual = $this->cI_Email->validate_email($email);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate_email3()
{
    $email = m::mock('UntypedParameter_email_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($email)) == true (line 987)

    $actual = $this->cI_Email->validate_email($email);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_email0()
{
    $email = m::mock('UntypedParameter_email_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\function_exists('idn_to_ascii') && ($atpos = \strpos($email, '@'))) == false (line 1015)

    $actual = $this->cI_Email->valid_email($email);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_email1()
{
    $email = m::mock('UntypedParameter_email_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\function_exists('idn_to_ascii') && ($atpos = \strpos($email, '@'))) == true (line 1015)

    $actual = $this->cI_Email->valid_email($email);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClean_email0()
{
    $email = m::mock('UntypedParameter_email_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($email)) == false (line 1033)

    $actual = $this->cI_Email->clean_email($email);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClean_email1()
{
    $email = m::mock('UntypedParameter_email_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($email)) == false (line 1033)

    $actual = $this->cI_Email->clean_email($email);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClean_email2()
{
    $email = m::mock('UntypedParameter_email_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($email)) == true (line 1033)

    $actual = $this->cI_Email->clean_email($email);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap0()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap1()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap2()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap3()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap4()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap5()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap6()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap7()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap8()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap9()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap10()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap11()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap12()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap13()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap14()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap15()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap16()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap17()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap18()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap19()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap20()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap21()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap22()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap23()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap24()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap25()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap26()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap27()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap28()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap29()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap30()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap31()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap32()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap33()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap34()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap35()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap36()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap37()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap38()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap39()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap40()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap41()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap42()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap43()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap44()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap45()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap46()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap47()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap48()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap49()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap50()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap51()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap52()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap53()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap54()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap55()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap56()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap57()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap58()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap59()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap60()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap61()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap62()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap63()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap64()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap65()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap66()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap67()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap68()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap69()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap70()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap71()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap72()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap73()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap74()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap75()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap76()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap77()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap78()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap79()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap80()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap81()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap82()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap83()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap84()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap85()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap86()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap87()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap88()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap89()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap90()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap91()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap92()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap93()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap94()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap95()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap96()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap97()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap98()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap99()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap100()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap101()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap102()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap103()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap104()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap105()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap106()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap107()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == false (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap108()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap109()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap110()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap111()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap112()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap113()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap114()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap115()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap116()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap117()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap118()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap119()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap120()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap121()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap122()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap123()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap124()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap125()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap126()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap127()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap128()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap129()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap130()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap131()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap132()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap133()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap134()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap135()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap136()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap137()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap138()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap139()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap140()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap141()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap142()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap143()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap144()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap145()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap146()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap147()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap148()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap149()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap150()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap151()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap152()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap153()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap154()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap155()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap156()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap157()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap158()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap159()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap160()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap161()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == false (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap162()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap163()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap164()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap165()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap166()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap167()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap168()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap169()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap170()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap171()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap172()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap173()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap174()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap175()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap176()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap177()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap178()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap179()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == false (line 1114)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap180()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap181()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap182()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap183()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap184()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap185()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap186()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap187()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap188()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap189()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap190()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap191()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap192()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap193()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap194()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap195()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap196()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap197()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap198()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap199()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap200()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap201()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap202()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap203()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap204()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap205()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap206()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == false (line 1144)
    // PhpParser\Node\Stmt\Do_ == false (line 1141)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap207()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap208()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap209()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == false (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap210()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap211()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap212()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == false (line 1134)
    // if (\preg_match('!\\[url.+\\]|://|www\\.!', $line)) == true (line 1144)
    // if ($temp !== '') == true (line 1157)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap213()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == false (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap214()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWord_wrap215()
{
    $str = m::mock('UntypedParameter_str_');
    $charlim = m::mock('UntypedParameter_charlim_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($charlim)) == true (line 1097)
    // if (\strpos($str, "\r") !== \FALSE) == true (line 1103)
    // if (\preg_match_all('|\\{unwrap\\}(.+?)\\{/unwrap\\}|s', $str, $matches)) == true (line 1114)
    // for (...) == true (line 1116)
    // for (...) == false (line 1116)
    // if (self::strlen($line) <= $charlim) == true (line 1134)
    // if (\count($unwrap) > 0) == true (line 1166)

    $actual = $this->cI_Email->word_wrap($str, $charlim);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend0()
{
    $auto_clear = m::mock('UntypedParameter_auto_clear_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_headers['From'])) == false (line 1653)
    // if ($this->_replyto_flag === \FALSE) == false (line 1659)
    // if (empty($this->_recipients) && !isset($this->_headers['To']) && empty($this->_bcc_array) && !isset($this->_headers['Bcc']) && !isset($this->_headers['Cc'])) == false (line 1664)
    // if ($this->bcc_batch_mode && \count($this->_bcc_array) > $this->bcc_batch_size) == false (line 1674)
    // if ($result && $auto_clear) == false (line 1689)

    $actual = $this->cI_Email->send($auto_clear);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend1()
{
    $auto_clear = m::mock('UntypedParameter_auto_clear_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_headers['From'])) == false (line 1653)
    // if ($this->_replyto_flag === \FALSE) == false (line 1659)
    // if (empty($this->_recipients) && !isset($this->_headers['To']) && empty($this->_bcc_array) && !isset($this->_headers['Bcc']) && !isset($this->_headers['Cc'])) == false (line 1664)
    // if ($this->bcc_batch_mode && \count($this->_bcc_array) > $this->bcc_batch_size) == false (line 1674)
    // if ($result && $auto_clear) == true (line 1689)

    $actual = $this->cI_Email->send($auto_clear);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend2()
{
    $auto_clear = m::mock('UntypedParameter_auto_clear_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_headers['From'])) == false (line 1653)
    // if ($this->_replyto_flag === \FALSE) == false (line 1659)
    // if (empty($this->_recipients) && !isset($this->_headers['To']) && empty($this->_bcc_array) && !isset($this->_headers['Bcc']) && !isset($this->_headers['Cc'])) == false (line 1664)
    // if ($this->bcc_batch_mode && \count($this->_bcc_array) > $this->bcc_batch_size) == true (line 1674)
    // if ($auto_clear) == false (line 1678)

    $actual = $this->cI_Email->send($auto_clear);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend3()
{
    $auto_clear = m::mock('UntypedParameter_auto_clear_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_headers['From'])) == false (line 1653)
    // if ($this->_replyto_flag === \FALSE) == false (line 1659)
    // if (empty($this->_recipients) && !isset($this->_headers['To']) && empty($this->_bcc_array) && !isset($this->_headers['Bcc']) && !isset($this->_headers['Cc'])) == false (line 1664)
    // if ($this->bcc_batch_mode && \count($this->_bcc_array) > $this->bcc_batch_size) == true (line 1674)
    // if ($auto_clear) == true (line 1678)

    $actual = $this->cI_Email->send($auto_clear);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend4()
{
    $auto_clear = m::mock('UntypedParameter_auto_clear_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_headers['From'])) == false (line 1653)
    // if ($this->_replyto_flag === \FALSE) == false (line 1659)
    // if (empty($this->_recipients) && !isset($this->_headers['To']) && empty($this->_bcc_array) && !isset($this->_headers['Bcc']) && !isset($this->_headers['Cc'])) == true (line 1664)

    $actual = $this->cI_Email->send($auto_clear);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend5()
{
    $auto_clear = m::mock('UntypedParameter_auto_clear_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_headers['From'])) == false (line 1653)
    // if ($this->_replyto_flag === \FALSE) == true (line 1659)
    // if (empty($this->_recipients) && !isset($this->_headers['To']) && empty($this->_bcc_array) && !isset($this->_headers['Bcc']) && !isset($this->_headers['Cc'])) == false (line 1664)
    // if ($this->bcc_batch_mode && \count($this->_bcc_array) > $this->bcc_batch_size) == false (line 1674)
    // if ($result && $auto_clear) == false (line 1689)

    $actual = $this->cI_Email->send($auto_clear);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend6()
{
    $auto_clear = m::mock('UntypedParameter_auto_clear_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_headers['From'])) == false (line 1653)
    // if ($this->_replyto_flag === \FALSE) == true (line 1659)
    // if (empty($this->_recipients) && !isset($this->_headers['To']) && empty($this->_bcc_array) && !isset($this->_headers['Bcc']) && !isset($this->_headers['Cc'])) == false (line 1664)
    // if ($this->bcc_batch_mode && \count($this->_bcc_array) > $this->bcc_batch_size) == false (line 1674)
    // if ($result && $auto_clear) == true (line 1689)

    $actual = $this->cI_Email->send($auto_clear);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend7()
{
    $auto_clear = m::mock('UntypedParameter_auto_clear_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_headers['From'])) == false (line 1653)
    // if ($this->_replyto_flag === \FALSE) == true (line 1659)
    // if (empty($this->_recipients) && !isset($this->_headers['To']) && empty($this->_bcc_array) && !isset($this->_headers['Bcc']) && !isset($this->_headers['Cc'])) == false (line 1664)
    // if ($this->bcc_batch_mode && \count($this->_bcc_array) > $this->bcc_batch_size) == true (line 1674)
    // if ($auto_clear) == false (line 1678)

    $actual = $this->cI_Email->send($auto_clear);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend8()
{
    $auto_clear = m::mock('UntypedParameter_auto_clear_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_headers['From'])) == false (line 1653)
    // if ($this->_replyto_flag === \FALSE) == true (line 1659)
    // if (empty($this->_recipients) && !isset($this->_headers['To']) && empty($this->_bcc_array) && !isset($this->_headers['Bcc']) && !isset($this->_headers['Cc'])) == false (line 1664)
    // if ($this->bcc_batch_mode && \count($this->_bcc_array) > $this->bcc_batch_size) == true (line 1674)
    // if ($auto_clear) == true (line 1678)

    $actual = $this->cI_Email->send($auto_clear);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend9()
{
    $auto_clear = m::mock('UntypedParameter_auto_clear_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_headers['From'])) == false (line 1653)
    // if ($this->_replyto_flag === \FALSE) == true (line 1659)
    // if (empty($this->_recipients) && !isset($this->_headers['To']) && empty($this->_bcc_array) && !isset($this->_headers['Bcc']) && !isset($this->_headers['Cc'])) == true (line 1664)

    $actual = $this->cI_Email->send($auto_clear);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend10()
{
    $auto_clear = m::mock('UntypedParameter_auto_clear_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_headers['From'])) == true (line 1653)

    $actual = $this->cI_Email->send($auto_clear);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 1710)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 1710)
    // for (...) == true (line 1730)
    // if ($this->protocol !== 'smtp') == false (line 1736)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 1710)
    // for (...) == true (line 1730)
    // if ($this->protocol !== 'smtp') == true (line 1736)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == false (line 1712)
    // if ($i === $float) == false (line 1717)
    // if ($i === $c - 1) == false (line 1724)
    // for (...) == false (line 1710)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == false (line 1712)
    // if ($i === $float) == false (line 1717)
    // if ($i === $c - 1) == false (line 1724)
    // for (...) == false (line 1710)
    // for (...) == true (line 1730)
    // if ($this->protocol !== 'smtp') == false (line 1736)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == false (line 1712)
    // if ($i === $float) == false (line 1717)
    // if ($i === $c - 1) == false (line 1724)
    // for (...) == false (line 1710)
    // for (...) == true (line 1730)
    // if ($this->protocol !== 'smtp') == true (line 1736)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == false (line 1712)
    // if ($i === $float) == false (line 1717)
    // if ($i === $c - 1) == true (line 1724)
    // for (...) == false (line 1710)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == false (line 1712)
    // if ($i === $float) == false (line 1717)
    // if ($i === $c - 1) == true (line 1724)
    // for (...) == false (line 1710)
    // for (...) == true (line 1730)
    // if ($this->protocol !== 'smtp') == false (line 1736)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == false (line 1712)
    // if ($i === $float) == false (line 1717)
    // if ($i === $c - 1) == true (line 1724)
    // for (...) == false (line 1710)
    // for (...) == true (line 1730)
    // if ($this->protocol !== 'smtp') == true (line 1736)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == false (line 1712)
    // if ($i === $float) == true (line 1717)
    // if ($i === $c - 1) == false (line 1724)
    // for (...) == false (line 1710)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == false (line 1712)
    // if ($i === $float) == true (line 1717)
    // if ($i === $c - 1) == false (line 1724)
    // for (...) == false (line 1710)
    // for (...) == true (line 1730)
    // if ($this->protocol !== 'smtp') == false (line 1736)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == false (line 1712)
    // if ($i === $float) == true (line 1717)
    // if ($i === $c - 1) == false (line 1724)
    // for (...) == false (line 1710)
    // for (...) == true (line 1730)
    // if ($this->protocol !== 'smtp') == true (line 1736)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == false (line 1712)
    // if ($i === $float) == true (line 1717)
    // if ($i === $c - 1) == true (line 1724)
    // for (...) == false (line 1710)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == false (line 1712)
    // if ($i === $float) == true (line 1717)
    // if ($i === $c - 1) == true (line 1724)
    // for (...) == false (line 1710)
    // for (...) == true (line 1730)
    // if ($this->protocol !== 'smtp') == false (line 1736)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == false (line 1712)
    // if ($i === $float) == true (line 1717)
    // if ($i === $c - 1) == true (line 1724)
    // for (...) == false (line 1710)
    // for (...) == true (line 1730)
    // if ($this->protocol !== 'smtp') == true (line 1736)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == true (line 1712)
    // if ($i === $float) == false (line 1717)
    // if ($i === $c - 1) == false (line 1724)
    // for (...) == false (line 1710)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == true (line 1712)
    // if ($i === $float) == false (line 1717)
    // if ($i === $c - 1) == false (line 1724)
    // for (...) == false (line 1710)
    // for (...) == true (line 1730)
    // if ($this->protocol !== 'smtp') == false (line 1736)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == true (line 1712)
    // if ($i === $float) == false (line 1717)
    // if ($i === $c - 1) == false (line 1724)
    // for (...) == false (line 1710)
    // for (...) == true (line 1730)
    // if ($this->protocol !== 'smtp') == true (line 1736)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == true (line 1712)
    // if ($i === $float) == false (line 1717)
    // if ($i === $c - 1) == true (line 1724)
    // for (...) == false (line 1710)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == true (line 1712)
    // if ($i === $float) == false (line 1717)
    // if ($i === $c - 1) == true (line 1724)
    // for (...) == false (line 1710)
    // for (...) == true (line 1730)
    // if ($this->protocol !== 'smtp') == false (line 1736)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == true (line 1712)
    // if ($i === $float) == false (line 1717)
    // if ($i === $c - 1) == true (line 1724)
    // for (...) == false (line 1710)
    // for (...) == true (line 1730)
    // if ($this->protocol !== 'smtp') == true (line 1736)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == true (line 1712)
    // if ($i === $float) == true (line 1717)
    // if ($i === $c - 1) == false (line 1724)
    // for (...) == false (line 1710)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == true (line 1712)
    // if ($i === $float) == true (line 1717)
    // if ($i === $c - 1) == false (line 1724)
    // for (...) == false (line 1710)
    // for (...) == true (line 1730)
    // if ($this->protocol !== 'smtp') == false (line 1736)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == true (line 1712)
    // if ($i === $float) == true (line 1717)
    // if ($i === $c - 1) == false (line 1724)
    // for (...) == false (line 1710)
    // for (...) == true (line 1730)
    // if ($this->protocol !== 'smtp') == true (line 1736)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == true (line 1712)
    // if ($i === $float) == true (line 1717)
    // if ($i === $c - 1) == true (line 1724)
    // for (...) == false (line 1710)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == true (line 1712)
    // if ($i === $float) == true (line 1717)
    // if ($i === $c - 1) == true (line 1724)
    // for (...) == false (line 1710)
    // for (...) == true (line 1730)
    // if ($this->protocol !== 'smtp') == false (line 1736)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch_bcc_send26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 1710)
    // if (isset($this->_bcc_array[$i])) == true (line 1712)
    // if ($i === $float) == true (line 1717)
    // if ($i === $c - 1) == true (line 1724)
    // for (...) == false (line 1710)
    // for (...) == true (line 1730)
    // if ($this->protocol !== 'smtp') == true (line 1736)
    // for (...) == false (line 1730)

    $actual = $this->cI_Email->batch_bcc_send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrint_debugger0()
{
    $include = m::mock('UntypedParameter_include_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Email->print_debugger($include);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Email->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
