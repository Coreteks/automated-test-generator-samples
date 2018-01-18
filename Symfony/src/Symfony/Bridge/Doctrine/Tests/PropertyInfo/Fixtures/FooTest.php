<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures\Foo;

class FooTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures\Foo
*/
protected $foo;

public function setUp()
{
    parent::setUp();

    $this->foo = new \Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures\Foo();
}
}
