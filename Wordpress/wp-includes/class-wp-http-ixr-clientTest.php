<?php

namespace tests;

use Mockery as m;
use WP_HTTP_IXR_Client;

class WP_HTTP_IXR_ClientTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_server = null;
/**
* @var mixed
*/
protected $_path = null;
/**
* @var mixed
*/
protected $_port = null;
/**
* @var mixed
*/
protected $_timeout = null;
/**
* @var \WP_HTTP_IXR_Client
*/
protected $wP_HTTP_IXR_Client;

public function setUp()
{
    parent::setUp();

    $this->_server = null;
    $this->_path = null;
    $this->_port = null;
    $this->_timeout = null;
    $this->wP_HTTP_IXR_Client = new \WP_HTTP_IXR_Client($this->_server, $this->_path, $this->_port, $this->_timeout);
}

public function testQuery0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == false (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == true (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == true (line 108)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == false (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == true (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == true (line 108)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == true (line 97)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == true (line 90)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == false (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == true (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == true (line 108)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == false (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == true (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == true (line 108)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == true (line 97)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == true (line 90)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == false (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == true (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == true (line 108)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == false (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == true (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == true (line 108)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == true (line 97)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == true (line 90)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == false (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == true (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == true (line 108)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery27()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == false (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery28()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == true (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery29()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == true (line 108)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery30()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == true (line 97)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery31()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == true (line 90)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery32()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == false (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery33()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == true (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery34()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == true (line 108)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery35()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == false (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery36()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == true (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery37()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == true (line 108)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery38()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == true (line 97)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery39()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == true (line 90)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery40()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == false (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery41()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == true (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery42()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == true (line 108)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery43()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == false (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery44()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == true (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery45()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == true (line 108)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery46()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == true (line 97)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery47()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == false (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == true (line 90)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery48()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == false (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery49()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == true (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery50()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == true (line 108)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery51()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == false (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery52()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == true (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery53()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == true (line 108)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery54()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == true (line 97)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery55()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == false (line 84)
    // if (\is_wp_error($response)) == true (line 90)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery56()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == false (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery57()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == true (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery58()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == false (line 102)
    // if (!$this->message->parse()) == true (line 108)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery59()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == false (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery60()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == false (line 108)
    // if ($this->message->messageType == 'fault') == true (line 115)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery61()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == false (line 97)
    // if ($this->debug) == true (line 102)
    // if (!$this->message->parse()) == true (line 108)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery62()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == false (line 90)
    // if (200 != \wp_remote_retrieve_response_code($response)) == true (line 97)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery63()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->timeout !== \false) == true (line 79)
    // if ($this->debug) == true (line 84)
    // if (\is_wp_error($response)) == true (line 90)

    $actual = $this->wP_HTTP_IXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
