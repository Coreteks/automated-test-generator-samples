<?php

namespace tests\Faker\Provider\pl_PL;

use Faker\Provider\pl_PL\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\pl_PL\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\pl_PL\PhoneNumber();
}
}
