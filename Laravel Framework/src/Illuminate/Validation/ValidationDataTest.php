<?php

namespace tests\Illuminate\Validation;

use Illuminate\Validation\ValidationData;
use Mockery as m;

class ValidationDataTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Validation\ValidationData
*/
protected $validationData;

public function setUp()
{
    parent::setUp();

    $this->validationData = new \Illuminate\Validation\ValidationData();
}

public function testInitializeAndGatherData0()
{
    $attribute = m::mock('UntypedParameter_attribute_');
    $masterData = m::mock('UntypedParameter_masterData_');

    // TODO: Your mock expectations here

    $actual = $this->validationData->initializeAndGatherData($attribute, $masterData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtractDataFromPath0()
{
    $attribute = m::mock('UntypedParameter_attribute_');
    $masterData = m::mock('UntypedParameter_masterData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value !== '__missing__') == false (line 85)

    $actual = $this->validationData->extractDataFromPath($attribute, $masterData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtractDataFromPath1()
{
    $attribute = m::mock('UntypedParameter_attribute_');
    $masterData = m::mock('UntypedParameter_masterData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value !== '__missing__') == true (line 85)

    $actual = $this->validationData->extractDataFromPath($attribute, $masterData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLeadingExplicitAttributePath0()
{
    $attribute = m::mock('UntypedParameter_attribute_');

    // TODO: Your mock expectations here

    $actual = $this->validationData->getLeadingExplicitAttributePath($attribute);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
