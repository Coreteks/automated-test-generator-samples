<?php

namespace tests\Faker\Provider\sl_SI;

use Faker\Provider\sl_SI\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\sl_SI\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\sl_SI\PhoneNumber();
}
}
