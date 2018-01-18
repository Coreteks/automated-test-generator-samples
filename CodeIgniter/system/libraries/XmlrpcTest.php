<?php

namespace tests;

use Mockery as m;
use XML_RPC_Values;

class XML_RPC_ValuesTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_val = null;
/**
* @var mixed
*/
protected $_type = null;
/**
* @var \XML_RPC_Values
*/
protected $xML_RPC_Values;

public function setUp()
{
    parent::setUp();

    $this->_val = null;
    $this->_type = null;
    $this->xML_RPC_Values = new \XML_RPC_Values($this->_val, $this->_type);
}

public function testAddScalar0()
{
    $val = m::mock('UntypedParameter_val_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mytype === 1) == false (line 1713)
    // if ($typeof != 1) == false (line 1719)
    // if ($type === $this->xmlrpcBoolean) == false (line 1725)
    // if ($this->mytype === 2) == false (line 1730)

    $actual = $this->xML_RPC_Values->addScalar($val, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddScalar1()
{
    $val = m::mock('UntypedParameter_val_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mytype === 1) == false (line 1713)
    // if ($typeof != 1) == false (line 1719)
    // if ($type === $this->xmlrpcBoolean) == false (line 1725)
    // if ($this->mytype === 2) == true (line 1730)

    $actual = $this->xML_RPC_Values->addScalar($val, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddScalar2()
{
    $val = m::mock('UntypedParameter_val_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mytype === 1) == false (line 1713)
    // if ($typeof != 1) == false (line 1719)
    // if ($type === $this->xmlrpcBoolean) == true (line 1725)
    // if ($this->mytype === 2) == false (line 1730)

    $actual = $this->xML_RPC_Values->addScalar($val, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddScalar3()
{
    $val = m::mock('UntypedParameter_val_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mytype === 1) == false (line 1713)
    // if ($typeof != 1) == false (line 1719)
    // if ($type === $this->xmlrpcBoolean) == true (line 1725)
    // if ($this->mytype === 2) == true (line 1730)

    $actual = $this->xML_RPC_Values->addScalar($val, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddScalar4()
{
    $val = m::mock('UntypedParameter_val_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mytype === 1) == false (line 1713)
    // if ($typeof != 1) == true (line 1719)

    $actual = $this->xML_RPC_Values->addScalar($val, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddScalar5()
{
    $val = m::mock('UntypedParameter_val_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mytype === 1) == true (line 1713)

    $actual = $this->xML_RPC_Values->addScalar($val, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddArray0()
{
    $vals = m::mock('UntypedParameter_vals_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mytype !== 0) == false (line 1757)

    $actual = $this->xML_RPC_Values->addArray($vals);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddArray1()
{
    $vals = m::mock('UntypedParameter_vals_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mytype !== 0) == true (line 1757)

    $actual = $this->xML_RPC_Values->addArray($vals);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddStruct0()
{
    $vals = m::mock('UntypedParameter_vals_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mytype !== 0) == false (line 1778)

    $actual = $this->xML_RPC_Values->addStruct($vals);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddStruct1()
{
    $vals = m::mock('UntypedParameter_vals_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mytype !== 0) == true (line 1778)

    $actual = $this->xML_RPC_Values->addStruct($vals);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKindOf0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->mytype) (line 1797)
    // Case 3 == false (line 1799)
    // Case 2 == false (line 1800)
    // Case 1 == false (line 1801)
    // Default (line 1802)

    $actual = $this->xML_RPC_Values->kindOf();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKindOf1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->mytype) (line 1797)
    // Case 3 == false (line 1799)
    // Case 2 == false (line 1800)
    // Case 1 == true (line 1801)

    $actual = $this->xML_RPC_Values->kindOf();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKindOf2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->mytype) (line 1797)
    // Case 3 == false (line 1799)
    // Case 2 == true (line 1800)

    $actual = $this->xML_RPC_Values->kindOf();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKindOf3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->mytype) (line 1797)
    // Case 3 == true (line 1799)

    $actual = $this->xML_RPC_Values->kindOf();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSerializedata0()
{
    $typ = m::mock('UntypedParameter_typ_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->xmlrpcTypes[$typ]) (line 1819)
    // Case 3 == false (line 1821)
    // Case 2 == false (line 1831)
    // Case 1 == false (line 1840)
    // Default (line 1857)

    $actual = $this->xML_RPC_Values->serializedata($typ, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSerializedata1()
{
    $typ = m::mock('UntypedParameter_typ_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->xmlrpcTypes[$typ]) (line 1819)
    // Case 3 == false (line 1821)
    // Case 2 == false (line 1831)
    // Case 1 == true (line 1840)
    // switch ($typ) (line 1842)
    // Case $this->xmlrpcBase64 == false (line 1844)
    // Case $this->xmlrpcBoolean == false (line 1847)
    // Case $this->xmlrpcString == false (line 1850)
    // Default (line 1853)

    $actual = $this->xML_RPC_Values->serializedata($typ, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSerializedata2()
{
    $typ = m::mock('UntypedParameter_typ_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->xmlrpcTypes[$typ]) (line 1819)
    // Case 3 == false (line 1821)
    // Case 2 == false (line 1831)
    // Case 1 == true (line 1840)
    // switch ($typ) (line 1842)
    // Case $this->xmlrpcBase64 == false (line 1844)
    // Case $this->xmlrpcBoolean == false (line 1847)
    // Case $this->xmlrpcString == true (line 1850)

    $actual = $this->xML_RPC_Values->serializedata($typ, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSerializedata3()
{
    $typ = m::mock('UntypedParameter_typ_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->xmlrpcTypes[$typ]) (line 1819)
    // Case 3 == false (line 1821)
    // Case 2 == false (line 1831)
    // Case 1 == true (line 1840)
    // switch ($typ) (line 1842)
    // Case $this->xmlrpcBase64 == false (line 1844)
    // Case $this->xmlrpcBoolean == true (line 1847)

    $actual = $this->xML_RPC_Values->serializedata($typ, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSerializedata4()
{
    $typ = m::mock('UntypedParameter_typ_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->xmlrpcTypes[$typ]) (line 1819)
    // Case 3 == false (line 1821)
    // Case 2 == false (line 1831)
    // Case 1 == true (line 1840)
    // switch ($typ) (line 1842)
    // Case $this->xmlrpcBase64 == true (line 1844)

    $actual = $this->xML_RPC_Values->serializedata($typ, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSerializedata5()
{
    $typ = m::mock('UntypedParameter_typ_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->xmlrpcTypes[$typ]) (line 1819)
    // Case 3 == false (line 1821)
    // Case 2 == true (line 1831)
    // for (...) == false (line 1834)

    $actual = $this->xML_RPC_Values->serializedata($typ, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSerializedata6()
{
    $typ = m::mock('UntypedParameter_typ_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->xmlrpcTypes[$typ]) (line 1819)
    // Case 3 == false (line 1821)
    // Case 2 == true (line 1831)
    // for (...) == true (line 1834)
    // for (...) == false (line 1834)

    $actual = $this->xML_RPC_Values->serializedata($typ, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSerializedata7()
{
    $typ = m::mock('UntypedParameter_typ_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->xmlrpcTypes[$typ]) (line 1819)
    // Case 3 == true (line 1821)

    $actual = $this->xML_RPC_Values->serializedata($typ, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSerializedata8()
{
    $typ = m::mock('UntypedParameter_typ_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->xmlrpcTypes[$typ]) (line 1819)
    // Case 3 == true (line 1821)

    $actual = $this->xML_RPC_Values->serializedata($typ, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSerialize_class0()
{
    // TODO: Your mock expectations here

    $actual = $this->xML_RPC_Values->serialize_class();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSerializeval0()
{
    $o = m::mock('UntypedParameter_o_');

    // TODO: Your mock expectations here

    $actual = $this->xML_RPC_Values->serializeval($o);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testScalarval0()
{
    // TODO: Your mock expectations here

    $actual = $this->xML_RPC_Values->scalarval();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIso8601_encode0()
{
    $time = m::mock('UntypedParameter_time_');
    $utc = m::mock('UntypedParameter_utc_');

    // TODO: Your mock expectations here

    $actual = $this->xML_RPC_Values->iso8601_encode($time, $utc);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
