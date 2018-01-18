<?php

namespace tests\Ramsey\Uuid\Provider\Node;

use Mockery as m;
use Ramsey\Uuid\Provider\Node\FallbackNodeProvider;

class FallbackNodeProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_providers = [];
/**
* @var \Ramsey\Uuid\Provider\Node\FallbackNodeProvider
*/
protected $fallbackNodeProvider;

public function setUp()
{
    parent::setUp();

    $this->_providers = [];
    $this->fallbackNodeProvider = new \Ramsey\Uuid\Provider\Node\FallbackNodeProvider($this->_providers);
}

public function testGetNode0()
{
    // TODO: Your mock expectations here

    $actual = $this->fallbackNodeProvider->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNode1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node = $provider->getNode()) == false (line 50)

    $actual = $this->fallbackNodeProvider->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNode2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node = $provider->getNode()) == true (line 50)

    $actual = $this->fallbackNodeProvider->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
