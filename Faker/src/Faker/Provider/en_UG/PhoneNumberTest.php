<?php

namespace tests\Faker\Provider\en_UG;

use Faker\Provider\en_UG\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_UG\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\en_UG\PhoneNumber();
}
}
