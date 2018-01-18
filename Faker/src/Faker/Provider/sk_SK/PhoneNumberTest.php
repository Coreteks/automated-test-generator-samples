<?php

namespace tests\Faker\Provider\sk_SK;

use Faker\Provider\sk_SK\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\sk_SK\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\sk_SK\PhoneNumber();
}
}
