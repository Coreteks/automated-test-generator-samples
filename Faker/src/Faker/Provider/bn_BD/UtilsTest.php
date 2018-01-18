<?php

namespace tests\Faker\Provider\bn_BD;

use Faker\Provider\bn_BD\Utils;
use Mockery as m;

class UtilsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\bn_BD\Utils
*/
protected $utils;

public function setUp()
{
    parent::setUp();

    $this->utils = new \Faker\Provider\bn_BD\Utils();
}

public function testGetBanglaNumber0()
{
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    $actual = $this->utils->getBanglaNumber($number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
