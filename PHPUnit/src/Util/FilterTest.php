<?php

namespace tests\PHPUnit\Util;

use Mockery as m;
use PHPUnit\Util\Filter;

class FilterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Util\Filter
*/
protected $filter;

public function setUp()
{
    parent::setUp();

    $this->filter = new \PHPUnit\Util\Filter();
}

public function testGetFilteredStacktrace0()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == false (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace1()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == false (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == false (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace2()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == false (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == true (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace3()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == false (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace4()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == false (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == false (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace5()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == false (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == true (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace6()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == true (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace7()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == true (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == false (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace8()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == true (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == true (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace9()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == true (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace10()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == true (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == false (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace11()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == true (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == true (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace12()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == true (line 32)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace13()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == true (line 32)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == false (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace14()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == true (line 32)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == true (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace15()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == true (line 32)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace16()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == true (line 32)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == false (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace17()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == true (line 32)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == true (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace18()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == true (line 28)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace19()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == true (line 28)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == false (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace20()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == true (line 28)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == true (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace21()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == true (line 28)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace22()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == true (line 28)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == false (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace23()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == false (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == true (line 28)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == true (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace24()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == false (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace25()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == false (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == false (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace26()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == false (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == true (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace27()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == false (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace28()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == false (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == false (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace29()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == false (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == true (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace30()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == true (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace31()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == true (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == false (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace32()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == true (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == true (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace33()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == true (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace34()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == true (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == false (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace35()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == false (line 32)
    // if ($t->getPrevious()) == true (line 37)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == true (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace36()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == true (line 32)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace37()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == true (line 32)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == false (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace38()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == true (line 32)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == true (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace39()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == true (line 32)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace40()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == true (line 32)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == false (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace41()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == false (line 28)
    // if ($t instanceof \PHPUnit\Framework\Exception) == true (line 32)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == true (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace42()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == true (line 28)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace43()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == true (line 28)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == false (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace44()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == true (line 28)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == false (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == true (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace45()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == true (line 28)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace46()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == true (line 28)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == false (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilteredStacktrace47()
{
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR_ROOT__')) == true (line 22)
    // if ($t instanceof \PHPUnit\Framework\SyntheticError) == true (line 28)
    // if (!self::frameExists($eTrace, $eFile, $eLine)) == true (line 46)
    // if (isset($frame['file']) && \is_file($frame['file']) && !$blacklist->isBlacklisted($frame['file']) && ($prefix === false || \strpos($frame['file'], $prefix) !== 0) && $frame['file'] !== $script) == true (line 56)

    $actual = $this->filter->getFilteredStacktrace($t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
