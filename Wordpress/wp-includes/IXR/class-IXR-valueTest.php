<?php

namespace tests;

use IXR_Value;
use Mockery as m;

class IXR_ValueTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_data = null;
/**
* @var mixed
*/
protected $_type = null;
/**
* @var \IXR_Value
*/
protected $iXR_Value;

public function setUp()
{
    parent::setUp();

    $this->_data = null;
    $this->_type = null;
    $this->iXR_Value = new \IXR_Value($this->_data, $this->_type);
}

public function testIXR_Value0()
{
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    $actual = $this->iXR_Value->IXR_Value($data, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCalculateType0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->data === \true || $this->data === \false) == false (line 44)
    // if (\is_integer($this->data)) == false (line 47)
    // if (\is_double($this->data)) == false (line 50)
    // if (\is_object($this->data) && \is_a($this->data, 'IXR_Date')) == false (line 55)
    // if (\is_object($this->data) && \is_a($this->data, 'IXR_Base64')) == false (line 58)
    // if (\is_object($this->data)) == false (line 63)
    // if (!\is_array($this->data)) == false (line 67)
    // if ($this->isStruct($this->data)) == false (line 72)

    $actual = $this->iXR_Value->calculateType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCalculateType1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->data === \true || $this->data === \false) == false (line 44)
    // if (\is_integer($this->data)) == false (line 47)
    // if (\is_double($this->data)) == false (line 50)
    // if (\is_object($this->data) && \is_a($this->data, 'IXR_Date')) == false (line 55)
    // if (\is_object($this->data) && \is_a($this->data, 'IXR_Base64')) == false (line 58)
    // if (\is_object($this->data)) == false (line 63)
    // if (!\is_array($this->data)) == false (line 67)
    // if ($this->isStruct($this->data)) == true (line 72)

    $actual = $this->iXR_Value->calculateType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCalculateType2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->data === \true || $this->data === \false) == false (line 44)
    // if (\is_integer($this->data)) == false (line 47)
    // if (\is_double($this->data)) == false (line 50)
    // if (\is_object($this->data) && \is_a($this->data, 'IXR_Date')) == false (line 55)
    // if (\is_object($this->data) && \is_a($this->data, 'IXR_Base64')) == false (line 58)
    // if (\is_object($this->data)) == false (line 63)
    // if (!\is_array($this->data)) == true (line 67)

    $actual = $this->iXR_Value->calculateType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCalculateType3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->data === \true || $this->data === \false) == false (line 44)
    // if (\is_integer($this->data)) == false (line 47)
    // if (\is_double($this->data)) == false (line 50)
    // if (\is_object($this->data) && \is_a($this->data, 'IXR_Date')) == false (line 55)
    // if (\is_object($this->data) && \is_a($this->data, 'IXR_Base64')) == false (line 58)
    // if (\is_object($this->data)) == true (line 63)

    $actual = $this->iXR_Value->calculateType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCalculateType4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->data === \true || $this->data === \false) == false (line 44)
    // if (\is_integer($this->data)) == false (line 47)
    // if (\is_double($this->data)) == false (line 50)
    // if (\is_object($this->data) && \is_a($this->data, 'IXR_Date')) == false (line 55)
    // if (\is_object($this->data) && \is_a($this->data, 'IXR_Base64')) == true (line 58)

    $actual = $this->iXR_Value->calculateType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCalculateType5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->data === \true || $this->data === \false) == false (line 44)
    // if (\is_integer($this->data)) == false (line 47)
    // if (\is_double($this->data)) == false (line 50)
    // if (\is_object($this->data) && \is_a($this->data, 'IXR_Date')) == true (line 55)

    $actual = $this->iXR_Value->calculateType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCalculateType6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->data === \true || $this->data === \false) == false (line 44)
    // if (\is_integer($this->data)) == false (line 47)
    // if (\is_double($this->data)) == true (line 50)

    $actual = $this->iXR_Value->calculateType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCalculateType7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->data === \true || $this->data === \false) == false (line 44)
    // if (\is_integer($this->data)) == true (line 47)

    $actual = $this->iXR_Value->calculateType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCalculateType8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->data === \true || $this->data === \false) == true (line 44)

    $actual = $this->iXR_Value->calculateType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetXml0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->type) (line 82)
    // Case 'boolean' == false (line 83)
    // Case 'int' == false (line 86)
    // Case 'double' == false (line 89)
    // Case 'string' == false (line 92)
    // Case 'array' == false (line 95)
    // Case 'struct' == false (line 103)
    // Case 'date' == false (line 113)
    // Case 'base64' == false (line 114)

    $actual = $this->iXR_Value->getXml();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetXml1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->type) (line 82)
    // Case 'boolean' == false (line 83)
    // Case 'int' == false (line 86)
    // Case 'double' == false (line 89)
    // Case 'string' == false (line 92)
    // Case 'array' == false (line 95)
    // Case 'struct' == false (line 103)
    // Case 'date' == false (line 113)
    // Case 'base64' == true (line 114)

    $actual = $this->iXR_Value->getXml();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetXml2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->type) (line 82)
    // Case 'boolean' == false (line 83)
    // Case 'int' == false (line 86)
    // Case 'double' == false (line 89)
    // Case 'string' == false (line 92)
    // Case 'array' == false (line 95)
    // Case 'struct' == false (line 103)
    // Case 'date' == true (line 113)

    $actual = $this->iXR_Value->getXml();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetXml3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->type) (line 82)
    // Case 'boolean' == false (line 83)
    // Case 'int' == false (line 86)
    // Case 'double' == false (line 89)
    // Case 'string' == false (line 92)
    // Case 'array' == false (line 95)
    // Case 'struct' == true (line 103)

    $actual = $this->iXR_Value->getXml();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetXml4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->type) (line 82)
    // Case 'boolean' == false (line 83)
    // Case 'int' == false (line 86)
    // Case 'double' == false (line 89)
    // Case 'string' == false (line 92)
    // Case 'array' == false (line 95)
    // Case 'struct' == true (line 103)

    $actual = $this->iXR_Value->getXml();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetXml5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->type) (line 82)
    // Case 'boolean' == false (line 83)
    // Case 'int' == false (line 86)
    // Case 'double' == false (line 89)
    // Case 'string' == false (line 92)
    // Case 'array' == true (line 95)

    $actual = $this->iXR_Value->getXml();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetXml6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->type) (line 82)
    // Case 'boolean' == false (line 83)
    // Case 'int' == false (line 86)
    // Case 'double' == false (line 89)
    // Case 'string' == false (line 92)
    // Case 'array' == true (line 95)

    $actual = $this->iXR_Value->getXml();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetXml7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->type) (line 82)
    // Case 'boolean' == false (line 83)
    // Case 'int' == false (line 86)
    // Case 'double' == false (line 89)
    // Case 'string' == true (line 92)

    $actual = $this->iXR_Value->getXml();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetXml8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->type) (line 82)
    // Case 'boolean' == false (line 83)
    // Case 'int' == false (line 86)
    // Case 'double' == true (line 89)

    $actual = $this->iXR_Value->getXml();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetXml9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->type) (line 82)
    // Case 'boolean' == false (line 83)
    // Case 'int' == true (line 86)

    $actual = $this->iXR_Value->getXml();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetXml10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->type) (line 82)
    // Case 'boolean' == true (line 83)

    $actual = $this->iXR_Value->getXml();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsStruct0()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    $actual = $this->iXR_Value->isStruct($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsStruct1()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ((string) $key !== (string) $expected) == false (line 131)

    $actual = $this->iXR_Value->isStruct($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsStruct2()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ((string) $key !== (string) $expected) == true (line 131)

    $actual = $this->iXR_Value->isStruct($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
