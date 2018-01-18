<?php

namespace tests\Faker\Provider\cs_CZ;

use Faker\Provider\cs_CZ\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\cs_CZ\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\cs_CZ\Company();
}

public function testCatchPhraseNoun0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->catchPhraseNoun();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCatchPhraseAttribute0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->catchPhraseAttribute();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCatchPhraseVerb0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->catchPhraseVerb();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCatchPhrase0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->catchPhrase();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIco0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($mod === 0 || $mod === 10) == false (line 112)
    // if ($mod === 1) == false (line 114)

    $actual = $this->company->ico();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIco1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($mod === 0 || $mod === 10) == false (line 112)
    // if ($mod === 1) == true (line 114)

    $actual = $this->company->ico();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIco2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($mod === 0 || $mod === 10) == true (line 112)

    $actual = $this->company->ico();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIco3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($mod === 0 || $mod === 10) == false (line 112)
    // if ($mod === 1) == false (line 114)

    $actual = $this->company->ico();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIco4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($mod === 0 || $mod === 10) == false (line 112)
    // if ($mod === 1) == true (line 114)

    $actual = $this->company->ico();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIco5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($mod === 0 || $mod === 10) == true (line 112)

    $actual = $this->company->ico();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
