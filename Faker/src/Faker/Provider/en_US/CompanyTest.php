<?php

namespace tests\Faker\Provider\en_US;

use Faker\Provider\en_US\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_US\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\en_US\Company();
}

public function testCatchPhrase0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->catchPhrase();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCatchPhrase1()
{
    // TODO: Your mock expectations here

    $actual = $this->company->catchPhrase();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBs0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->bs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBs1()
{
    // TODO: Your mock expectations here

    $actual = $this->company->bs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEin0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->ein();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
