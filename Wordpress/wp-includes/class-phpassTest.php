<?php

namespace tests;

use Mockery as m;
use PasswordHash;

class PasswordHashTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_iteration_count_log2 = null;
/**
* @var mixed
*/
protected $_portable_hashes = null;
/**
* @var \PasswordHash
*/
protected $passwordHash;

public function setUp()
{
    parent::setUp();

    $this->_iteration_count_log2 = null;
    $this->_portable_hashes = null;
    $this->passwordHash = new \PasswordHash($this->_iteration_count_log2, $this->_portable_hashes);
}

public function testPasswordHash0()
{
    $iteration_count_log2 = m::mock('UntypedParameter_iteration_count_log2_');
    $portable_hashes = m::mock('UntypedParameter_portable_hashes_');

    // TODO: Your mock expectations here

    $actual = $this->passwordHash->PasswordHash($iteration_count_log2, $portable_hashes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_random_bytes0()
{
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (@\is_readable('/dev/urandom') && ($fh = @\fopen('/dev/urandom', 'rb'))) == false (line 68)
    // if (\strlen($output) < $count) == false (line 74)

    $actual = $this->passwordHash->get_random_bytes($count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_random_bytes1()
{
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (@\is_readable('/dev/urandom') && ($fh = @\fopen('/dev/urandom', 'rb'))) == false (line 68)
    // if (\strlen($output) < $count) == true (line 74)
    // for (...) == false (line 76)

    $actual = $this->passwordHash->get_random_bytes($count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_random_bytes2()
{
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (@\is_readable('/dev/urandom') && ($fh = @\fopen('/dev/urandom', 'rb'))) == false (line 68)
    // if (\strlen($output) < $count) == true (line 74)
    // for (...) == true (line 76)
    // for (...) == false (line 76)

    $actual = $this->passwordHash->get_random_bytes($count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_random_bytes3()
{
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (@\is_readable('/dev/urandom') && ($fh = @\fopen('/dev/urandom', 'rb'))) == true (line 68)
    // if (\strlen($output) < $count) == false (line 74)

    $actual = $this->passwordHash->get_random_bytes($count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_random_bytes4()
{
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (@\is_readable('/dev/urandom') && ($fh = @\fopen('/dev/urandom', 'rb'))) == true (line 68)
    // if (\strlen($output) < $count) == true (line 74)
    // for (...) == false (line 76)

    $actual = $this->passwordHash->get_random_bytes($count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_random_bytes5()
{
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (@\is_readable('/dev/urandom') && ($fh = @\fopen('/dev/urandom', 'rb'))) == true (line 68)
    // if (\strlen($output) < $count) == true (line 74)
    // for (...) == true (line 76)
    // for (...) == false (line 76)

    $actual = $this->passwordHash->get_random_bytes($count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode640()
{
    $input = m::mock('UntypedParameter_input_');
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($i < $count) == false (line 95)
    // if ($i++ >= $count) == false (line 98)
    // if ($i < $count) == false (line 100)
    // if ($i++ >= $count) == false (line 103)
    // PhpParser\Node\Stmt\Do_ == false (line 92)

    $actual = $this->passwordHash->encode64($input, $count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode641()
{
    $input = m::mock('UntypedParameter_input_');
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($i < $count) == false (line 95)
    // if ($i++ >= $count) == false (line 98)
    // if ($i < $count) == false (line 100)
    // if ($i++ >= $count) == true (line 103)

    $actual = $this->passwordHash->encode64($input, $count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode642()
{
    $input = m::mock('UntypedParameter_input_');
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($i < $count) == false (line 95)
    // if ($i++ >= $count) == false (line 98)
    // if ($i < $count) == true (line 100)
    // if ($i++ >= $count) == false (line 103)
    // PhpParser\Node\Stmt\Do_ == false (line 92)

    $actual = $this->passwordHash->encode64($input, $count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode643()
{
    $input = m::mock('UntypedParameter_input_');
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($i < $count) == false (line 95)
    // if ($i++ >= $count) == false (line 98)
    // if ($i < $count) == true (line 100)
    // if ($i++ >= $count) == true (line 103)

    $actual = $this->passwordHash->encode64($input, $count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode644()
{
    $input = m::mock('UntypedParameter_input_');
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($i < $count) == false (line 95)
    // if ($i++ >= $count) == true (line 98)

    $actual = $this->passwordHash->encode64($input, $count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode645()
{
    $input = m::mock('UntypedParameter_input_');
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($i < $count) == true (line 95)
    // if ($i++ >= $count) == false (line 98)
    // if ($i < $count) == false (line 100)
    // if ($i++ >= $count) == false (line 103)
    // PhpParser\Node\Stmt\Do_ == false (line 92)

    $actual = $this->passwordHash->encode64($input, $count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode646()
{
    $input = m::mock('UntypedParameter_input_');
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($i < $count) == true (line 95)
    // if ($i++ >= $count) == false (line 98)
    // if ($i < $count) == false (line 100)
    // if ($i++ >= $count) == true (line 103)

    $actual = $this->passwordHash->encode64($input, $count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode647()
{
    $input = m::mock('UntypedParameter_input_');
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($i < $count) == true (line 95)
    // if ($i++ >= $count) == false (line 98)
    // if ($i < $count) == true (line 100)
    // if ($i++ >= $count) == false (line 103)
    // PhpParser\Node\Stmt\Do_ == false (line 92)

    $actual = $this->passwordHash->encode64($input, $count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode648()
{
    $input = m::mock('UntypedParameter_input_');
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($i < $count) == true (line 95)
    // if ($i++ >= $count) == false (line 98)
    // if ($i < $count) == true (line 100)
    // if ($i++ >= $count) == true (line 103)

    $actual = $this->passwordHash->encode64($input, $count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode649()
{
    $input = m::mock('UntypedParameter_input_');
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($i < $count) == true (line 95)
    // if ($i++ >= $count) == true (line 98)

    $actual = $this->passwordHash->encode64($input, $count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGensalt_private0()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    $actual = $this->passwordHash->gensalt_private($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrypt_private0()
{
    $password = m::mock('UntypedParameter_password_');
    $setting = m::mock('UntypedParameter_setting_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($setting, 0, 2) == $output) == false (line 124)
    // if ($id != '$P$' && $id != '$H$') == false (line 129)
    // if ($count_log2 < 7 || $count_log2 > 30) == false (line 133)
    // if (\strlen($salt) != 8) == false (line 139)
    // if (\PHP_VERSION >= '5') == false (line 148)
    // PhpParser\Node\Stmt\Do_ == false (line 155)

    $actual = $this->passwordHash->crypt_private($password, $setting);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrypt_private1()
{
    $password = m::mock('UntypedParameter_password_');
    $setting = m::mock('UntypedParameter_setting_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($setting, 0, 2) == $output) == false (line 124)
    // if ($id != '$P$' && $id != '$H$') == false (line 129)
    // if ($count_log2 < 7 || $count_log2 > 30) == false (line 133)
    // if (\strlen($salt) != 8) == false (line 139)
    // if (\PHP_VERSION >= '5') == true (line 148)
    // PhpParser\Node\Stmt\Do_ == false (line 150)

    $actual = $this->passwordHash->crypt_private($password, $setting);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrypt_private2()
{
    $password = m::mock('UntypedParameter_password_');
    $setting = m::mock('UntypedParameter_setting_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($setting, 0, 2) == $output) == false (line 124)
    // if ($id != '$P$' && $id != '$H$') == false (line 129)
    // if ($count_log2 < 7 || $count_log2 > 30) == false (line 133)
    // if (\strlen($salt) != 8) == true (line 139)

    $actual = $this->passwordHash->crypt_private($password, $setting);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrypt_private3()
{
    $password = m::mock('UntypedParameter_password_');
    $setting = m::mock('UntypedParameter_setting_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($setting, 0, 2) == $output) == false (line 124)
    // if ($id != '$P$' && $id != '$H$') == false (line 129)
    // if ($count_log2 < 7 || $count_log2 > 30) == true (line 133)

    $actual = $this->passwordHash->crypt_private($password, $setting);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrypt_private4()
{
    $password = m::mock('UntypedParameter_password_');
    $setting = m::mock('UntypedParameter_setting_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($setting, 0, 2) == $output) == false (line 124)
    // if ($id != '$P$' && $id != '$H$') == true (line 129)

    $actual = $this->passwordHash->crypt_private($password, $setting);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrypt_private5()
{
    $password = m::mock('UntypedParameter_password_');
    $setting = m::mock('UntypedParameter_setting_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($setting, 0, 2) == $output) == true (line 124)
    // if ($id != '$P$' && $id != '$H$') == false (line 129)
    // if ($count_log2 < 7 || $count_log2 > 30) == false (line 133)
    // if (\strlen($salt) != 8) == false (line 139)
    // if (\PHP_VERSION >= '5') == false (line 148)
    // PhpParser\Node\Stmt\Do_ == false (line 155)

    $actual = $this->passwordHash->crypt_private($password, $setting);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrypt_private6()
{
    $password = m::mock('UntypedParameter_password_');
    $setting = m::mock('UntypedParameter_setting_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($setting, 0, 2) == $output) == true (line 124)
    // if ($id != '$P$' && $id != '$H$') == false (line 129)
    // if ($count_log2 < 7 || $count_log2 > 30) == false (line 133)
    // if (\strlen($salt) != 8) == false (line 139)
    // if (\PHP_VERSION >= '5') == true (line 148)
    // PhpParser\Node\Stmt\Do_ == false (line 150)

    $actual = $this->passwordHash->crypt_private($password, $setting);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrypt_private7()
{
    $password = m::mock('UntypedParameter_password_');
    $setting = m::mock('UntypedParameter_setting_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($setting, 0, 2) == $output) == true (line 124)
    // if ($id != '$P$' && $id != '$H$') == false (line 129)
    // if ($count_log2 < 7 || $count_log2 > 30) == false (line 133)
    // if (\strlen($salt) != 8) == true (line 139)

    $actual = $this->passwordHash->crypt_private($password, $setting);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrypt_private8()
{
    $password = m::mock('UntypedParameter_password_');
    $setting = m::mock('UntypedParameter_setting_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($setting, 0, 2) == $output) == true (line 124)
    // if ($id != '$P$' && $id != '$H$') == false (line 129)
    // if ($count_log2 < 7 || $count_log2 > 30) == true (line 133)

    $actual = $this->passwordHash->crypt_private($password, $setting);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrypt_private9()
{
    $password = m::mock('UntypedParameter_password_');
    $setting = m::mock('UntypedParameter_setting_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($setting, 0, 2) == $output) == true (line 124)
    // if ($id != '$P$' && $id != '$H$') == true (line 129)

    $actual = $this->passwordHash->crypt_private($password, $setting);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGensalt_extended0()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    $actual = $this->passwordHash->gensalt_extended($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGensalt_blowfish0()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($i >= 16) == false (line 206)
    // PhpParser\Node\Stmt\Do_ == false (line 202)

    $actual = $this->passwordHash->gensalt_blowfish($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGensalt_blowfish1()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($i >= 16) == true (line 206)

    $actual = $this->passwordHash->gensalt_blowfish($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword0()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == false (line 233)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == false (line 241)
    // if (\strlen($random) < 6) == false (line 250)
    // if (\strlen($hash) == 34) == false (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword1()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == false (line 233)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == false (line 241)
    // if (\strlen($random) < 6) == false (line 250)
    // if (\strlen($hash) == 34) == true (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword2()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == false (line 233)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == false (line 241)
    // if (\strlen($random) < 6) == true (line 250)
    // if (\strlen($hash) == 34) == false (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword3()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == false (line 233)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == false (line 241)
    // if (\strlen($random) < 6) == true (line 250)
    // if (\strlen($hash) == 34) == true (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword4()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == false (line 233)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == true (line 241)
    // if (\strlen($random) < 3) == false (line 242)
    // if (\strlen($hash) == 20) == false (line 246)
    // if (\strlen($random) < 6) == false (line 250)
    // if (\strlen($hash) == 34) == false (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword5()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == false (line 233)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == true (line 241)
    // if (\strlen($random) < 3) == false (line 242)
    // if (\strlen($hash) == 20) == false (line 246)
    // if (\strlen($random) < 6) == false (line 250)
    // if (\strlen($hash) == 34) == true (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword6()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == false (line 233)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == true (line 241)
    // if (\strlen($random) < 3) == false (line 242)
    // if (\strlen($hash) == 20) == false (line 246)
    // if (\strlen($random) < 6) == true (line 250)
    // if (\strlen($hash) == 34) == false (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword7()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == false (line 233)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == true (line 241)
    // if (\strlen($random) < 3) == false (line 242)
    // if (\strlen($hash) == 20) == false (line 246)
    // if (\strlen($random) < 6) == true (line 250)
    // if (\strlen($hash) == 34) == true (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword8()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == false (line 233)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == true (line 241)
    // if (\strlen($random) < 3) == false (line 242)
    // if (\strlen($hash) == 20) == true (line 246)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword9()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == false (line 233)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == true (line 241)
    // if (\strlen($random) < 3) == true (line 242)
    // if (\strlen($hash) == 20) == false (line 246)
    // if (\strlen($random) < 6) == false (line 250)
    // if (\strlen($hash) == 34) == false (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword10()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == false (line 233)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == true (line 241)
    // if (\strlen($random) < 3) == true (line 242)
    // if (\strlen($hash) == 20) == false (line 246)
    // if (\strlen($random) < 6) == false (line 250)
    // if (\strlen($hash) == 34) == true (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword11()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == false (line 233)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == true (line 241)
    // if (\strlen($random) < 3) == true (line 242)
    // if (\strlen($hash) == 20) == false (line 246)
    // if (\strlen($random) < 6) == true (line 250)
    // if (\strlen($hash) == 34) == false (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword12()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == false (line 233)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == true (line 241)
    // if (\strlen($random) < 3) == true (line 242)
    // if (\strlen($hash) == 20) == false (line 246)
    // if (\strlen($random) < 6) == true (line 250)
    // if (\strlen($hash) == 34) == true (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword13()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == false (line 233)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == true (line 241)
    // if (\strlen($random) < 3) == true (line 242)
    // if (\strlen($hash) == 20) == true (line 246)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword14()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == true (line 233)
    // if (\strlen($hash) == 60) == false (line 237)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == false (line 241)
    // if (\strlen($random) < 6) == false (line 250)
    // if (\strlen($hash) == 34) == false (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword15()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == true (line 233)
    // if (\strlen($hash) == 60) == false (line 237)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == false (line 241)
    // if (\strlen($random) < 6) == false (line 250)
    // if (\strlen($hash) == 34) == true (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword16()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == true (line 233)
    // if (\strlen($hash) == 60) == false (line 237)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == false (line 241)
    // if (\strlen($random) < 6) == true (line 250)
    // if (\strlen($hash) == 34) == false (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword17()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == true (line 233)
    // if (\strlen($hash) == 60) == false (line 237)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == false (line 241)
    // if (\strlen($random) < 6) == true (line 250)
    // if (\strlen($hash) == 34) == true (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword18()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == true (line 233)
    // if (\strlen($hash) == 60) == false (line 237)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == true (line 241)
    // if (\strlen($random) < 3) == false (line 242)
    // if (\strlen($hash) == 20) == false (line 246)
    // if (\strlen($random) < 6) == false (line 250)
    // if (\strlen($hash) == 34) == false (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword19()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == true (line 233)
    // if (\strlen($hash) == 60) == false (line 237)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == true (line 241)
    // if (\strlen($random) < 3) == false (line 242)
    // if (\strlen($hash) == 20) == false (line 246)
    // if (\strlen($random) < 6) == false (line 250)
    // if (\strlen($hash) == 34) == true (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword20()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == true (line 233)
    // if (\strlen($hash) == 60) == false (line 237)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == true (line 241)
    // if (\strlen($random) < 3) == false (line 242)
    // if (\strlen($hash) == 20) == false (line 246)
    // if (\strlen($random) < 6) == true (line 250)
    // if (\strlen($hash) == 34) == false (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword21()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == true (line 233)
    // if (\strlen($hash) == 60) == false (line 237)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == true (line 241)
    // if (\strlen($random) < 3) == false (line 242)
    // if (\strlen($hash) == 20) == false (line 246)
    // if (\strlen($random) < 6) == true (line 250)
    // if (\strlen($hash) == 34) == true (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword22()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == true (line 233)
    // if (\strlen($hash) == 60) == false (line 237)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == true (line 241)
    // if (\strlen($random) < 3) == false (line 242)
    // if (\strlen($hash) == 20) == true (line 246)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword23()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == true (line 233)
    // if (\strlen($hash) == 60) == false (line 237)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == true (line 241)
    // if (\strlen($random) < 3) == true (line 242)
    // if (\strlen($hash) == 20) == false (line 246)
    // if (\strlen($random) < 6) == false (line 250)
    // if (\strlen($hash) == 34) == false (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword24()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == true (line 233)
    // if (\strlen($hash) == 60) == false (line 237)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == true (line 241)
    // if (\strlen($random) < 3) == true (line 242)
    // if (\strlen($hash) == 20) == false (line 246)
    // if (\strlen($random) < 6) == false (line 250)
    // if (\strlen($hash) == 34) == true (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword25()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == true (line 233)
    // if (\strlen($hash) == 60) == false (line 237)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == true (line 241)
    // if (\strlen($random) < 3) == true (line 242)
    // if (\strlen($hash) == 20) == false (line 246)
    // if (\strlen($random) < 6) == true (line 250)
    // if (\strlen($hash) == 34) == false (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword26()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == true (line 233)
    // if (\strlen($hash) == 60) == false (line 237)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == true (line 241)
    // if (\strlen($random) < 3) == true (line 242)
    // if (\strlen($hash) == 20) == false (line 246)
    // if (\strlen($random) < 6) == true (line 250)
    // if (\strlen($hash) == 34) == true (line 255)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword27()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == true (line 233)
    // if (\strlen($hash) == 60) == false (line 237)
    // if (\CRYPT_EXT_DES == 1 && !$this->portable_hashes) == true (line 241)
    // if (\strlen($random) < 3) == true (line 242)
    // if (\strlen($hash) == 20) == true (line 246)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword28()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 227)
    // if (\CRYPT_BLOWFISH == 1 && !$this->portable_hashes) == true (line 233)
    // if (\strlen($hash) == 60) == true (line 237)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHashPassword29()
{
    $password = m::mock('UntypedParameter_password_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == true (line 227)

    $actual = $this->passwordHash->HashPassword($password);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheckPassword0()
{
    $password = m::mock('UntypedParameter_password_');
    $stored_hash = m::mock('UntypedParameter_stored_hash_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 266)
    // if ($hash[0] == '*') == false (line 271)

    $actual = $this->passwordHash->CheckPassword($password, $stored_hash);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheckPassword1()
{
    $password = m::mock('UntypedParameter_password_');
    $stored_hash = m::mock('UntypedParameter_stored_hash_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == false (line 266)
    // if ($hash[0] == '*') == true (line 271)

    $actual = $this->passwordHash->CheckPassword($password, $stored_hash);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheckPassword2()
{
    $password = m::mock('UntypedParameter_password_');
    $stored_hash = m::mock('UntypedParameter_stored_hash_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($password) > 4096) == true (line 266)

    $actual = $this->passwordHash->CheckPassword($password, $stored_hash);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
