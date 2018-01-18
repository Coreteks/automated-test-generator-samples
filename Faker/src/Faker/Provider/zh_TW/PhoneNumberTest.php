<?php

namespace tests\Faker\Provider\zh_TW;

use Faker\Provider\zh_TW\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\zh_TW\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\zh_TW\PhoneNumber();
}
}
