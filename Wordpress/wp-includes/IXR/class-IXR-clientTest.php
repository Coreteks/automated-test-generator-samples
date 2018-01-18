<?php

namespace tests;

use IXR_Client;
use Mockery as m;

class IXR_ClientTest extends \PHPUnit_Framework_TestCase
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
* @var \IXR_Client
*/
protected $iXR_Client;

public function setUp()
{
    parent::setUp();

    $this->_server = null;
    $this->_path = null;
    $this->_port = null;
    $this->_timeout = null;
    $this->iXR_Client = new \IXR_Client($this->_server, $this->_path, $this->_port, $this->_timeout);
}

public function testIXR_Client0()
{
    $server = m::mock('UntypedParameter_server_');
    $path = m::mock('UntypedParameter_path_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');

    // TODO: Your mock expectations here

    $actual = $this->iXR_Client->IXR_Client($server, $path, $port, $timeout);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery27()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery28()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery29()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery30()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery31()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery32()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery33()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery34()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery35()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery36()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery37()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery38()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery39()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery40()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery41()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery42()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery43()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery44()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery45()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery46()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery47()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery48()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery49()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery50()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery51()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery52()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery53()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery54()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery55()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery56()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery57()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery58()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery59()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery60()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery61()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery62()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery63()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery64()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery65()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery66()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery67()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery68()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery69()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery70()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery71()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery72()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery73()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery74()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery75()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery76()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery77()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery78()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery79()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery80()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery81()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery82()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery83()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery84()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery85()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery86()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery87()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery88()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery89()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery90()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery91()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery92()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery93()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery94()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery95()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery96()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery97()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery98()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery99()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery100()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery101()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery102()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == true (line 107)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery103()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == true (line 94)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery104()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery105()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery106()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery107()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery108()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery109()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery110()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery111()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery112()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery113()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery114()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery115()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery116()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery117()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery118()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery119()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery120()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery121()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery122()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery123()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery124()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery125()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery126()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery127()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery128()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery129()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery130()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery131()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery132()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery133()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery134()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery135()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery136()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery137()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery138()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery139()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery140()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery141()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery142()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery143()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery144()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery145()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery146()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery147()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery148()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery149()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery150()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery151()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery152()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery153()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery154()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery155()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery156()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery157()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery158()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery159()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery160()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery161()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery162()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery163()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery164()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery165()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery166()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery167()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery168()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery169()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery170()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery171()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery172()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery173()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery174()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery175()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery176()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery177()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery178()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery179()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery180()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery181()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery182()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery183()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery184()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery185()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery186()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery187()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery188()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery189()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery190()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery191()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery192()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery193()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery194()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery195()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery196()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery197()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery198()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery199()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery200()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery201()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery202()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery203()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery204()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery205()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery206()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == true (line 107)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery207()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == true (line 94)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery208()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery209()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery210()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery211()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery212()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery213()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery214()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery215()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery216()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery217()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery218()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery219()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery220()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery221()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery222()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery223()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery224()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery225()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery226()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery227()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery228()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery229()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery230()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery231()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery232()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery233()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery234()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery235()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery236()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery237()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery238()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery239()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery240()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery241()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery242()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery243()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery244()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery245()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery246()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery247()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery248()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery249()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery250()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery251()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery252()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery253()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery254()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery255()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery256()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery257()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery258()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery259()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery260()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery261()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery262()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery263()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery264()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery265()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery266()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery267()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery268()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery269()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery270()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery271()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery272()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery273()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery274()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery275()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery276()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery277()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery278()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery279()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery280()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery281()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery282()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery283()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery284()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery285()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery286()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery287()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery288()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery289()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery290()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery291()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery292()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery293()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery294()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery295()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery296()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery297()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery298()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery299()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery300()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery301()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery302()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery303()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery304()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery305()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery306()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery307()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery308()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery309()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery310()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == true (line 107)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery311()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == true (line 94)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery312()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery313()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery314()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery315()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery316()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery317()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery318()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery319()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery320()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery321()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery322()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery323()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery324()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery325()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery326()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery327()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery328()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery329()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery330()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery331()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery332()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery333()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery334()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery335()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery336()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery337()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery338()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery339()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery340()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery341()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery342()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery343()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery344()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery345()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery346()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery347()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery348()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery349()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery350()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery351()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery352()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery353()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery354()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery355()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery356()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery357()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery358()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery359()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery360()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery361()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery362()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery363()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery364()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery365()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery366()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery367()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery368()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery369()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery370()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery371()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery372()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery373()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery374()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery375()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery376()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery377()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery378()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery379()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery380()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery381()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery382()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery383()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery384()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery385()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery386()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery387()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery388()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery389()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery390()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery391()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery392()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery393()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery394()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery395()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery396()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery397()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery398()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery399()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery400()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery401()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery402()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery403()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery404()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery405()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery406()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery407()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery408()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery409()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery410()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery411()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery412()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery413()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery414()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == true (line 107)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery415()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == true (line 94)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery416()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery417()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery418()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery419()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery420()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery421()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery422()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery423()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery424()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery425()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery426()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery427()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery428()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery429()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery430()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery431()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery432()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery433()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery434()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery435()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery436()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery437()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery438()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery439()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery440()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery441()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery442()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery443()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery444()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery445()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery446()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery447()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery448()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery449()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery450()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery451()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery452()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery453()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery454()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery455()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery456()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery457()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery458()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery459()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery460()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery461()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery462()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery463()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery464()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery465()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery466()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery467()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery468()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery469()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery470()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery471()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery472()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery473()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery474()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery475()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery476()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery477()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery478()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery479()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery480()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery481()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery482()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery483()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery484()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery485()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery486()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery487()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery488()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery489()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery490()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery491()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery492()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery493()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery494()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery495()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery496()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery497()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery498()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery499()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery500()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery501()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery502()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery503()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery504()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery505()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery506()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery507()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery508()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery509()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery510()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery511()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery512()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery513()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery514()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery515()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery516()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery517()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery518()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == true (line 107)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery519()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == true (line 94)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery520()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery521()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery522()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery523()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery524()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery525()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery526()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery527()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery528()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery529()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery530()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery531()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery532()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery533()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery534()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery535()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery536()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery537()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery538()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery539()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery540()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery541()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery542()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery543()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery544()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery545()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery546()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery547()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery548()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery549()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery550()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery551()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery552()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery553()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery554()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery555()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery556()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery557()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery558()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery559()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery560()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery561()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery562()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery563()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery564()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery565()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery566()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery567()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery568()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery569()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery570()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery571()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery572()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery573()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery574()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery575()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery576()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery577()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery578()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery579()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery580()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery581()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery582()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery583()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery584()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery585()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery586()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery587()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery588()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery589()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery590()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery591()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery592()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery593()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery594()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery595()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery596()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery597()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery598()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery599()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery600()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery601()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery602()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery603()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery604()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery605()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery606()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery607()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery608()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery609()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery610()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery611()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery612()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery613()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery614()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery615()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery616()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery617()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery618()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery619()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery620()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery621()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery622()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == true (line 107)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery623()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == true (line 94)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery624()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery625()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery626()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery627()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery628()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery629()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery630()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery631()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery632()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery633()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery634()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery635()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery636()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery637()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery638()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery639()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery640()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery641()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery642()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery643()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery644()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery645()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery646()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery647()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery648()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery649()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery650()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery651()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery652()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery653()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery654()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery655()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery656()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery657()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery658()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery659()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery660()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery661()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery662()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery663()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery664()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery665()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery666()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery667()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery668()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery669()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery670()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery671()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery672()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery673()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery674()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery675()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery676()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery677()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery678()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery679()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery680()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery681()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery682()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery683()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery684()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery685()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery686()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery687()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery688()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery689()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery690()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery691()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery692()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery693()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery694()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery695()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery696()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery697()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery698()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery699()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery700()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery701()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery702()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery703()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery704()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery705()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery706()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery707()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery708()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery709()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery710()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery711()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery712()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery713()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery714()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery715()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery716()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery717()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery718()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery719()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery720()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery721()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery722()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery723()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery724()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery725()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery726()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == true (line 107)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery727()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == false (line 89)
    // if (!$fp) == true (line 94)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery728()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery729()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery730()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery731()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery732()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery733()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery734()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery735()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery736()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery737()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery738()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery739()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery740()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery741()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery742()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery743()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery744()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery745()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery746()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery747()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery748()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery749()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery750()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery751()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery752()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery753()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery754()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery755()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery756()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery757()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery758()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery759()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery760()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery761()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery762()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery763()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery764()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery765()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery766()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery767()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery768()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery769()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery770()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery771()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery772()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery773()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery774()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery775()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery776()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery777()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery778()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery779()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery780()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery781()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == false (line 105)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery782()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery783()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery784()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery785()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery786()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery787()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery788()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery789()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery790()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery791()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery792()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery793()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery794()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery795()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery796()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery797()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery798()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery799()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery800()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery801()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery802()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery803()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery804()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery805()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == false (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery806()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery807()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery808()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery809()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery810()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery811()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery812()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery813()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery814()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery815()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery816()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery817()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == false (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery818()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery819()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery820()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery821()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery822()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery823()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == false (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery824()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery825()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery826()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == false (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery827()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == false (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery828()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == false (line 130)
    // if ($this->message->messageType == 'fault') == true (line 137)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery829()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == false (line 107)
    // if (\trim($line) == '') == true (line 113)
    // if (!$gettingHeaders) == true (line 116)
    // if ($this->debug) == true (line 120)
    // while (!\feof($fp)) == false (line 103)
    // if ($this->debug) == true (line 124)
    // if (!$this->message->parse()) == true (line 130)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery830()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == false (line 94)
    // while (!\feof($fp)) == true (line 103)
    // if (!$gotFirstLine) == true (line 105)
    // if (\strstr($line, '200') === \false) == true (line 107)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery831()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 85)
    // if ($this->timeout) == true (line 89)
    // if (!$fp) == true (line 94)

    $actual = $this->iXR_Client->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResponse0()
{
    // TODO: Your mock expectations here

    $actual = $this->iXR_Client->getResponse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsError0()
{
    // TODO: Your mock expectations here

    $actual = $this->iXR_Client->isError();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetErrorCode0()
{
    // TODO: Your mock expectations here

    $actual = $this->iXR_Client->getErrorCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetErrorMessage0()
{
    // TODO: Your mock expectations here

    $actual = $this->iXR_Client->getErrorMessage();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
