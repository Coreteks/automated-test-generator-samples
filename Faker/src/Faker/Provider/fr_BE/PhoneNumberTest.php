<?php

namespace tests\Faker\Provider\fr_BE;

use Faker\Provider\fr_BE\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fr_BE\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\fr_BE\PhoneNumber();
}
}
