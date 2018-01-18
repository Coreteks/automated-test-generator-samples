<?php

namespace tests\Faker\Provider\nb_NO;

use Faker\Provider\nb_NO\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\nb_NO\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\nb_NO\PhoneNumber();
}
}
