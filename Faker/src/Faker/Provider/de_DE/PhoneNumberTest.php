<?php

namespace tests\Faker\Provider\de_DE;

use Faker\Provider\de_DE\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\de_DE\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\de_DE\PhoneNumber();
}
}
