<?php

namespace tests\Faker\Provider\ru_RU;

use Faker\Provider\ru_RU\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ru_RU\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\ru_RU\PhoneNumber();
}
}
