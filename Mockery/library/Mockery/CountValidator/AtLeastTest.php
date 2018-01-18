<?php

namespace tests\Mockery\CountValidator;

use Mockery as m;
use Mockery\CountValidator\AtLeast;

class AtLeastTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\CountValidator\AtLeast
*/
protected $atLeast;

public function setUp()
{
    parent::setUp();

    $this->atLeast = new \Mockery\CountValidator\AtLeast();
}

public function testIsEligible0()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    $actual = $this->atLeast->isEligible($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate0()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_limit > $n) == false (line 46)

    $actual = $this->atLeast->validate($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testValidate1()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_limit > $n) == true (line 46)
    // throw $exception -> exception (line 59)

    $actual = $this->atLeast->validate($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
