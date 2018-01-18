<?php

namespace tests\Mockery\CountValidator;

use Mockery as m;
use Mockery\CountValidator\Exact;

class ExactTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\CountValidator\Exact
*/
protected $exact;

public function setUp()
{
    parent::setUp();

    $this->exact = new \Mockery\CountValidator\Exact();
}

public function testValidate0()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_limit !== $n) == false (line 35)

    $actual = $this->exact->validate($n);
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
    // if ($this->_limit !== $n) == true (line 35)
    // throw $exception -> exception (line 51)

    $actual = $this->exact->validate($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
