<?php

namespace tests;

use CI_Session;
use Mockery as m;

class CI_SessionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_params = [];
/**
* @var \CI_Session
*/
protected $cI_Session;

public function setUp()
{
    parent::setUp();

    $this->_params = [];
    $this->cI_Session = new \CI_Session($this->_params);
}

public function testMark_as_flash0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($key)) == false (line 426)
    // if (!isset($_SESSION[$key])) == false (line 445)

    $actual = $this->cI_Session->mark_as_flash($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMark_as_flash1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($key)) == false (line 426)
    // if (!isset($_SESSION[$key])) == true (line 445)

    $actual = $this->cI_Session->mark_as_flash($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMark_as_flash2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($key)) == true (line 426)
    // for (...) == false (line 428)

    $actual = $this->cI_Session->mark_as_flash($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMark_as_flash3()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($key)) == true (line 426)
    // for (...) == true (line 428)
    // if (!isset($_SESSION[$key[$i]])) == false (line 430)
    // for (...) == false (line 428)

    $actual = $this->cI_Session->mark_as_flash($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMark_as_flash4()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($key)) == true (line 426)
    // for (...) == true (line 428)
    // if (!isset($_SESSION[$key[$i]])) == true (line 430)

    $actual = $this->cI_Session->mark_as_flash($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_flash_keys0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($_SESSION['__ci_vars'])) == false (line 463)

    $actual = $this->cI_Session->get_flash_keys();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_flash_keys1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($_SESSION['__ci_vars'])) == false (line 463)

    $actual = $this->cI_Session->get_flash_keys();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_flash_keys2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($_SESSION['__ci_vars'])) == true (line 463)

    $actual = $this->cI_Session->get_flash_keys();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnmark_flash0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_SESSION['__ci_vars'])) == false (line 487)
    // if (empty($_SESSION['__ci_vars'])) == false (line 502)

    $actual = $this->cI_Session->unmark_flash($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnmark_flash1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_SESSION['__ci_vars'])) == false (line 487)
    // if (empty($_SESSION['__ci_vars'])) == true (line 502)

    $actual = $this->cI_Session->unmark_flash($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnmark_flash2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_SESSION['__ci_vars'])) == false (line 487)
    // if (isset($_SESSION['__ci_vars'][$k]) && !\is_int($_SESSION['__ci_vars'][$k])) == false (line 496)
    // if (empty($_SESSION['__ci_vars'])) == false (line 502)

    $actual = $this->cI_Session->unmark_flash($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnmark_flash3()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_SESSION['__ci_vars'])) == false (line 487)
    // if (isset($_SESSION['__ci_vars'][$k]) && !\is_int($_SESSION['__ci_vars'][$k])) == false (line 496)
    // if (empty($_SESSION['__ci_vars'])) == true (line 502)

    $actual = $this->cI_Session->unmark_flash($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnmark_flash4()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_SESSION['__ci_vars'])) == false (line 487)
    // if (isset($_SESSION['__ci_vars'][$k]) && !\is_int($_SESSION['__ci_vars'][$k])) == true (line 496)
    // if (empty($_SESSION['__ci_vars'])) == false (line 502)

    $actual = $this->cI_Session->unmark_flash($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnmark_flash5()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_SESSION['__ci_vars'])) == false (line 487)
    // if (isset($_SESSION['__ci_vars'][$k]) && !\is_int($_SESSION['__ci_vars'][$k])) == true (line 496)
    // if (empty($_SESSION['__ci_vars'])) == true (line 502)

    $actual = $this->cI_Session->unmark_flash($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnmark_flash6()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_SESSION['__ci_vars'])) == true (line 487)

    $actual = $this->cI_Session->unmark_flash($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMark_as_temp0()
{
    $key = m::mock('UntypedParameter_key_');
    $ttl = m::mock('UntypedParameter_ttl_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($key)) == false (line 521)
    // if (!isset($_SESSION[$key])) == false (line 553)

    $actual = $this->cI_Session->mark_as_temp($key, $ttl);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMark_as_temp1()
{
    $key = m::mock('UntypedParameter_key_');
    $ttl = m::mock('UntypedParameter_ttl_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($key)) == false (line 521)
    // if (!isset($_SESSION[$key])) == true (line 553)

    $actual = $this->cI_Session->mark_as_temp($key, $ttl);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMark_as_temp2()
{
    $key = m::mock('UntypedParameter_key_');
    $ttl = m::mock('UntypedParameter_ttl_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($key)) == true (line 521)

    $actual = $this->cI_Session->mark_as_temp($key, $ttl);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMark_as_temp3()
{
    $key = m::mock('UntypedParameter_key_');
    $ttl = m::mock('UntypedParameter_ttl_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($key)) == true (line 521)
    // if (\is_int($k)) == false (line 528)
    // if (!isset($_SESSION[$k])) == false (line 538)

    $actual = $this->cI_Session->mark_as_temp($key, $ttl);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMark_as_temp4()
{
    $key = m::mock('UntypedParameter_key_');
    $ttl = m::mock('UntypedParameter_ttl_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($key)) == true (line 521)
    // if (\is_int($k)) == false (line 528)
    // if (!isset($_SESSION[$k])) == true (line 538)

    $actual = $this->cI_Session->mark_as_temp($key, $ttl);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMark_as_temp5()
{
    $key = m::mock('UntypedParameter_key_');
    $ttl = m::mock('UntypedParameter_ttl_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($key)) == true (line 521)
    // if (\is_int($k)) == true (line 528)
    // if (!isset($_SESSION[$k])) == false (line 538)

    $actual = $this->cI_Session->mark_as_temp($key, $ttl);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMark_as_temp6()
{
    $key = m::mock('UntypedParameter_key_');
    $ttl = m::mock('UntypedParameter_ttl_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($key)) == true (line 521)
    // if (\is_int($k)) == true (line 528)
    // if (!isset($_SESSION[$k])) == true (line 538)

    $actual = $this->cI_Session->mark_as_temp($key, $ttl);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_temp_keys0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($_SESSION['__ci_vars'])) == false (line 571)

    $actual = $this->cI_Session->get_temp_keys();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_temp_keys1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($_SESSION['__ci_vars'])) == false (line 571)

    $actual = $this->cI_Session->get_temp_keys();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_temp_keys2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($_SESSION['__ci_vars'])) == true (line 571)

    $actual = $this->cI_Session->get_temp_keys();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnmark_temp0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_SESSION['__ci_vars'])) == false (line 595)
    // if (empty($_SESSION['__ci_vars'])) == false (line 610)

    $actual = $this->cI_Session->unmark_temp($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnmark_temp1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_SESSION['__ci_vars'])) == false (line 595)
    // if (empty($_SESSION['__ci_vars'])) == true (line 610)

    $actual = $this->cI_Session->unmark_temp($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnmark_temp2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_SESSION['__ci_vars'])) == false (line 595)
    // if (isset($_SESSION['__ci_vars'][$k]) && \is_int($_SESSION['__ci_vars'][$k])) == false (line 604)
    // if (empty($_SESSION['__ci_vars'])) == false (line 610)

    $actual = $this->cI_Session->unmark_temp($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnmark_temp3()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_SESSION['__ci_vars'])) == false (line 595)
    // if (isset($_SESSION['__ci_vars'][$k]) && \is_int($_SESSION['__ci_vars'][$k])) == false (line 604)
    // if (empty($_SESSION['__ci_vars'])) == true (line 610)

    $actual = $this->cI_Session->unmark_temp($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnmark_temp4()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_SESSION['__ci_vars'])) == false (line 595)
    // if (isset($_SESSION['__ci_vars'][$k]) && \is_int($_SESSION['__ci_vars'][$k])) == true (line 604)
    // if (empty($_SESSION['__ci_vars'])) == false (line 610)

    $actual = $this->cI_Session->unmark_temp($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnmark_temp5()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_SESSION['__ci_vars'])) == false (line 595)
    // if (isset($_SESSION['__ci_vars'][$k]) && \is_int($_SESSION['__ci_vars'][$k])) == true (line 604)
    // if (empty($_SESSION['__ci_vars'])) == true (line 610)

    $actual = $this->cI_Session->unmark_temp($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnmark_temp6()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_SESSION['__ci_vars'])) == true (line 595)

    $actual = $this->cI_Session->unmark_temp($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($_SESSION[$key])) == false (line 628)
    // if ($key === 'session_id') == false (line 632)

    $actual = $this->cI_Session->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($_SESSION[$key])) == false (line 628)
    // if ($key === 'session_id') == true (line 632)

    $actual = $this->cI_Session->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($_SESSION[$key])) == true (line 628)

    $actual = $this->cI_Session->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key === 'session_id') == false (line 650)

    $actual = $this->cI_Session->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key === 'session_id') == true (line 650)

    $actual = $this->cI_Session->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Session->__set($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSess_destroy0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Session->sess_destroy();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSess_regenerate0()
{
    $destroy = m::mock('UntypedParameter_destroy_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Session->sess_regenerate($destroy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_userdata0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Session->get_userdata();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUserdata0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($key)) == false (line 728)
    // if (empty($_SESSION)) == false (line 732)

    $actual = $this->cI_Session->userdata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUserdata1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($key)) == false (line 728)
    // if (empty($_SESSION)) == false (line 732)
    // if (!\in_array($key, $_exclude, \TRUE)) == false (line 746)

    $actual = $this->cI_Session->userdata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUserdata2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($key)) == false (line 728)
    // if (empty($_SESSION)) == false (line 732)
    // if (!\in_array($key, $_exclude, \TRUE)) == true (line 746)

    $actual = $this->cI_Session->userdata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUserdata3()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($key)) == false (line 728)
    // if (empty($_SESSION)) == true (line 732)

    $actual = $this->cI_Session->userdata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUserdata4()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($key)) == true (line 728)

    $actual = $this->cI_Session->userdata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_userdata0()
{
    $data = m::mock('UntypedParameter_data_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($data)) == false (line 768)

    $actual = $this->cI_Session->set_userdata($data, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_userdata1()
{
    $data = m::mock('UntypedParameter_data_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($data)) == true (line 768)

    $actual = $this->cI_Session->set_userdata($data, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_userdata2()
{
    $data = m::mock('UntypedParameter_data_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($data)) == true (line 768)

    $actual = $this->cI_Session->set_userdata($data, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnset_userdata0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($key)) == false (line 793)

    $actual = $this->cI_Session->unset_userdata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnset_userdata1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($key)) == true (line 793)

    $actual = $this->cI_Session->unset_userdata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnset_userdata2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($key)) == true (line 793)

    $actual = $this->cI_Session->unset_userdata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_userdata0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Session->all_userdata();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_userdata0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Session->has_userdata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlashdata0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($key)) == false (line 847)
    // if (!empty($_SESSION['__ci_vars'])) == false (line 856)

    $actual = $this->cI_Session->flashdata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlashdata1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($key)) == false (line 847)
    // if (!empty($_SESSION['__ci_vars'])) == true (line 856)

    $actual = $this->cI_Session->flashdata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlashdata2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($key)) == false (line 847)
    // if (!empty($_SESSION['__ci_vars'])) == true (line 856)

    $actual = $this->cI_Session->flashdata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlashdata3()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($key)) == true (line 847)

    $actual = $this->cI_Session->flashdata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_flashdata0()
{
    $data = m::mock('UntypedParameter_data_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Session->set_flashdata($data, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKeep_flashdata0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Session->keep_flashdata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTempdata0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($key)) == false (line 911)
    // if (!empty($_SESSION['__ci_vars'])) == false (line 920)

    $actual = $this->cI_Session->tempdata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTempdata1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($key)) == false (line 911)
    // if (!empty($_SESSION['__ci_vars'])) == true (line 920)

    $actual = $this->cI_Session->tempdata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTempdata2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($key)) == false (line 911)
    // if (!empty($_SESSION['__ci_vars'])) == true (line 920)

    $actual = $this->cI_Session->tempdata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTempdata3()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($key)) == true (line 911)

    $actual = $this->cI_Session->tempdata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_tempdata0()
{
    $data = m::mock('UntypedParameter_data_');
    $value = m::mock('UntypedParameter_value_');
    $ttl = m::mock('UntypedParameter_ttl_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Session->set_tempdata($data, $value, $ttl);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnset_tempdata0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Session->unset_tempdata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
