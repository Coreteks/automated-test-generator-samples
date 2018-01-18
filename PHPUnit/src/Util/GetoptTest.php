<?php

namespace tests\PHPUnit\Util;

use Mockery as m;
use PHPUnit\Util\Getopt;

class GetoptTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Util\Getopt
*/
protected $getopt;

public function setUp()
{
    parent::setUp();

    $this->getopt = new \PHPUnit\Util\Getopt();
}

public function testGetopt0()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == false (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == false (line 41)
    // while (false !== ($arg = \current($args))) == false (line 50)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt1()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == false (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == false (line 41)
    // while (false !== ($arg = \current($args))) == true (line 50)
    // if ($arg === '') == false (line 54)
    // if ($arg === '--') == false (line 58)
    // if ($arg[0] !== '-' || \strlen($arg) > 1 && $arg[1] === '-' && !$long_options) == false (line 64)
    // if (\strlen($arg) > 1 && $arg[1] === '-') == false (line 69)
    // while (false !== ($arg = \current($args))) == false (line 50)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt2()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == false (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == false (line 41)
    // while (false !== ($arg = \current($args))) == true (line 50)
    // if ($arg === '') == false (line 54)
    // if ($arg === '--') == false (line 58)
    // if ($arg[0] !== '-' || \strlen($arg) > 1 && $arg[1] === '-' && !$long_options) == false (line 64)
    // if (\strlen($arg) > 1 && $arg[1] === '-') == true (line 69)
    // while (false !== ($arg = \current($args))) == false (line 50)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt3()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == false (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == false (line 41)
    // while (false !== ($arg = \current($args))) == true (line 50)
    // if ($arg === '') == false (line 54)
    // if ($arg === '--') == false (line 58)
    // if ($arg[0] !== '-' || \strlen($arg) > 1 && $arg[1] === '-' && !$long_options) == true (line 64)
    // while (false !== ($arg = \current($args))) == false (line 50)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt4()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == false (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == false (line 41)
    // while (false !== ($arg = \current($args))) == true (line 50)
    // if ($arg === '') == false (line 54)
    // if ($arg === '--') == true (line 58)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt5()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == false (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == false (line 41)
    // while (false !== ($arg = \current($args))) == true (line 50)
    // if ($arg === '') == true (line 54)
    // while (false !== ($arg = \current($args))) == false (line 50)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt6()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == false (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == true (line 41)
    // while (false !== ($arg = \current($args))) == false (line 50)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt7()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == false (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == true (line 41)
    // while (false !== ($arg = \current($args))) == true (line 50)
    // if ($arg === '') == false (line 54)
    // if ($arg === '--') == false (line 58)
    // if ($arg[0] !== '-' || \strlen($arg) > 1 && $arg[1] === '-' && !$long_options) == false (line 64)
    // if (\strlen($arg) > 1 && $arg[1] === '-') == false (line 69)
    // while (false !== ($arg = \current($args))) == false (line 50)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt8()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == false (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == true (line 41)
    // while (false !== ($arg = \current($args))) == true (line 50)
    // if ($arg === '') == false (line 54)
    // if ($arg === '--') == false (line 58)
    // if ($arg[0] !== '-' || \strlen($arg) > 1 && $arg[1] === '-' && !$long_options) == false (line 64)
    // if (\strlen($arg) > 1 && $arg[1] === '-') == true (line 69)
    // while (false !== ($arg = \current($args))) == false (line 50)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt9()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == false (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == true (line 41)
    // while (false !== ($arg = \current($args))) == true (line 50)
    // if ($arg === '') == false (line 54)
    // if ($arg === '--') == false (line 58)
    // if ($arg[0] !== '-' || \strlen($arg) > 1 && $arg[1] === '-' && !$long_options) == true (line 64)
    // while (false !== ($arg = \current($args))) == false (line 50)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt10()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == false (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == true (line 41)
    // while (false !== ($arg = \current($args))) == true (line 50)
    // if ($arg === '') == false (line 54)
    // if ($arg === '--') == true (line 58)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt11()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == false (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == true (line 41)
    // while (false !== ($arg = \current($args))) == true (line 50)
    // if ($arg === '') == true (line 54)
    // while (false !== ($arg = \current($args))) == false (line 50)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt12()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == true (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == false (line 41)
    // while (false !== ($arg = \current($args))) == false (line 50)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt13()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == true (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == false (line 41)
    // while (false !== ($arg = \current($args))) == true (line 50)
    // if ($arg === '') == false (line 54)
    // if ($arg === '--') == false (line 58)
    // if ($arg[0] !== '-' || \strlen($arg) > 1 && $arg[1] === '-' && !$long_options) == false (line 64)
    // if (\strlen($arg) > 1 && $arg[1] === '-') == false (line 69)
    // while (false !== ($arg = \current($args))) == false (line 50)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt14()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == true (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == false (line 41)
    // while (false !== ($arg = \current($args))) == true (line 50)
    // if ($arg === '') == false (line 54)
    // if ($arg === '--') == false (line 58)
    // if ($arg[0] !== '-' || \strlen($arg) > 1 && $arg[1] === '-' && !$long_options) == false (line 64)
    // if (\strlen($arg) > 1 && $arg[1] === '-') == true (line 69)
    // while (false !== ($arg = \current($args))) == false (line 50)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt15()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == true (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == false (line 41)
    // while (false !== ($arg = \current($args))) == true (line 50)
    // if ($arg === '') == false (line 54)
    // if ($arg === '--') == false (line 58)
    // if ($arg[0] !== '-' || \strlen($arg) > 1 && $arg[1] === '-' && !$long_options) == true (line 64)
    // while (false !== ($arg = \current($args))) == false (line 50)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt16()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == true (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == false (line 41)
    // while (false !== ($arg = \current($args))) == true (line 50)
    // if ($arg === '') == false (line 54)
    // if ($arg === '--') == true (line 58)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt17()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == true (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == false (line 41)
    // while (false !== ($arg = \current($args))) == true (line 50)
    // if ($arg === '') == true (line 54)
    // while (false !== ($arg = \current($args))) == false (line 50)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt18()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == true (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == true (line 41)
    // while (false !== ($arg = \current($args))) == false (line 50)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt19()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == true (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == true (line 41)
    // while (false !== ($arg = \current($args))) == true (line 50)
    // if ($arg === '') == false (line 54)
    // if ($arg === '--') == false (line 58)
    // if ($arg[0] !== '-' || \strlen($arg) > 1 && $arg[1] === '-' && !$long_options) == false (line 64)
    // if (\strlen($arg) > 1 && $arg[1] === '-') == false (line 69)
    // while (false !== ($arg = \current($args))) == false (line 50)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt20()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == true (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == true (line 41)
    // while (false !== ($arg = \current($args))) == true (line 50)
    // if ($arg === '') == false (line 54)
    // if ($arg === '--') == false (line 58)
    // if ($arg[0] !== '-' || \strlen($arg) > 1 && $arg[1] === '-' && !$long_options) == false (line 64)
    // if (\strlen($arg) > 1 && $arg[1] === '-') == true (line 69)
    // while (false !== ($arg = \current($args))) == false (line 50)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt21()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == true (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == true (line 41)
    // while (false !== ($arg = \current($args))) == true (line 50)
    // if ($arg === '') == false (line 54)
    // if ($arg === '--') == false (line 58)
    // if ($arg[0] !== '-' || \strlen($arg) > 1 && $arg[1] === '-' && !$long_options) == true (line 64)
    // while (false !== ($arg = \current($args))) == false (line 50)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt22()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == true (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == true (line 41)
    // while (false !== ($arg = \current($args))) == true (line 50)
    // if ($arg === '') == false (line 54)
    // if ($arg === '--') == true (line 58)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt23()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 30)
    // if ($long_options) == true (line 37)
    // if (isset($args[0][0]) && $args[0][0] !== '-') == true (line 41)
    // while (false !== ($arg = \current($args))) == true (line 50)
    // if ($arg === '') == true (line 54)
    // while (false !== ($arg = \current($args))) == false (line 50)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetopt24()
{
    $args = [];
    $short_options = m::mock('UntypedParameter_short_options_');
    $long_options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == true (line 30)

    $actual = $this->getopt->getopt($args, $short_options, $long_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
