<?php

namespace tests\Faker\Provider\es_VE;

use Faker\Provider\es_VE\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\es_VE\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\es_VE\PhoneNumber();
}
}
