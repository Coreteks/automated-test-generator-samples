<?php

namespace tests\Faker\Provider\mn_MN;

use Faker\Provider\mn_MN\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\mn_MN\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\mn_MN\PhoneNumber();
}
}
