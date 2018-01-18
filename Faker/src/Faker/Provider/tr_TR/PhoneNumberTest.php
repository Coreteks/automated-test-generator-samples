<?php

namespace tests\Faker\Provider\tr_TR;

use Faker\Provider\tr_TR\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\tr_TR\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\tr_TR\PhoneNumber();
}
}
