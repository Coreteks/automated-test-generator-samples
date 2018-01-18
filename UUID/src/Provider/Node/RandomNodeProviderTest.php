<?php

namespace tests\Ramsey\Uuid\Provider\Node;

use Mockery as m;
use Ramsey\Uuid\Provider\Node\RandomNodeProvider;

class RandomNodeProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Provider\Node\RandomNodeProvider
*/
protected $randomNodeProvider;

public function setUp()
{
    parent::setUp();

    $this->randomNodeProvider = new \Ramsey\Uuid\Provider\Node\RandomNodeProvider();
}

public function testGetNode0()
{
    // TODO: Your mock expectations here

    $actual = $this->randomNodeProvider->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
