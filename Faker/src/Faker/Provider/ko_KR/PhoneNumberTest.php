<?php

namespace tests\Faker\Provider\ko_KR;

use Faker\Provider\ko_KR\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ko_KR\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\ko_KR\PhoneNumber();
}
}
