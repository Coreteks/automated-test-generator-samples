<?php

namespace tests\Faker\Provider\cs_CZ;

use Faker\Provider\cs_CZ\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\cs_CZ\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\cs_CZ\PhoneNumber();
}
}
