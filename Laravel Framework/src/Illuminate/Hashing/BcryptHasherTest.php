<?php

namespace tests\Illuminate\Hashing;

use Illuminate\Hashing\BcryptHasher;
use Mockery as m;

class BcryptHasherTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Hashing\BcryptHasher
*/
protected $bcryptHasher;

public function setUp()
{
    parent::setUp();

    $this->bcryptHasher = new \Illuminate\Hashing\BcryptHasher();
}

public function testMake0()
{
    $value = m::mock('UntypedParameter_value_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($hash === false) == false (line 32)

    $actual = $this->bcryptHasher->make($value, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testMake1()
{
    $value = m::mock('UntypedParameter_value_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($hash === false) == true (line 32)
    // throw new \RuntimeException('Bcrypt hashing not supported.') -> exception (line 33)

    $actual = $this->bcryptHasher->make($value, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck0()
{
    $value = m::mock('UntypedParameter_value_');
    $hashedValue = m::mock('UntypedParameter_hashedValue_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strlen($hashedValue) === 0) == false (line 49)

    $actual = $this->bcryptHasher->check($value, $hashedValue, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck1()
{
    $value = m::mock('UntypedParameter_value_');
    $hashedValue = m::mock('UntypedParameter_hashedValue_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strlen($hashedValue) === 0) == true (line 49)

    $actual = $this->bcryptHasher->check($value, $hashedValue, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNeedsRehash0()
{
    $hashedValue = m::mock('UntypedParameter_hashedValue_');
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->bcryptHasher->needsRehash($hashedValue, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRounds0()
{
    $rounds = m::mock('UntypedParameter_rounds_');

    // TODO: Your mock expectations here

    $actual = $this->bcryptHasher->setRounds($rounds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
