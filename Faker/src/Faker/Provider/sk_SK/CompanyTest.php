<?php

namespace tests\Faker\Provider\sk_SK;

use Faker\Provider\sk_SK\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\sk_SK\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\sk_SK\Company();
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
}
