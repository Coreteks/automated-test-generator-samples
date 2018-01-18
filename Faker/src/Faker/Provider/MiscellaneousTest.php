<?php

namespace tests\Faker\Provider;

use Faker\Provider\Miscellaneous;
use Mockery as m;

class MiscellaneousTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\Miscellaneous
*/
protected $miscellaneous;

public function setUp()
{
    parent::setUp();

    $this->miscellaneous = new \Faker\Provider\Miscellaneous();
}

public function testBoolean0()
{
    $chanceOfGettingTrue = m::mock('UntypedParameter_chanceOfGettingTrue_');

    // TODO: Your mock expectations here

    $actual = $this->miscellaneous->boolean($chanceOfGettingTrue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMd50()
{
    // TODO: Your mock expectations here

    $actual = $this->miscellaneous->md5();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSha10()
{
    // TODO: Your mock expectations here

    $actual = $this->miscellaneous->sha1();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSha2560()
{
    // TODO: Your mock expectations here

    $actual = $this->miscellaneous->sha256();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLocale0()
{
    // TODO: Your mock expectations here

    $actual = $this->miscellaneous->locale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCountryCode0()
{
    // TODO: Your mock expectations here

    $actual = $this->miscellaneous->countryCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCountryISOAlpha30()
{
    // TODO: Your mock expectations here

    $actual = $this->miscellaneous->countryISOAlpha3();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLanguageCode0()
{
    // TODO: Your mock expectations here

    $actual = $this->miscellaneous->languageCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCurrencyCode0()
{
    // TODO: Your mock expectations here

    $actual = $this->miscellaneous->currencyCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEmoji0()
{
    // TODO: Your mock expectations here

    $actual = $this->miscellaneous->emoji();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
