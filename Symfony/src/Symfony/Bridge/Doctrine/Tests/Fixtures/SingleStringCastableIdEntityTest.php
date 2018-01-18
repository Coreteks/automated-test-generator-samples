<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\StringCastableObjectIdentity;

class StringCastableObjectIdentityTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_id = null;
/**
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\StringCastableObjectIdentity
*/
protected $stringCastableObjectIdentity;

public function setUp()
{
    parent::setUp();

    $this->_id = null;
    $this->stringCastableObjectIdentity = new \Symfony\Bridge\Doctrine\Tests\Fixtures\StringCastableObjectIdentity($this->_id);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->stringCastableObjectIdentity->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
