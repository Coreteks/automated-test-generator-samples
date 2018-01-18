<?php

namespace tests\PHPUnit\Runner\Filter;

use Mockery as m;
use PHPUnit\Runner\Filter\NameFilterIterator;
use RecursiveIterator;

class NameFilterIteratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_iterator;
/**
* @var mixed
*/
protected $_filter = null;
/**
* @var \PHPUnit\Runner\Filter\NameFilterIterator
*/
protected $nameFilterIterator;

public function setUp()
{
    parent::setUp();

    $this->_iterator = m::mock(\RecursiveIterator::class);
    $this->_filter = null;
    $this->nameFilterIterator = new \PHPUnit\Runner\Filter\NameFilterIterator($this->_iterator, $this->_filter);
}

public function testAccept0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestSuite) == false (line 54)
    // if ($test instanceof \PHPUnit\Framework\WarningTestCase) == false (line 60)
    // if ($tmp[0] != '') == false (line 63)
    // if ($accepted && isset($this->filterMax)) == false (line 72)

    $actual = $this->nameFilterIterator->accept();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestSuite) == false (line 54)
    // if ($test instanceof \PHPUnit\Framework\WarningTestCase) == false (line 60)
    // if ($tmp[0] != '') == false (line 63)
    // if ($accepted && isset($this->filterMax)) == true (line 72)

    $actual = $this->nameFilterIterator->accept();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestSuite) == false (line 54)
    // if ($test instanceof \PHPUnit\Framework\WarningTestCase) == false (line 60)
    // if ($tmp[0] != '') == true (line 63)
    // if ($accepted && isset($this->filterMax)) == false (line 72)

    $actual = $this->nameFilterIterator->accept();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestSuite) == false (line 54)
    // if ($test instanceof \PHPUnit\Framework\WarningTestCase) == false (line 60)
    // if ($tmp[0] != '') == true (line 63)
    // if ($accepted && isset($this->filterMax)) == true (line 72)

    $actual = $this->nameFilterIterator->accept();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestSuite) == false (line 54)
    // if ($test instanceof \PHPUnit\Framework\WarningTestCase) == true (line 60)
    // if ($accepted && isset($this->filterMax)) == false (line 72)

    $actual = $this->nameFilterIterator->accept();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestSuite) == false (line 54)
    // if ($test instanceof \PHPUnit\Framework\WarningTestCase) == true (line 60)
    // if ($accepted && isset($this->filterMax)) == true (line 72)

    $actual = $this->nameFilterIterator->accept();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestSuite) == true (line 54)

    $actual = $this->nameFilterIterator->accept();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
