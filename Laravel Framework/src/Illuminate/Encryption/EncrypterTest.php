<?php

namespace tests\Illuminate\Encryption;

use Illuminate\Encryption\Encrypter;
use Mockery as m;

class EncrypterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_key = null;
/**
* @var mixed
*/
protected $_cipher = null;
/**
* @var \Illuminate\Encryption\Encrypter
*/
protected $encrypter;

public function setUp()
{
    parent::setUp();

    $this->_key = null;
    $this->_cipher = null;
    $this->encrypter = new \Illuminate\Encryption\Encrypter($this->_key, $this->_cipher);
}

public function testSupported0()
{
    $key = m::mock('UntypedParameter_key_');
    $cipher = m::mock('UntypedParameter_cipher_');

    // TODO: Your mock expectations here

    $actual = $this->encrypter->supported($key, $cipher);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateKey0()
{
    $cipher = m::mock('UntypedParameter_cipher_');

    // TODO: Your mock expectations here

    $actual = $this->encrypter->generateKey($cipher);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncrypt0()
{
    $value = m::mock('UntypedParameter_value_');
    $serialize = m::mock('UntypedParameter_serialize_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value === false) == false (line 94)
    // if (json_last_error() !== JSON_ERROR_NONE) == false (line 105)

    $actual = $this->encrypter->encrypt($value, $serialize);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Illuminate\Contracts\Encryption\EncryptException
 */
public function testEncrypt1()
{
    $value = m::mock('UntypedParameter_value_');
    $serialize = m::mock('UntypedParameter_serialize_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value === false) == false (line 94)
    // if (json_last_error() !== JSON_ERROR_NONE) == true (line 105)
    // throw new \Illuminate\Contracts\Encryption\EncryptException('Could not encrypt the data.') -> exception (line 106)

    $actual = $this->encrypter->encrypt($value, $serialize);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Illuminate\Contracts\Encryption\EncryptException
 */
public function testEncrypt2()
{
    $value = m::mock('UntypedParameter_value_');
    $serialize = m::mock('UntypedParameter_serialize_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value === false) == true (line 94)
    // throw new \Illuminate\Contracts\Encryption\EncryptException('Could not encrypt the data.') -> exception (line 95)

    $actual = $this->encrypter->encrypt($value, $serialize);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncryptString0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->encrypter->encryptString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrypt0()
{
    $payload = m::mock('UntypedParameter_payload_');
    $unserialize = m::mock('UntypedParameter_unserialize_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($decrypted === false) == false (line 145)

    $actual = $this->encrypter->decrypt($payload, $unserialize);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Illuminate\Contracts\Encryption\DecryptException
 */
public function testDecrypt1()
{
    $payload = m::mock('UntypedParameter_payload_');
    $unserialize = m::mock('UntypedParameter_unserialize_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($decrypted === false) == true (line 145)
    // throw new \Illuminate\Contracts\Encryption\DecryptException('Could not decrypt the data.') -> exception (line 146)

    $actual = $this->encrypter->decrypt($payload, $unserialize);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecryptString0()
{
    $payload = m::mock('UntypedParameter_payload_');

    // TODO: Your mock expectations here

    $actual = $this->encrypter->decryptString($payload);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->encrypter->getKey();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
