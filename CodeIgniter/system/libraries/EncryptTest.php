<?php

namespace tests;

use CI_Encrypt;
use Mockery as m;

class CI_EncryptTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_Encrypt
*/
protected $cI_Encrypt;

public function setUp()
{
    parent::setUp();

    $this->cI_Encrypt = new \CI_Encrypt();
}

public function testGet_key0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key === '') == false (line 116)

    $actual = $this->cI_Encrypt->get_key($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_key1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key === '') == true (line 116)
    // if ($this->encryption_key !== '') == false (line 118)
    // if (!self::strlen($key)) == false (line 125)

    $actual = $this->cI_Encrypt->get_key($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_key2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key === '') == true (line 116)
    // if ($this->encryption_key !== '') == false (line 118)
    // if (!self::strlen($key)) == true (line 125)

    $actual = $this->cI_Encrypt->get_key($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_key3()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key === '') == true (line 116)
    // if ($this->encryption_key !== '') == true (line 118)

    $actual = $this->cI_Encrypt->get_key($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_key0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Encrypt->set_key($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode0()
{
    $string = m::mock('UntypedParameter_string_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Encrypt->encode($string, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecode0()
{
    $string = m::mock('UntypedParameter_string_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/[^a-zA-Z0-9\\/\\+=]/', $string) or \base64_encode(\base64_decode($string)) !== $string) == false (line 183)

    $actual = $this->cI_Encrypt->decode($string, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecode1()
{
    $string = m::mock('UntypedParameter_string_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/[^a-zA-Z0-9\\/\\+=]/', $string) or \base64_encode(\base64_decode($string)) !== $string) == true (line 183)

    $actual = $this->cI_Encrypt->decode($string, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode_from_legacy0()
{
    $string = m::mock('UntypedParameter_string_');
    $legacy_mode = m::mock('UntypedParameter_legacy_mode_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/[^a-zA-Z0-9\\/\\+=]/', $string)) == false (line 210)
    // if (($dec = $this->mcrypt_decode($dec, $key)) === \FALSE) == false (line 223)

    $actual = $this->cI_Encrypt->encode_from_legacy($string, $legacy_mode, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode_from_legacy1()
{
    $string = m::mock('UntypedParameter_string_');
    $legacy_mode = m::mock('UntypedParameter_legacy_mode_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/[^a-zA-Z0-9\\/\\+=]/', $string)) == false (line 210)
    // if (($dec = $this->mcrypt_decode($dec, $key)) === \FALSE) == true (line 223)

    $actual = $this->cI_Encrypt->encode_from_legacy($string, $legacy_mode, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode_from_legacy2()
{
    $string = m::mock('UntypedParameter_string_');
    $legacy_mode = m::mock('UntypedParameter_legacy_mode_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/[^a-zA-Z0-9\\/\\+=]/', $string)) == true (line 210)

    $actual = $this->cI_Encrypt->encode_from_legacy($string, $legacy_mode, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMcrypt_encode0()
{
    $data = m::mock('UntypedParameter_data_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Encrypt->mcrypt_encode($data, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMcrypt_decode0()
{
    $data = m::mock('UntypedParameter_data_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($init_size > self::strlen($data)) == false (line 317)

    $actual = $this->cI_Encrypt->mcrypt_decode($data, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMcrypt_decode1()
{
    $data = m::mock('UntypedParameter_data_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($init_size > self::strlen($data)) == true (line 317)

    $actual = $this->cI_Encrypt->mcrypt_decode($data, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cipher0()
{
    $cipher = m::mock('UntypedParameter_cipher_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Encrypt->set_cipher($cipher);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_mode0()
{
    $mode = m::mock('UntypedParameter_mode_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Encrypt->set_mode($mode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_hash0()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Encrypt->set_hash($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHash0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Encrypt->hash($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
