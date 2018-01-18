<?php

namespace tests;

use Mockery as m;
use POP3;

class POP3Test extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_server = null;
/**
* @var mixed
*/
protected $_timeout = null;
/**
* @var \POP3
*/
protected $pOP3;

public function setUp()
{
    parent::setUp();

    $this->_server = null;
    $this->_timeout = null;
    $this->pOP3 = new \POP3($this->_server, $this->_timeout);
}

public function testPOP30()
{
    $server = m::mock('UntypedParameter_server_');
    $timeout = m::mock('UntypedParameter_timeout_');

    // TODO: Your mock expectations here

    $actual = $this->pOP3->POP3($server, $timeout);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_timer0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\ini_get('safe_mode')) == false (line 76)

    $actual = $this->pOP3->update_timer();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_timer1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\ini_get('safe_mode')) == true (line 76)

    $actual = $this->pOP3->update_timer();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect0()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == false (line 87)
    // if (!empty($this->MAILSERVER)) == false (line 88)
    // if (empty($server)) == false (line 91)
    // if (!$fp) == false (line 99)
    // if ($this->DEBUG) == false (line 109)
    // if (!$this->is_ok($reply)) == false (line 111)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect1()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == false (line 87)
    // if (!empty($this->MAILSERVER)) == false (line 88)
    // if (empty($server)) == false (line 91)
    // if (!$fp) == false (line 99)
    // if ($this->DEBUG) == false (line 109)
    // if (!$this->is_ok($reply)) == true (line 111)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect2()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == false (line 87)
    // if (!empty($this->MAILSERVER)) == false (line 88)
    // if (empty($server)) == false (line 91)
    // if (!$fp) == false (line 99)
    // if ($this->DEBUG) == true (line 109)
    // if (!$this->is_ok($reply)) == false (line 111)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect3()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == false (line 87)
    // if (!empty($this->MAILSERVER)) == false (line 88)
    // if (empty($server)) == false (line 91)
    // if (!$fp) == false (line 99)
    // if ($this->DEBUG) == true (line 109)
    // if (!$this->is_ok($reply)) == true (line 111)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect4()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == false (line 87)
    // if (!empty($this->MAILSERVER)) == false (line 88)
    // if (empty($server)) == false (line 91)
    // if (!$fp) == true (line 99)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect5()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == false (line 87)
    // if (!empty($this->MAILSERVER)) == false (line 88)
    // if (empty($server)) == true (line 91)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect6()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == false (line 87)
    // if (!empty($this->MAILSERVER)) == true (line 88)
    // if (empty($server)) == false (line 91)
    // if (!$fp) == false (line 99)
    // if ($this->DEBUG) == false (line 109)
    // if (!$this->is_ok($reply)) == false (line 111)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect7()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == false (line 87)
    // if (!empty($this->MAILSERVER)) == true (line 88)
    // if (empty($server)) == false (line 91)
    // if (!$fp) == false (line 99)
    // if ($this->DEBUG) == false (line 109)
    // if (!$this->is_ok($reply)) == true (line 111)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect8()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == false (line 87)
    // if (!empty($this->MAILSERVER)) == true (line 88)
    // if (empty($server)) == false (line 91)
    // if (!$fp) == false (line 99)
    // if ($this->DEBUG) == true (line 109)
    // if (!$this->is_ok($reply)) == false (line 111)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect9()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == false (line 87)
    // if (!empty($this->MAILSERVER)) == true (line 88)
    // if (empty($server)) == false (line 91)
    // if (!$fp) == false (line 99)
    // if ($this->DEBUG) == true (line 109)
    // if (!$this->is_ok($reply)) == true (line 111)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect10()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == false (line 87)
    // if (!empty($this->MAILSERVER)) == true (line 88)
    // if (empty($server)) == false (line 91)
    // if (!$fp) == true (line 99)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect11()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == false (line 87)
    // if (!empty($this->MAILSERVER)) == true (line 88)
    // if (empty($server)) == true (line 91)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect12()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == true (line 87)
    // if (!empty($this->MAILSERVER)) == false (line 88)
    // if (empty($server)) == false (line 91)
    // if (!$fp) == false (line 99)
    // if ($this->DEBUG) == false (line 109)
    // if (!$this->is_ok($reply)) == false (line 111)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect13()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == true (line 87)
    // if (!empty($this->MAILSERVER)) == false (line 88)
    // if (empty($server)) == false (line 91)
    // if (!$fp) == false (line 99)
    // if ($this->DEBUG) == false (line 109)
    // if (!$this->is_ok($reply)) == true (line 111)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect14()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == true (line 87)
    // if (!empty($this->MAILSERVER)) == false (line 88)
    // if (empty($server)) == false (line 91)
    // if (!$fp) == false (line 99)
    // if ($this->DEBUG) == true (line 109)
    // if (!$this->is_ok($reply)) == false (line 111)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect15()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == true (line 87)
    // if (!empty($this->MAILSERVER)) == false (line 88)
    // if (empty($server)) == false (line 91)
    // if (!$fp) == false (line 99)
    // if ($this->DEBUG) == true (line 109)
    // if (!$this->is_ok($reply)) == true (line 111)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect16()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == true (line 87)
    // if (!empty($this->MAILSERVER)) == false (line 88)
    // if (empty($server)) == false (line 91)
    // if (!$fp) == true (line 99)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect17()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == true (line 87)
    // if (!empty($this->MAILSERVER)) == false (line 88)
    // if (empty($server)) == true (line 91)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect18()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == true (line 87)
    // if (!empty($this->MAILSERVER)) == true (line 88)
    // if (empty($server)) == false (line 91)
    // if (!$fp) == false (line 99)
    // if ($this->DEBUG) == false (line 109)
    // if (!$this->is_ok($reply)) == false (line 111)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect19()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == true (line 87)
    // if (!empty($this->MAILSERVER)) == true (line 88)
    // if (empty($server)) == false (line 91)
    // if (!$fp) == false (line 99)
    // if ($this->DEBUG) == false (line 109)
    // if (!$this->is_ok($reply)) == true (line 111)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect20()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == true (line 87)
    // if (!empty($this->MAILSERVER)) == true (line 88)
    // if (empty($server)) == false (line 91)
    // if (!$fp) == false (line 99)
    // if ($this->DEBUG) == true (line 109)
    // if (!$this->is_ok($reply)) == false (line 111)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect21()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == true (line 87)
    // if (!empty($this->MAILSERVER)) == true (line 88)
    // if (empty($server)) == false (line 91)
    // if (!$fp) == false (line 99)
    // if ($this->DEBUG) == true (line 109)
    // if (!$this->is_ok($reply)) == true (line 111)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect22()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == true (line 87)
    // if (!empty($this->MAILSERVER)) == true (line 88)
    // if (empty($server)) == false (line 91)
    // if (!$fp) == true (line 99)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect23()
{
    $server = m::mock('UntypedParameter_server_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($port) || !$port) == true (line 87)
    // if (!empty($this->MAILSERVER)) == true (line 88)
    // if (empty($server)) == true (line 91)

    $actual = $this->pOP3->connect($server, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUser0()
{
    $user = m::mock('UntypedParameter_user_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($user)) == false (line 124)
    // if (!isset($this->FP)) == false (line 127)
    // if (!$this->is_ok($reply)) == false (line 132)

    $actual = $this->pOP3->user($user);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUser1()
{
    $user = m::mock('UntypedParameter_user_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($user)) == false (line 124)
    // if (!isset($this->FP)) == false (line 127)
    // if (!$this->is_ok($reply)) == true (line 132)

    $actual = $this->pOP3->user($user);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUser2()
{
    $user = m::mock('UntypedParameter_user_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($user)) == false (line 124)
    // if (!isset($this->FP)) == true (line 127)

    $actual = $this->pOP3->user($user);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUser3()
{
    $user = m::mock('UntypedParameter_user_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($user)) == true (line 124)

    $actual = $this->pOP3->user($user);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPass0()
{
    $pass = m::mock('UntypedParameter_pass_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($pass)) == false (line 144)
    // if (!isset($this->FP)) == false (line 147)
    // if (!$this->is_ok($reply)) == false (line 152)

    $actual = $this->pOP3->pass($pass);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPass1()
{
    $pass = m::mock('UntypedParameter_pass_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($pass)) == false (line 144)
    // if (!isset($this->FP)) == false (line 147)
    // if (!$this->is_ok($reply)) == true (line 152)

    $actual = $this->pOP3->pass($pass);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPass2()
{
    $pass = m::mock('UntypedParameter_pass_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($pass)) == false (line 144)
    // if (!isset($this->FP)) == true (line 147)

    $actual = $this->pOP3->pass($pass);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPass3()
{
    $pass = m::mock('UntypedParameter_pass_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($pass)) == true (line 144)

    $actual = $this->pOP3->pass($pass);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApop0()
{
    $login = m::mock('UntypedParameter_login_');
    $pass = m::mock('UntypedParameter_pass_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 171)
    // if (!$this->ALLOWAPOP) == false (line 174)
    // if (empty($login)) == false (line 177)
    // if (empty($pass)) == false (line 180)
    // if (!$banner or empty($banner)) == false (line 185)
    // if (!$this->is_ok($reply)) == false (line 195)

    $actual = $this->pOP3->apop($login, $pass);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApop1()
{
    $login = m::mock('UntypedParameter_login_');
    $pass = m::mock('UntypedParameter_pass_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 171)
    // if (!$this->ALLOWAPOP) == false (line 174)
    // if (empty($login)) == false (line 177)
    // if (empty($pass)) == false (line 180)
    // if (!$banner or empty($banner)) == false (line 185)
    // if (!$this->is_ok($reply)) == true (line 195)

    $actual = $this->pOP3->apop($login, $pass);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApop2()
{
    $login = m::mock('UntypedParameter_login_');
    $pass = m::mock('UntypedParameter_pass_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 171)
    // if (!$this->ALLOWAPOP) == false (line 174)
    // if (empty($login)) == false (line 177)
    // if (empty($pass)) == false (line 180)
    // if (!$banner or empty($banner)) == true (line 185)

    $actual = $this->pOP3->apop($login, $pass);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApop3()
{
    $login = m::mock('UntypedParameter_login_');
    $pass = m::mock('UntypedParameter_pass_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 171)
    // if (!$this->ALLOWAPOP) == false (line 174)
    // if (empty($login)) == false (line 177)
    // if (empty($pass)) == true (line 180)

    $actual = $this->pOP3->apop($login, $pass);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApop4()
{
    $login = m::mock('UntypedParameter_login_');
    $pass = m::mock('UntypedParameter_pass_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 171)
    // if (!$this->ALLOWAPOP) == false (line 174)
    // if (empty($login)) == true (line 177)

    $actual = $this->pOP3->apop($login, $pass);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApop5()
{
    $login = m::mock('UntypedParameter_login_');
    $pass = m::mock('UntypedParameter_pass_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 171)
    // if (!$this->ALLOWAPOP) == true (line 174)

    $actual = $this->pOP3->apop($login, $pass);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApop6()
{
    $login = m::mock('UntypedParameter_login_');
    $pass = m::mock('UntypedParameter_pass_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == true (line 171)

    $actual = $this->pOP3->apop($login, $pass);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLogin0()
{
    $login = m::mock('UntypedParameter_login_');
    $pass = m::mock('UntypedParameter_pass_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 214)
    // if (!$this->user($login)) == false (line 219)
    // if (!$count || $count == -1) == false (line 224)

    $actual = $this->pOP3->login($login, $pass);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLogin1()
{
    $login = m::mock('UntypedParameter_login_');
    $pass = m::mock('UntypedParameter_pass_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 214)
    // if (!$this->user($login)) == false (line 219)
    // if (!$count || $count == -1) == true (line 224)

    $actual = $this->pOP3->login($login, $pass);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLogin2()
{
    $login = m::mock('UntypedParameter_login_');
    $pass = m::mock('UntypedParameter_pass_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 214)
    // if (!$this->user($login)) == true (line 219)

    $actual = $this->pOP3->login($login, $pass);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLogin3()
{
    $login = m::mock('UntypedParameter_login_');
    $pass = m::mock('UntypedParameter_pass_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == true (line 214)

    $actual = $this->pOP3->login($login, $pass);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTop0()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');
    $numLines = m::mock('UntypedParameter_numLines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 239)
    // if ($this->DEBUG) == false (line 251)
    // if (!$this->is_ok($reply)) == false (line 254)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == false (line 264)

    $actual = $this->pOP3->top($msgNum, $numLines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTop1()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');
    $numLines = m::mock('UntypedParameter_numLines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 239)
    // if ($this->DEBUG) == false (line 251)
    // if (!$this->is_ok($reply)) == false (line 254)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == true (line 264)
    // if (empty($line)) == false (line 269)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == false (line 264)

    $actual = $this->pOP3->top($msgNum, $numLines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTop2()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');
    $numLines = m::mock('UntypedParameter_numLines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 239)
    // if ($this->DEBUG) == false (line 251)
    // if (!$this->is_ok($reply)) == false (line 254)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == true (line 264)
    // if (empty($line)) == true (line 269)

    $actual = $this->pOP3->top($msgNum, $numLines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTop3()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');
    $numLines = m::mock('UntypedParameter_numLines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 239)
    // if ($this->DEBUG) == false (line 251)
    // if (!$this->is_ok($reply)) == true (line 254)

    $actual = $this->pOP3->top($msgNum, $numLines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTop4()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');
    $numLines = m::mock('UntypedParameter_numLines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 239)
    // if ($this->DEBUG) == true (line 251)
    // if (!$this->is_ok($reply)) == false (line 254)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == false (line 264)

    $actual = $this->pOP3->top($msgNum, $numLines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTop5()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');
    $numLines = m::mock('UntypedParameter_numLines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 239)
    // if ($this->DEBUG) == true (line 251)
    // if (!$this->is_ok($reply)) == false (line 254)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == true (line 264)
    // if (empty($line)) == false (line 269)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == false (line 264)

    $actual = $this->pOP3->top($msgNum, $numLines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTop6()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');
    $numLines = m::mock('UntypedParameter_numLines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 239)
    // if ($this->DEBUG) == true (line 251)
    // if (!$this->is_ok($reply)) == false (line 254)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == true (line 264)
    // if (empty($line)) == true (line 269)

    $actual = $this->pOP3->top($msgNum, $numLines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTop7()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');
    $numLines = m::mock('UntypedParameter_numLines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 239)
    // if ($this->DEBUG) == true (line 251)
    // if (!$this->is_ok($reply)) == true (line 254)

    $actual = $this->pOP3->top($msgNum, $numLines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTop8()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');
    $numLines = m::mock('UntypedParameter_numLines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == true (line 239)

    $actual = $this->pOP3->top($msgNum, $numLines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop_list0()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 280)
    // if (!$Total or $Total == -1) == false (line 287)
    // if ($Total == 0) == false (line 291)
    // if (!empty($msgNum)) == false (line 299)
    // if (!$this->is_ok($reply)) == false (line 318)
    // for (...) == false (line 326)

    $actual = $this->pOP3->pop_list($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop_list1()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 280)
    // if (!$Total or $Total == -1) == false (line 287)
    // if ($Total == 0) == false (line 291)
    // if (!empty($msgNum)) == false (line 299)
    // if (!$this->is_ok($reply)) == false (line 318)
    // for (...) == true (line 326)
    // if ($msgC > $Total) == false (line 328)
    // if (\strpos($line, '.') === 0) == false (line 331)
    // if ($thisMsg != $msgC) == false (line 338)
    // for (...) == false (line 326)

    $actual = $this->pOP3->pop_list($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop_list2()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 280)
    // if (!$Total or $Total == -1) == false (line 287)
    // if ($Total == 0) == false (line 291)
    // if (!empty($msgNum)) == false (line 299)
    // if (!$this->is_ok($reply)) == false (line 318)
    // for (...) == true (line 326)
    // if ($msgC > $Total) == false (line 328)
    // if (\strpos($line, '.') === 0) == false (line 331)
    // if ($thisMsg != $msgC) == true (line 338)
    // for (...) == false (line 326)

    $actual = $this->pOP3->pop_list($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop_list3()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 280)
    // if (!$Total or $Total == -1) == false (line 287)
    // if ($Total == 0) == false (line 291)
    // if (!empty($msgNum)) == false (line 299)
    // if (!$this->is_ok($reply)) == false (line 318)
    // for (...) == true (line 326)
    // if ($msgC > $Total) == false (line 328)
    // if (\strpos($line, '.') === 0) == true (line 331)

    $actual = $this->pOP3->pop_list($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop_list4()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 280)
    // if (!$Total or $Total == -1) == false (line 287)
    // if ($Total == 0) == false (line 291)
    // if (!empty($msgNum)) == false (line 299)
    // if (!$this->is_ok($reply)) == false (line 318)
    // for (...) == true (line 326)
    // if ($msgC > $Total) == true (line 328)

    $actual = $this->pOP3->pop_list($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop_list5()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 280)
    // if (!$Total or $Total == -1) == false (line 287)
    // if ($Total == 0) == false (line 291)
    // if (!empty($msgNum)) == false (line 299)
    // if (!$this->is_ok($reply)) == true (line 318)

    $actual = $this->pOP3->pop_list($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop_list6()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 280)
    // if (!$Total or $Total == -1) == false (line 287)
    // if ($Total == 0) == false (line 291)
    // if (!empty($msgNum)) == true (line 299)
    // if ($this->DEBUG) == false (line 305)
    // if (!$this->is_ok($reply)) == false (line 308)

    $actual = $this->pOP3->pop_list($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop_list7()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 280)
    // if (!$Total or $Total == -1) == false (line 287)
    // if ($Total == 0) == false (line 291)
    // if (!empty($msgNum)) == true (line 299)
    // if ($this->DEBUG) == false (line 305)
    // if (!$this->is_ok($reply)) == true (line 308)

    $actual = $this->pOP3->pop_list($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop_list8()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 280)
    // if (!$Total or $Total == -1) == false (line 287)
    // if ($Total == 0) == false (line 291)
    // if (!empty($msgNum)) == true (line 299)
    // if ($this->DEBUG) == true (line 305)
    // if (!$this->is_ok($reply)) == false (line 308)

    $actual = $this->pOP3->pop_list($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop_list9()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 280)
    // if (!$Total or $Total == -1) == false (line 287)
    // if ($Total == 0) == false (line 291)
    // if (!empty($msgNum)) == true (line 299)
    // if ($this->DEBUG) == true (line 305)
    // if (!$this->is_ok($reply)) == true (line 308)

    $actual = $this->pOP3->pop_list($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop_list10()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 280)
    // if (!$Total or $Total == -1) == false (line 287)
    // if ($Total == 0) == true (line 291)

    $actual = $this->pOP3->pop_list($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop_list11()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 280)
    // if (!$Total or $Total == -1) == true (line 287)

    $actual = $this->pOP3->pop_list($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop_list12()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == true (line 280)

    $actual = $this->pOP3->pop_list($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 354)
    // if (!$this->is_ok($reply)) == false (line 367)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == false (line 377)

    $actual = $this->pOP3->get($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 354)
    // if (!$this->is_ok($reply)) == false (line 367)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == true (line 377)
    // if ($line[0] == '.') == false (line 379)
    // if (empty($line)) == false (line 383)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == false (line 377)

    $actual = $this->pOP3->get($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet2()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 354)
    // if (!$this->is_ok($reply)) == false (line 367)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == true (line 377)
    // if ($line[0] == '.') == false (line 379)
    // if (empty($line)) == true (line 383)

    $actual = $this->pOP3->get($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet3()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 354)
    // if (!$this->is_ok($reply)) == false (line 367)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == true (line 377)
    // if ($line[0] == '.') == true (line 379)
    // if (empty($line)) == false (line 383)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == false (line 377)

    $actual = $this->pOP3->get($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet4()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 354)
    // if (!$this->is_ok($reply)) == false (line 367)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == true (line 377)
    // if ($line[0] == '.') == true (line 379)
    // if (empty($line)) == true (line 383)

    $actual = $this->pOP3->get($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet5()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 354)
    // if (!$this->is_ok($reply)) == true (line 367)

    $actual = $this->pOP3->get($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet6()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == true (line 354)

    $actual = $this->pOP3->get($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLast0()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 394)
    // if (!$this->is_ok($reply)) == false (line 401)
    // if ($type != "count") == false (line 412)

    $actual = $this->pOP3->last($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLast1()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 394)
    // if (!$this->is_ok($reply)) == false (line 401)
    // if ($type != "count") == true (line 412)

    $actual = $this->pOP3->last($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLast2()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 394)
    // if (!$this->is_ok($reply)) == true (line 401)

    $actual = $this->pOP3->last($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLast3()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == true (line 394)

    $actual = $this->pOP3->last($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 424)
    // if (!$this->is_ok($reply)) == false (line 430)

    $actual = $this->pOP3->reset();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 424)
    // if (!$this->is_ok($reply)) == true (line 430)

    $actual = $this->pOP3->reset();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == true (line 424)

    $actual = $this->pOP3->reset();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend_cmd0()
{
    $cmd = m::mock('UntypedParameter_cmd_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 458)
    // if (empty($cmd)) == false (line 464)
    // if ($this->DEBUG) == false (line 476)

    $actual = $this->pOP3->send_cmd($cmd);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend_cmd1()
{
    $cmd = m::mock('UntypedParameter_cmd_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 458)
    // if (empty($cmd)) == false (line 464)
    // if ($this->DEBUG) == true (line 476)

    $actual = $this->pOP3->send_cmd($cmd);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend_cmd2()
{
    $cmd = m::mock('UntypedParameter_cmd_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 458)
    // if (empty($cmd)) == true (line 464)

    $actual = $this->pOP3->send_cmd($cmd);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend_cmd3()
{
    $cmd = m::mock('UntypedParameter_cmd_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == true (line 458)

    $actual = $this->pOP3->send_cmd($cmd);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuit0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 484)
    // if ($this->DEBUG) == false (line 494)

    $actual = $this->pOP3->quit();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuit1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 484)
    // if ($this->DEBUG) == true (line 494)

    $actual = $this->pOP3->quit();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuit2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == true (line 484)

    $actual = $this->pOP3->quit();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPopstat0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($PopArray == -1) == false (line 506)
    // if (!$PopArray or empty($PopArray)) == false (line 508)

    $actual = $this->pOP3->popstat();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPopstat1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($PopArray == -1) == false (line 506)
    // if (!$PopArray or empty($PopArray)) == true (line 508)

    $actual = $this->pOP3->popstat();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPopstat2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($PopArray == -1) == true (line 506)

    $actual = $this->pOP3->popstat();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUidl0()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 522)
    // if (!empty($msgNum)) == false (line 530)
    // if ($Total < 1) == false (line 547)
    // if ($this->DEBUG) == false (line 555)
    // if (!$this->is_ok($reply)) == false (line 556)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == false (line 565)

    $actual = $this->pOP3->uidl($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUidl1()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 522)
    // if (!empty($msgNum)) == false (line 530)
    // if ($Total < 1) == false (line 547)
    // if ($this->DEBUG) == false (line 555)
    // if (!$this->is_ok($reply)) == false (line 556)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == true (line 565)
    // if ($count == $msg) == false (line 568)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == false (line 565)

    $actual = $this->pOP3->uidl($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUidl2()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 522)
    // if (!empty($msgNum)) == false (line 530)
    // if ($Total < 1) == false (line 547)
    // if ($this->DEBUG) == false (line 555)
    // if (!$this->is_ok($reply)) == false (line 556)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == true (line 565)
    // if ($count == $msg) == true (line 568)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == false (line 565)

    $actual = $this->pOP3->uidl($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUidl3()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 522)
    // if (!empty($msgNum)) == false (line 530)
    // if ($Total < 1) == false (line 547)
    // if ($this->DEBUG) == false (line 555)
    // if (!$this->is_ok($reply)) == true (line 556)

    $actual = $this->pOP3->uidl($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUidl4()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 522)
    // if (!empty($msgNum)) == false (line 530)
    // if ($Total < 1) == false (line 547)
    // if ($this->DEBUG) == true (line 555)
    // if (!$this->is_ok($reply)) == false (line 556)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == false (line 565)

    $actual = $this->pOP3->uidl($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUidl5()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 522)
    // if (!empty($msgNum)) == false (line 530)
    // if ($Total < 1) == false (line 547)
    // if ($this->DEBUG) == true (line 555)
    // if (!$this->is_ok($reply)) == false (line 556)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == true (line 565)
    // if ($count == $msg) == false (line 568)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == false (line 565)

    $actual = $this->pOP3->uidl($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUidl6()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 522)
    // if (!empty($msgNum)) == false (line 530)
    // if ($Total < 1) == false (line 547)
    // if ($this->DEBUG) == true (line 555)
    // if (!$this->is_ok($reply)) == false (line 556)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == true (line 565)
    // if ($count == $msg) == true (line 568)
    // while (!\preg_match('/^\\.\\r\\n/', $line)) == false (line 565)

    $actual = $this->pOP3->uidl($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUidl7()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 522)
    // if (!empty($msgNum)) == false (line 530)
    // if ($Total < 1) == false (line 547)
    // if ($this->DEBUG) == true (line 555)
    // if (!$this->is_ok($reply)) == true (line 556)

    $actual = $this->pOP3->uidl($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUidl8()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 522)
    // if (!empty($msgNum)) == false (line 530)
    // if ($Total < 1) == true (line 547)

    $actual = $this->pOP3->uidl($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUidl9()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 522)
    // if (!empty($msgNum)) == true (line 530)
    // if (!$this->is_ok($reply)) == false (line 533)

    $actual = $this->pOP3->uidl($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUidl10()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 522)
    // if (!empty($msgNum)) == true (line 530)
    // if (!$this->is_ok($reply)) == true (line 533)

    $actual = $this->pOP3->uidl($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUidl11()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == true (line 522)

    $actual = $this->pOP3->uidl($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 586)
    // if (empty($msgNum)) == false (line 591)
    // if (!$this->is_ok($reply)) == false (line 597)

    $actual = $this->pOP3->delete($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete1()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 586)
    // if (empty($msgNum)) == false (line 591)
    // if (!$this->is_ok($reply)) == true (line 597)

    $actual = $this->pOP3->delete($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete2()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == false (line 586)
    // if (empty($msgNum)) == true (line 591)

    $actual = $this->pOP3->delete($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete3()
{
    $msgNum = m::mock('UntypedParameter_msgNum_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->FP)) == true (line 586)

    $actual = $this->pOP3->delete($msgNum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_ok0()
{
    $cmd = m::mock('UntypedParameter_cmd_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cmd)) == false (line 612)

    $actual = $this->pOP3->is_ok($cmd);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_ok1()
{
    $cmd = m::mock('UntypedParameter_cmd_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cmd)) == true (line 612)

    $actual = $this->pOP3->is_ok($cmd);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStrip_clf0()
{
    $text = m::mock('UntypedParameter_text_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($text)) == false (line 621)

    $actual = $this->pOP3->strip_clf($text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStrip_clf1()
{
    $text = m::mock('UntypedParameter_text_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($text)) == true (line 621)

    $actual = $this->pOP3->strip_clf($text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_banner0()
{
    $server_text = m::mock('UntypedParameter_server_text_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 633)

    $actual = $this->pOP3->parse_banner($server_text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_banner1()
{
    $server_text = m::mock('UntypedParameter_server_text_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 633)
    // if (!empty($digit)) == false (line 636)
    // for (...) == false (line 633)

    $actual = $this->pOP3->parse_banner($server_text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_banner2()
{
    $server_text = m::mock('UntypedParameter_server_text_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 633)
    // if (!empty($digit)) == true (line 636)
    // if (!$outside && $digit != '<' && $digit != '>') == false (line 637)
    // if ($digit == '<') == false (line 641)
    // if ($digit == '>') == false (line 645)
    // for (...) == false (line 633)

    $actual = $this->pOP3->parse_banner($server_text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_banner3()
{
    $server_text = m::mock('UntypedParameter_server_text_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 633)
    // if (!empty($digit)) == true (line 636)
    // if (!$outside && $digit != '<' && $digit != '>') == false (line 637)
    // if ($digit == '<') == false (line 641)
    // if ($digit == '>') == true (line 645)
    // for (...) == false (line 633)

    $actual = $this->pOP3->parse_banner($server_text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_banner4()
{
    $server_text = m::mock('UntypedParameter_server_text_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 633)
    // if (!empty($digit)) == true (line 636)
    // if (!$outside && $digit != '<' && $digit != '>') == false (line 637)
    // if ($digit == '<') == true (line 641)
    // if ($digit == '>') == false (line 645)
    // for (...) == false (line 633)

    $actual = $this->pOP3->parse_banner($server_text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_banner5()
{
    $server_text = m::mock('UntypedParameter_server_text_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 633)
    // if (!empty($digit)) == true (line 636)
    // if (!$outside && $digit != '<' && $digit != '>') == false (line 637)
    // if ($digit == '<') == true (line 641)
    // if ($digit == '>') == true (line 645)
    // for (...) == false (line 633)

    $actual = $this->pOP3->parse_banner($server_text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_banner6()
{
    $server_text = m::mock('UntypedParameter_server_text_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 633)
    // if (!empty($digit)) == true (line 636)
    // if (!$outside && $digit != '<' && $digit != '>') == true (line 637)
    // if ($digit == '<') == false (line 641)
    // if ($digit == '>') == false (line 645)
    // for (...) == false (line 633)

    $actual = $this->pOP3->parse_banner($server_text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_banner7()
{
    $server_text = m::mock('UntypedParameter_server_text_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 633)
    // if (!empty($digit)) == true (line 636)
    // if (!$outside && $digit != '<' && $digit != '>') == true (line 637)
    // if ($digit == '<') == false (line 641)
    // if ($digit == '>') == true (line 645)
    // for (...) == false (line 633)

    $actual = $this->pOP3->parse_banner($server_text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_banner8()
{
    $server_text = m::mock('UntypedParameter_server_text_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 633)
    // if (!empty($digit)) == true (line 636)
    // if (!$outside && $digit != '<' && $digit != '>') == true (line 637)
    // if ($digit == '<') == true (line 641)
    // if ($digit == '>') == false (line 645)
    // for (...) == false (line 633)

    $actual = $this->pOP3->parse_banner($server_text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_banner9()
{
    $server_text = m::mock('UntypedParameter_server_text_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 633)
    // if (!empty($digit)) == true (line 636)
    // if (!$outside && $digit != '<' && $digit != '>') == true (line 637)
    // if ($digit == '<') == true (line 641)
    // if ($digit == '>') == true (line 645)
    // for (...) == false (line 633)

    $actual = $this->pOP3->parse_banner($server_text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
