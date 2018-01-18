<?php

namespace tests\Faker\Provider\is_IS;

use Faker\Provider\is_IS\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\is_IS\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\is_IS\PhoneNumber();
}
}
