<?php

namespace tests;

use CI_User_agent;
use Mockery as m;

class CI_User_agentTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_User_agent
*/
protected $cI_User_agent;

public function setUp()
{
    parent::setUp();

    $this->cI_User_agent = new \CI_User_agent();
}

public function testIs_browser0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_browser) == false (line 418)
    // if ($key === \NULL) == false (line 424)

    $actual = $this->cI_User_agent->is_browser($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_browser1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_browser) == false (line 418)
    // if ($key === \NULL) == true (line 424)

    $actual = $this->cI_User_agent->is_browser($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_browser2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_browser) == true (line 418)

    $actual = $this->cI_User_agent->is_browser($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_robot0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_robot) == false (line 443)
    // if ($key === \NULL) == false (line 449)

    $actual = $this->cI_User_agent->is_robot($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_robot1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_robot) == false (line 443)
    // if ($key === \NULL) == true (line 449)

    $actual = $this->cI_User_agent->is_robot($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_robot2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_robot) == true (line 443)

    $actual = $this->cI_User_agent->is_robot($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_mobile0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_mobile) == false (line 468)
    // if ($key === \NULL) == false (line 474)

    $actual = $this->cI_User_agent->is_mobile($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_mobile1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_mobile) == false (line 468)
    // if ($key === \NULL) == true (line 474)

    $actual = $this->cI_User_agent->is_mobile($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_mobile2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_mobile) == true (line 468)

    $actual = $this->cI_User_agent->is_mobile($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_referral0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->referer)) == false (line 492)

    $actual = $this->cI_User_agent->is_referral();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_referral1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->referer)) == true (line 492)
    // if (empty($_SERVER['HTTP_REFERER'])) == false (line 494)

    $actual = $this->cI_User_agent->is_referral();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_referral2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->referer)) == true (line 492)
    // if (empty($_SERVER['HTTP_REFERER'])) == true (line 494)

    $actual = $this->cI_User_agent->is_referral();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAgent_string0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_User_agent->agent_string();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPlatform0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_User_agent->platform();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBrowser0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_User_agent->browser();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_User_agent->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRobot0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_User_agent->robot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMobile0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_User_agent->mobile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReferrer0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_User_agent->referrer();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLanguages0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->languages) === 0) == false (line 602)

    $actual = $this->cI_User_agent->languages();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLanguages1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->languages) === 0) == true (line 602)

    $actual = $this->cI_User_agent->languages();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCharsets0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->charsets) === 0) == false (line 619)

    $actual = $this->cI_User_agent->charsets();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCharsets1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->charsets) === 0) == true (line 619)

    $actual = $this->cI_User_agent->charsets();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_lang0()
{
    $lang = m::mock('UntypedParameter_lang_');

    // TODO: Your mock expectations here

    $actual = $this->cI_User_agent->accept_lang($lang);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_charset0()
{
    $charset = m::mock('UntypedParameter_charset_');

    // TODO: Your mock expectations here

    $actual = $this->cI_User_agent->accept_charset($charset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($string)) == false (line 675)

    $actual = $this->cI_User_agent->parse($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse1()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($string)) == true (line 675)

    $actual = $this->cI_User_agent->parse($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
