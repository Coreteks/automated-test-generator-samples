<?php

namespace tests\Faker\Provider\hu_HU;

use Faker\Provider\hu_HU\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\hu_HU\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\hu_HU\PhoneNumber();
}
}
