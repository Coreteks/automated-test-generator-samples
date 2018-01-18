<?php

namespace tests\Faker\Provider\he_IL;

use Faker\Provider\he_IL\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\he_IL\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\he_IL\PhoneNumber();
}
}
