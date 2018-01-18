<?php

namespace tests\Illuminate\Database\Eloquent\Relations;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Mockery as m;

class PivotTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Eloquent\Relations\Pivot
*/
protected $pivot;

public function setUp()
{
    parent::setUp();

    $this->pivot = new \Illuminate\Database\Eloquent\Relations\Pivot();
}

public function testFromAttributes0()
{
    $parent = m::mock(\Illuminate\Database\Eloquent\Model::class);
    $attributes = m::mock('UntypedParameter_attributes_');
    $table = m::mock('UntypedParameter_table_');
    $exists = m::mock('UntypedParameter_exists_');

    // TODO: Your mock expectations here

    $actual = $this->pivot->fromAttributes($parent, $attributes, $table, $exists);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromRawAttributes0()
{
    $parent = m::mock(\Illuminate\Database\Eloquent\Model::class);
    $attributes = m::mock('UntypedParameter_attributes_');
    $table = m::mock('UntypedParameter_table_');
    $exists = m::mock('UntypedParameter_exists_');

    // TODO: Your mock expectations here

    $actual = $this->pivot->fromRawAttributes($parent, $attributes, $table, $exists);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->attributes[$this->getKeyName()])) == false (line 114)

    $actual = $this->pivot->delete();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->attributes[$this->getKeyName()])) == true (line 114)

    $actual = $this->pivot->delete();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTable0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->table)) == false (line 141)

    $actual = $this->pivot->getTable();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTable1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->table)) == true (line 141)

    $actual = $this->pivot->getTable();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetForeignKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->pivot->getForeignKey();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRelatedKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->pivot->getRelatedKey();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetOtherKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->pivot->getOtherKey();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetPivotKeys0()
{
    $foreignKey = m::mock('UntypedParameter_foreignKey_');
    $relatedKey = m::mock('UntypedParameter_relatedKey_');

    // TODO: Your mock expectations here

    $actual = $this->pivot->setPivotKeys($foreignKey, $relatedKey);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasTimestampAttributes0()
{
    // TODO: Your mock expectations here

    $actual = $this->pivot->hasTimestampAttributes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCreatedAtColumn0()
{
    // TODO: Your mock expectations here

    $actual = $this->pivot->getCreatedAtColumn();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUpdatedAtColumn0()
{
    // TODO: Your mock expectations here

    $actual = $this->pivot->getUpdatedAtColumn();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
