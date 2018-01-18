<?php

namespace tests\Faker\Provider\it_IT;

use Faker\Provider\it_IT\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\it_IT\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\it_IT\PhoneNumber();
}
}
