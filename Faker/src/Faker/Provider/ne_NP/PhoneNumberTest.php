<?php

namespace tests\Faker\Provider\ne_NP;

use Faker\Provider\ne_NP\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ne_NP\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\ne_NP\PhoneNumber();
}
}
