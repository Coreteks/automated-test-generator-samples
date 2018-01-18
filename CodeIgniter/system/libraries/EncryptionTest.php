<?php

namespace tests;

use CI_Encryption;
use Mockery as m;

class CI_EncryptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_params = [];
/**
* @var \CI_Encryption
*/
protected $cI_Encryption;

public function setUp()
{
    parent::setUp();

    $this->_params = [];
    $this->cI_Encryption = new \CI_Encryption($this->_params);
}

public function testInitialize0()
{
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($params['driver'])) == false (line 185)
    // if (empty($this->_driver)) == false (line 204)

    $actual = $this->cI_Encryption->initialize($params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize1()
{
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($params['driver'])) == false (line 185)
    // if (empty($this->_driver)) == true (line 204)

    $actual = $this->cI_Encryption->initialize($params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize2()
{
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($params['driver'])) == true (line 185)
    // if (isset($this->_drivers[$params['driver']])) == false (line 187)
    // if (empty($this->_driver)) == false (line 204)

    $actual = $this->cI_Encryption->initialize($params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize3()
{
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($params['driver'])) == true (line 185)
    // if (isset($this->_drivers[$params['driver']])) == false (line 187)
    // if (empty($this->_driver)) == true (line 204)

    $actual = $this->cI_Encryption->initialize($params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize4()
{
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($params['driver'])) == true (line 185)
    // if (isset($this->_drivers[$params['driver']])) == true (line 187)
    // if ($this->_drivers[$params['driver']]) == false (line 189)
    // if (empty($this->_driver)) == false (line 204)

    $actual = $this->cI_Encryption->initialize($params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize5()
{
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($params['driver'])) == true (line 185)
    // if (isset($this->_drivers[$params['driver']])) == true (line 187)
    // if ($this->_drivers[$params['driver']]) == false (line 189)
    // if (empty($this->_driver)) == true (line 204)

    $actual = $this->cI_Encryption->initialize($params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize6()
{
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($params['driver'])) == true (line 185)
    // if (isset($this->_drivers[$params['driver']])) == true (line 187)
    // if ($this->_drivers[$params['driver']]) == true (line 189)
    // if (empty($this->_driver)) == false (line 204)

    $actual = $this->cI_Encryption->initialize($params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize7()
{
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($params['driver'])) == true (line 185)
    // if (isset($this->_drivers[$params['driver']])) == true (line 187)
    // if ($this->_drivers[$params['driver']]) == true (line 189)
    // if (empty($this->_driver)) == true (line 204)

    $actual = $this->cI_Encryption->initialize($params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_key0()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\function_exists('random_bytes')) == false (line 338)
    // if (\defined('MCRYPT_DEV_URANDOM')) == false (line 350)

    $actual = $this->cI_Encryption->create_key($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_key1()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\function_exists('random_bytes')) == false (line 338)
    // if (\defined('MCRYPT_DEV_URANDOM')) == true (line 350)

    $actual = $this->cI_Encryption->create_key($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testCreate_key2()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\function_exists('random_bytes')) == true (line 338)

    $actual = $this->cI_Encryption->create_key($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_key3()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\function_exists('random_bytes')) == true (line 338)

    $actual = $this->cI_Encryption->create_key($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_key4()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\function_exists('random_bytes')) == true (line 338)

    $actual = $this->cI_Encryption->create_key($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncrypt0()
{
    $data = m::mock('UntypedParameter_data_');
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($params = $this->_get_params($params)) === \FALSE) == false (line 373)
    // if (($data = $this->{'_' . $this->_driver . '_encrypt'}($data, $params)) === \FALSE) == false (line 380)
    // if (isset($params['hmac_digest'])) == false (line 387)

    $actual = $this->cI_Encryption->encrypt($data, $params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncrypt1()
{
    $data = m::mock('UntypedParameter_data_');
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($params = $this->_get_params($params)) === \FALSE) == false (line 373)
    // if (($data = $this->{'_' . $this->_driver . '_encrypt'}($data, $params)) === \FALSE) == false (line 380)
    // if (isset($params['hmac_digest'])) == true (line 387)

    $actual = $this->cI_Encryption->encrypt($data, $params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncrypt2()
{
    $data = m::mock('UntypedParameter_data_');
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($params = $this->_get_params($params)) === \FALSE) == false (line 373)
    // if (($data = $this->{'_' . $this->_driver . '_encrypt'}($data, $params)) === \FALSE) == true (line 380)

    $actual = $this->cI_Encryption->encrypt($data, $params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncrypt3()
{
    $data = m::mock('UntypedParameter_data_');
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($params = $this->_get_params($params)) === \FALSE) == true (line 373)

    $actual = $this->cI_Encryption->encrypt($data, $params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrypt0()
{
    $data = m::mock('UntypedParameter_data_');
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($params = $this->_get_params($params)) === \FALSE) == false (line 508)
    // if (isset($params['hmac_digest'])) == false (line 513)
    // if ($params['base64']) == false (line 545)

    $actual = $this->cI_Encryption->decrypt($data, $params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrypt1()
{
    $data = m::mock('UntypedParameter_data_');
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($params = $this->_get_params($params)) === \FALSE) == false (line 508)
    // if (isset($params['hmac_digest'])) == false (line 513)
    // if ($params['base64']) == true (line 545)

    $actual = $this->cI_Encryption->decrypt($data, $params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrypt2()
{
    $data = m::mock('UntypedParameter_data_');
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($params = $this->_get_params($params)) === \FALSE) == false (line 508)
    // if (isset($params['hmac_digest'])) == true (line 513)
    // if (self::strlen($data) <= $digest_size) == false (line 521)
    // for (...) == false (line 534)
    // if ($diff !== 0) == false (line 539)
    // if ($params['base64']) == false (line 545)

    $actual = $this->cI_Encryption->decrypt($data, $params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrypt3()
{
    $data = m::mock('UntypedParameter_data_');
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($params = $this->_get_params($params)) === \FALSE) == false (line 508)
    // if (isset($params['hmac_digest'])) == true (line 513)
    // if (self::strlen($data) <= $digest_size) == false (line 521)
    // for (...) == false (line 534)
    // if ($diff !== 0) == false (line 539)
    // if ($params['base64']) == true (line 545)

    $actual = $this->cI_Encryption->decrypt($data, $params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrypt4()
{
    $data = m::mock('UntypedParameter_data_');
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($params = $this->_get_params($params)) === \FALSE) == false (line 508)
    // if (isset($params['hmac_digest'])) == true (line 513)
    // if (self::strlen($data) <= $digest_size) == false (line 521)
    // for (...) == false (line 534)
    // if ($diff !== 0) == true (line 539)

    $actual = $this->cI_Encryption->decrypt($data, $params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrypt5()
{
    $data = m::mock('UntypedParameter_data_');
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($params = $this->_get_params($params)) === \FALSE) == false (line 508)
    // if (isset($params['hmac_digest'])) == true (line 513)
    // if (self::strlen($data) <= $digest_size) == false (line 521)
    // for (...) == true (line 534)
    // for (...) == false (line 534)
    // if ($diff !== 0) == false (line 539)
    // if ($params['base64']) == false (line 545)

    $actual = $this->cI_Encryption->decrypt($data, $params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrypt6()
{
    $data = m::mock('UntypedParameter_data_');
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($params = $this->_get_params($params)) === \FALSE) == false (line 508)
    // if (isset($params['hmac_digest'])) == true (line 513)
    // if (self::strlen($data) <= $digest_size) == false (line 521)
    // for (...) == true (line 534)
    // for (...) == false (line 534)
    // if ($diff !== 0) == false (line 539)
    // if ($params['base64']) == true (line 545)

    $actual = $this->cI_Encryption->decrypt($data, $params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrypt7()
{
    $data = m::mock('UntypedParameter_data_');
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($params = $this->_get_params($params)) === \FALSE) == false (line 508)
    // if (isset($params['hmac_digest'])) == true (line 513)
    // if (self::strlen($data) <= $digest_size) == false (line 521)
    // for (...) == true (line 534)
    // for (...) == false (line 534)
    // if ($diff !== 0) == true (line 539)

    $actual = $this->cI_Encryption->decrypt($data, $params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrypt8()
{
    $data = m::mock('UntypedParameter_data_');
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($params = $this->_get_params($params)) === \FALSE) == false (line 508)
    // if (isset($params['hmac_digest'])) == true (line 513)
    // if (self::strlen($data) <= $digest_size) == true (line 521)

    $actual = $this->cI_Encryption->decrypt($data, $params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrypt9()
{
    $data = m::mock('UntypedParameter_data_');
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($params = $this->_get_params($params)) === \FALSE) == true (line 508)

    $actual = $this->cI_Encryption->decrypt($data, $params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHkdf0()
{
    $key = m::mock('UntypedParameter_key_');
    $digest = m::mock('UntypedParameter_digest_');
    $salt = m::mock('UntypedParameter_salt_');
    $length = m::mock('UntypedParameter_length_');
    $info = m::mock('UntypedParameter_info_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_digests[$digest])) == false (line 852)
    // if (empty($length) or !\is_int($length)) == false (line 857)
    // if ($length > 255 * $this->_digests[$digest]) == false (line 861)
    // for (...) == false (line 870)

    $actual = $this->cI_Encryption->hkdf($key, $digest, $salt, $length, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHkdf1()
{
    $key = m::mock('UntypedParameter_key_');
    $digest = m::mock('UntypedParameter_digest_');
    $salt = m::mock('UntypedParameter_salt_');
    $length = m::mock('UntypedParameter_length_');
    $info = m::mock('UntypedParameter_info_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_digests[$digest])) == false (line 852)
    // if (empty($length) or !\is_int($length)) == false (line 857)
    // if ($length > 255 * $this->_digests[$digest]) == false (line 861)
    // for (...) == true (line 870)
    // for (...) == false (line 870)

    $actual = $this->cI_Encryption->hkdf($key, $digest, $salt, $length, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHkdf2()
{
    $key = m::mock('UntypedParameter_key_');
    $digest = m::mock('UntypedParameter_digest_');
    $salt = m::mock('UntypedParameter_salt_');
    $length = m::mock('UntypedParameter_length_');
    $info = m::mock('UntypedParameter_info_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_digests[$digest])) == false (line 852)
    // if (empty($length) or !\is_int($length)) == false (line 857)
    // if ($length > 255 * $this->_digests[$digest]) == true (line 861)

    $actual = $this->cI_Encryption->hkdf($key, $digest, $salt, $length, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHkdf3()
{
    $key = m::mock('UntypedParameter_key_');
    $digest = m::mock('UntypedParameter_digest_');
    $salt = m::mock('UntypedParameter_salt_');
    $length = m::mock('UntypedParameter_length_');
    $info = m::mock('UntypedParameter_info_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_digests[$digest])) == false (line 852)
    // if (empty($length) or !\is_int($length)) == true (line 857)
    // for (...) == false (line 870)

    $actual = $this->cI_Encryption->hkdf($key, $digest, $salt, $length, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHkdf4()
{
    $key = m::mock('UntypedParameter_key_');
    $digest = m::mock('UntypedParameter_digest_');
    $salt = m::mock('UntypedParameter_salt_');
    $length = m::mock('UntypedParameter_length_');
    $info = m::mock('UntypedParameter_info_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_digests[$digest])) == false (line 852)
    // if (empty($length) or !\is_int($length)) == true (line 857)
    // for (...) == true (line 870)
    // for (...) == false (line 870)

    $actual = $this->cI_Encryption->hkdf($key, $digest, $salt, $length, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHkdf5()
{
    $key = m::mock('UntypedParameter_key_');
    $digest = m::mock('UntypedParameter_digest_');
    $salt = m::mock('UntypedParameter_salt_');
    $length = m::mock('UntypedParameter_length_');
    $info = m::mock('UntypedParameter_info_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_digests[$digest])) == true (line 852)

    $actual = $this->cI_Encryption->hkdf($key, $digest, $salt, $length, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key === 'mode') == false (line 890)
    // if (\in_array($key, array('cipher', 'driver', 'drivers', 'digests'), \TRUE)) == false (line 894)

    $actual = $this->cI_Encryption->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key === 'mode') == false (line 890)
    // if (\in_array($key, array('cipher', 'driver', 'drivers', 'digests'), \TRUE)) == true (line 894)

    $actual = $this->cI_Encryption->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key === 'mode') == true (line 890)

    $actual = $this->cI_Encryption->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
