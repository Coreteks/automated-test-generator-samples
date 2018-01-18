<?php

namespace tests\Faker\Provider\me_ME;

use Faker\Provider\me_ME\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\me_ME\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\me_ME\PhoneNumber();
}
}
