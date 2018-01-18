<?php

namespace tests\Faker\Provider\bn_BD;

use Faker\Provider\bn_BD\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\bn_BD\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\bn_BD\PhoneNumber();
}

public function testPhoneNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->phoneNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
