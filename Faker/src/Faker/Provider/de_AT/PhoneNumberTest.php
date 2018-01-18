<?php

namespace tests\Faker\Provider\de_AT;

use Faker\Provider\de_AT\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\de_AT\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\de_AT\PhoneNumber();
}
}
