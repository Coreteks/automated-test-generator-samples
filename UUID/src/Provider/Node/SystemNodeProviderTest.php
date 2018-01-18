<?php

namespace tests\Ramsey\Uuid\Provider\Node;

use Mockery as m;
use Ramsey\Uuid\Provider\Node\SystemNodeProvider;

class SystemNodeProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Provider\Node\SystemNodeProvider
*/
protected $systemNodeProvider;

public function setUp()
{
    parent::setUp();

    $this->systemNodeProvider = new \Ramsey\Uuid\Provider\Node\SystemNodeProvider();
}

public function testGetNode0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node !== null) == false (line 34)
    // if ($node === false) == false (line 46)
    // if ($node !== false) == false (line 51)

    $actual = $this->systemNodeProvider->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNode1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node !== null) == false (line 34)
    // if ($node === false) == false (line 46)
    // if ($node !== false) == true (line 51)

    $actual = $this->systemNodeProvider->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNode2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node !== null) == false (line 34)
    // if ($node === false) == true (line 46)
    // if (preg_match_all($pattern, $this->getIfconfig(), $matches, PREG_PATTERN_ORDER)) == false (line 47)
    // if ($node !== false) == false (line 51)

    $actual = $this->systemNodeProvider->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNode3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node !== null) == false (line 34)
    // if ($node === false) == true (line 46)
    // if (preg_match_all($pattern, $this->getIfconfig(), $matches, PREG_PATTERN_ORDER)) == false (line 47)
    // if ($node !== false) == true (line 51)

    $actual = $this->systemNodeProvider->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNode4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node !== null) == false (line 34)
    // if ($node === false) == true (line 46)
    // if (preg_match_all($pattern, $this->getIfconfig(), $matches, PREG_PATTERN_ORDER)) == true (line 47)
    // if ($node !== false) == false (line 51)

    $actual = $this->systemNodeProvider->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNode5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node !== null) == false (line 34)
    // if ($node === false) == true (line 46)
    // if (preg_match_all($pattern, $this->getIfconfig(), $matches, PREG_PATTERN_ORDER)) == true (line 47)
    // if ($node !== false) == true (line 51)

    $actual = $this->systemNodeProvider->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNode6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node !== null) == true (line 34)

    $actual = $this->systemNodeProvider->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
