<?php

namespace tests\Faker\Provider\uk_UA;

use Faker\Provider\uk_UA\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\uk_UA\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\uk_UA\PhoneNumber();
}
}
