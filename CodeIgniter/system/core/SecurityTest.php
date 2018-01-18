<?php

namespace tests;

use CI_Security;
use Mockery as m;

class CI_SecurityTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_charset = null;
/**
* @var \CI_Security
*/
protected $cI_Security;

public function setUp()
{
    parent::setUp();

    $this->_charset = null;
    $this->cI_Security = new \CI_Security($this->_charset);
}

public function testCsrf_verify0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') == false (line 210)
    // if ($exclude_uris = \config_item('csrf_exclude_uris')) == false (line 216)
    // if (\config_item('csrf_regenerate')) == false (line 236)
    // if ($valid !== \TRUE) == false (line 246)

    $actual = $this->cI_Security->csrf_verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCsrf_verify1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') == false (line 210)
    // if ($exclude_uris = \config_item('csrf_exclude_uris')) == false (line 216)
    // if (\config_item('csrf_regenerate')) == false (line 236)
    // if ($valid !== \TRUE) == true (line 246)

    $actual = $this->cI_Security->csrf_verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCsrf_verify2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') == false (line 210)
    // if ($exclude_uris = \config_item('csrf_exclude_uris')) == false (line 216)
    // if (\config_item('csrf_regenerate')) == true (line 236)
    // if ($valid !== \TRUE) == false (line 246)

    $actual = $this->cI_Security->csrf_verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCsrf_verify3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') == false (line 210)
    // if ($exclude_uris = \config_item('csrf_exclude_uris')) == false (line 216)
    // if (\config_item('csrf_regenerate')) == true (line 236)
    // if ($valid !== \TRUE) == true (line 246)

    $actual = $this->cI_Security->csrf_verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCsrf_verify4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') == false (line 210)
    // if ($exclude_uris = \config_item('csrf_exclude_uris')) == true (line 216)
    // if (\config_item('csrf_regenerate')) == false (line 236)
    // if ($valid !== \TRUE) == false (line 246)

    $actual = $this->cI_Security->csrf_verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCsrf_verify5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') == false (line 210)
    // if ($exclude_uris = \config_item('csrf_exclude_uris')) == true (line 216)
    // if (\config_item('csrf_regenerate')) == false (line 236)
    // if ($valid !== \TRUE) == true (line 246)

    $actual = $this->cI_Security->csrf_verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCsrf_verify6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') == false (line 210)
    // if ($exclude_uris = \config_item('csrf_exclude_uris')) == true (line 216)
    // if (\config_item('csrf_regenerate')) == true (line 236)
    // if ($valid !== \TRUE) == false (line 246)

    $actual = $this->cI_Security->csrf_verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCsrf_verify7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') == false (line 210)
    // if ($exclude_uris = \config_item('csrf_exclude_uris')) == true (line 216)
    // if (\config_item('csrf_regenerate')) == true (line 236)
    // if ($valid !== \TRUE) == true (line 246)

    $actual = $this->cI_Security->csrf_verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCsrf_verify8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') == false (line 210)
    // if ($exclude_uris = \config_item('csrf_exclude_uris')) == true (line 216)
    // if (\preg_match('#^' . $excluded . '$#i' . (\UTF8_ENABLED ? 'u' : ''), $uri->uri_string())) == false (line 221)
    // if (\config_item('csrf_regenerate')) == false (line 236)
    // if ($valid !== \TRUE) == false (line 246)

    $actual = $this->cI_Security->csrf_verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCsrf_verify9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') == false (line 210)
    // if ($exclude_uris = \config_item('csrf_exclude_uris')) == true (line 216)
    // if (\preg_match('#^' . $excluded . '$#i' . (\UTF8_ENABLED ? 'u' : ''), $uri->uri_string())) == false (line 221)
    // if (\config_item('csrf_regenerate')) == false (line 236)
    // if ($valid !== \TRUE) == true (line 246)

    $actual = $this->cI_Security->csrf_verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCsrf_verify10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') == false (line 210)
    // if ($exclude_uris = \config_item('csrf_exclude_uris')) == true (line 216)
    // if (\preg_match('#^' . $excluded . '$#i' . (\UTF8_ENABLED ? 'u' : ''), $uri->uri_string())) == false (line 221)
    // if (\config_item('csrf_regenerate')) == true (line 236)
    // if ($valid !== \TRUE) == false (line 246)

    $actual = $this->cI_Security->csrf_verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCsrf_verify11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') == false (line 210)
    // if ($exclude_uris = \config_item('csrf_exclude_uris')) == true (line 216)
    // if (\preg_match('#^' . $excluded . '$#i' . (\UTF8_ENABLED ? 'u' : ''), $uri->uri_string())) == false (line 221)
    // if (\config_item('csrf_regenerate')) == true (line 236)
    // if ($valid !== \TRUE) == true (line 246)

    $actual = $this->cI_Security->csrf_verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCsrf_verify12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') == false (line 210)
    // if ($exclude_uris = \config_item('csrf_exclude_uris')) == true (line 216)
    // if (\preg_match('#^' . $excluded . '$#i' . (\UTF8_ENABLED ? 'u' : ''), $uri->uri_string())) == true (line 221)

    $actual = $this->cI_Security->csrf_verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCsrf_verify13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') == true (line 210)

    $actual = $this->cI_Security->csrf_verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCsrf_set_cookie0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($secure_cookie && !\is_https()) == false (line 268)

    $actual = $this->cI_Security->csrf_set_cookie();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCsrf_set_cookie1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($secure_cookie && !\is_https()) == true (line 268)

    $actual = $this->cI_Security->csrf_set_cookie();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCsrf_show_error0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Security->csrf_show_error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_csrf_hash0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Security->get_csrf_hash();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_csrf_token_name0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Security->get_csrf_token_name();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean0()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean1()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean2()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean3()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean4()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean5()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean6()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean7()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean8()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean9()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean10()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean11()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean12()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean13()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean14()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean15()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean16()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean17()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean18()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean19()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean20()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean21()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean22()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean23()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean24()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean25()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean26()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean27()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean28()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean29()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean30()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean31()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean32()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean33()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean34()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean35()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean36()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean37()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean38()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean39()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean40()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean41()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean42()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean43()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean44()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean45()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean46()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean47()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean48()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean49()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean50()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean51()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean52()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean53()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean54()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean55()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean56()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean57()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean58()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean59()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean60()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean61()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean62()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean63()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == false (line 378)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean64()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean65()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean66()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean67()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean68()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean69()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean70()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean71()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean72()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean73()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean74()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean75()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean76()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean77()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean78()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean79()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean80()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean81()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean82()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean83()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean84()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean85()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean86()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean87()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean88()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean89()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean90()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean91()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean92()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean93()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean94()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean95()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == false (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean96()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean97()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean98()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean99()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean100()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean101()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean102()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean103()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean104()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean105()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean106()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean107()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean108()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean109()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean110()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean111()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean112()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean113()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean114()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean115()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean116()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean117()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean118()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean119()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == false (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean120()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean121()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean122()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean123()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == false (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean124()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean125()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == false (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean126()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == false (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean127()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == false (line 356)
    // if (\stripos($str, '%') !== \false) == true (line 378)
    // PhpParser\Node\Stmt\Do_ == false (line 380)
    // if ($is_image === \TRUE) == true (line 428)
    // if (\preg_match('/<a/i', $str)) == true (line 477)
    // if (\preg_match('/<img/i', $str)) == true (line 482)
    // if (\preg_match('/script|xss/i', $str)) == true (line 487)
    // PhpParser\Node\Stmt\Do_ == false (line 473)
    // PhpParser\Node\Stmt\Do_ == false (line 520)
    // if ($is_image === \TRUE) == true (line 560)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean128()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == true (line 356)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_clean129()
{
    $str = m::mock('UntypedParameter_str_');
    $is_image = m::mock('UntypedParameter_is_image_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($str)) == true (line 356)

    $actual = $this->cI_Security->xss_clean($str, $is_image);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_hash0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_xss_hash === \NULL) == false (line 580)

    $actual = $this->cI_Security->xss_hash();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXss_hash1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_xss_hash === \NULL) == true (line 580)

    $actual = $this->cI_Security->xss_hash();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_random_bytes0()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($length) or !\ctype_digit((string) $length)) == false (line 601)
    // if (\function_exists('random_bytes')) == false (line 606)
    // if (\defined('MCRYPT_DEV_URANDOM') && ($output = \mcrypt_create_iv($length, \MCRYPT_DEV_URANDOM)) !== \FALSE) == false (line 623)
    // if (\is_readable('/dev/urandom') && ($fp = \fopen('/dev/urandom', 'rb')) !== \FALSE) == false (line 629)
    // if (\function_exists('openssl_random_pseudo_bytes')) == false (line 641)

    $actual = $this->cI_Security->get_random_bytes($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_random_bytes1()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($length) or !\ctype_digit((string) $length)) == false (line 601)
    // if (\function_exists('random_bytes')) == false (line 606)
    // if (\defined('MCRYPT_DEV_URANDOM') && ($output = \mcrypt_create_iv($length, \MCRYPT_DEV_URANDOM)) !== \FALSE) == false (line 623)
    // if (\is_readable('/dev/urandom') && ($fp = \fopen('/dev/urandom', 'rb')) !== \FALSE) == false (line 629)
    // if (\function_exists('openssl_random_pseudo_bytes')) == true (line 641)

    $actual = $this->cI_Security->get_random_bytes($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_random_bytes2()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($length) or !\ctype_digit((string) $length)) == false (line 601)
    // if (\function_exists('random_bytes')) == false (line 606)
    // if (\defined('MCRYPT_DEV_URANDOM') && ($output = \mcrypt_create_iv($length, \MCRYPT_DEV_URANDOM)) !== \FALSE) == false (line 623)
    // if (\is_readable('/dev/urandom') && ($fp = \fopen('/dev/urandom', 'rb')) !== \FALSE) == true (line 629)
    // if ($output !== \FALSE) == false (line 635)
    // if (\function_exists('openssl_random_pseudo_bytes')) == false (line 641)

    $actual = $this->cI_Security->get_random_bytes($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_random_bytes3()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($length) or !\ctype_digit((string) $length)) == false (line 601)
    // if (\function_exists('random_bytes')) == false (line 606)
    // if (\defined('MCRYPT_DEV_URANDOM') && ($output = \mcrypt_create_iv($length, \MCRYPT_DEV_URANDOM)) !== \FALSE) == false (line 623)
    // if (\is_readable('/dev/urandom') && ($fp = \fopen('/dev/urandom', 'rb')) !== \FALSE) == true (line 629)
    // if ($output !== \FALSE) == false (line 635)
    // if (\function_exists('openssl_random_pseudo_bytes')) == true (line 641)

    $actual = $this->cI_Security->get_random_bytes($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_random_bytes4()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($length) or !\ctype_digit((string) $length)) == false (line 601)
    // if (\function_exists('random_bytes')) == false (line 606)
    // if (\defined('MCRYPT_DEV_URANDOM') && ($output = \mcrypt_create_iv($length, \MCRYPT_DEV_URANDOM)) !== \FALSE) == false (line 623)
    // if (\is_readable('/dev/urandom') && ($fp = \fopen('/dev/urandom', 'rb')) !== \FALSE) == true (line 629)
    // if ($output !== \FALSE) == true (line 635)

    $actual = $this->cI_Security->get_random_bytes($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_random_bytes5()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($length) or !\ctype_digit((string) $length)) == false (line 601)
    // if (\function_exists('random_bytes')) == false (line 606)
    // if (\defined('MCRYPT_DEV_URANDOM') && ($output = \mcrypt_create_iv($length, \MCRYPT_DEV_URANDOM)) !== \FALSE) == true (line 623)

    $actual = $this->cI_Security->get_random_bytes($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testGet_random_bytes6()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($length) or !\ctype_digit((string) $length)) == false (line 601)
    // if (\function_exists('random_bytes')) == true (line 606)

    $actual = $this->cI_Security->get_random_bytes($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_random_bytes7()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($length) or !\ctype_digit((string) $length)) == false (line 601)
    // if (\function_exists('random_bytes')) == true (line 606)

    $actual = $this->cI_Security->get_random_bytes($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_random_bytes8()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($length) or !\ctype_digit((string) $length)) == false (line 601)
    // if (\function_exists('random_bytes')) == true (line 606)

    $actual = $this->cI_Security->get_random_bytes($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_random_bytes9()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($length) or !\ctype_digit((string) $length)) == true (line 601)

    $actual = $this->cI_Security->get_random_bytes($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity_decode0()
{
    $str = m::mock('UntypedParameter_str_');
    $charset = m::mock('UntypedParameter_charset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($str, '&') === \FALSE) == false (line 670)
    // if (\preg_match_all('/&[a-z]{2,}(?![a-z;])/i', $str, $matches)) == false (line 685)
    // PhpParser\Node\Stmt\Do_ == false (line 680)

    $actual = $this->cI_Security->entity_decode($str, $charset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity_decode1()
{
    $str = m::mock('UntypedParameter_str_');
    $charset = m::mock('UntypedParameter_charset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($str, '&') === \FALSE) == false (line 670)
    // if (\preg_match_all('/&[a-z]{2,}(?![a-z;])/i', $str, $matches)) == true (line 685)
    // PhpParser\Node\Stmt\Do_ == false (line 680)

    $actual = $this->cI_Security->entity_decode($str, $charset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity_decode2()
{
    $str = m::mock('UntypedParameter_str_');
    $charset = m::mock('UntypedParameter_charset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($str, '&') === \FALSE) == false (line 670)
    // if (\preg_match_all('/&[a-z]{2,}(?![a-z;])/i', $str, $matches)) == true (line 685)
    // if (($char = \array_search($match . ';', $_entities, \TRUE)) !== \FALSE) == false (line 691)
    // PhpParser\Node\Stmt\Do_ == false (line 680)

    $actual = $this->cI_Security->entity_decode($str, $charset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity_decode3()
{
    $str = m::mock('UntypedParameter_str_');
    $charset = m::mock('UntypedParameter_charset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($str, '&') === \FALSE) == false (line 670)
    // if (\preg_match_all('/&[a-z]{2,}(?![a-z;])/i', $str, $matches)) == true (line 685)
    // if (($char = \array_search($match . ';', $_entities, \TRUE)) !== \FALSE) == true (line 691)
    // PhpParser\Node\Stmt\Do_ == false (line 680)

    $actual = $this->cI_Security->entity_decode($str, $charset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity_decode4()
{
    $str = m::mock('UntypedParameter_str_');
    $charset = m::mock('UntypedParameter_charset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($str, '&') === \FALSE) == true (line 670)

    $actual = $this->cI_Security->entity_decode($str, $charset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_filename0()
{
    $str = m::mock('UntypedParameter_str_');
    $relative_path = m::mock('UntypedParameter_relative_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative_path) == false (line 724)
    // PhpParser\Node\Stmt\Do_ == false (line 732)

    $actual = $this->cI_Security->sanitize_filename($str, $relative_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_filename1()
{
    $str = m::mock('UntypedParameter_str_');
    $relative_path = m::mock('UntypedParameter_relative_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative_path) == true (line 724)
    // PhpParser\Node\Stmt\Do_ == false (line 732)

    $actual = $this->cI_Security->sanitize_filename($str, $relative_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStrip_image_tags0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Security->strip_image_tags($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
