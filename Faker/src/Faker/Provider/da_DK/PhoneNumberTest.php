<?php

namespace tests\Faker\Provider\da_DK;

use Faker\Provider\da_DK\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\da_DK\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\da_DK\PhoneNumber();
}
}
