<?php

namespace tests\Faker\Provider\kk_KZ;

use Faker\Provider\kk_KZ\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\kk_KZ\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\kk_KZ\PhoneNumber();
}
}
