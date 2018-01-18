<?php

namespace tests\Faker\Provider\lt_LT;

use Faker\Provider\lt_LT\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\lt_LT\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\lt_LT\PhoneNumber();
}
}
