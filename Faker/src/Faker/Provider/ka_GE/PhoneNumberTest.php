<?php

namespace tests\Faker\Provider\ka_GE;

use Faker\Provider\ka_GE\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ka_GE\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\ka_GE\PhoneNumber();
}
}
