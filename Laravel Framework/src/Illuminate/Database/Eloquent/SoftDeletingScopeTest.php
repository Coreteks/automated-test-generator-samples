<?php

namespace tests\Illuminate\Database\Eloquent;

use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mockery as m;

class SoftDeletingScopeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Eloquent\SoftDeletingScope
*/
protected $softDeletingScope;

public function setUp()
{
    parent::setUp();

    $this->softDeletingScope = new \Illuminate\Database\Eloquent\SoftDeletingScope();
}

public function testApply0()
{
    $builder = m::mock(\Illuminate\Database\Eloquent\Builder::class);
    $model = m::mock(\Illuminate\Database\Eloquent\Model::class);

    // TODO: Your mock expectations here

    $actual = $this->softDeletingScope->apply($builder, $model);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtend0()
{
    $builder = m::mock(\Illuminate\Database\Eloquent\Builder::class);

    // TODO: Your mock expectations here

    $actual = $this->softDeletingScope->extend($builder);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtend1()
{
    $builder = m::mock(\Illuminate\Database\Eloquent\Builder::class);

    // TODO: Your mock expectations here

    $actual = $this->softDeletingScope->extend($builder);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
