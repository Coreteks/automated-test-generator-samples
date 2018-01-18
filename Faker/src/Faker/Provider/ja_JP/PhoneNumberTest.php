<?php

namespace tests\Faker\Provider\ja_JP;

use Faker\Provider\ja_JP\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ja_JP\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\ja_JP\PhoneNumber();
}
}
