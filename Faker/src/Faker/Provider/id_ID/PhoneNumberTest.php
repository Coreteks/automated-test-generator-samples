<?php

namespace tests\Faker\Provider\id_ID;

use Faker\Provider\id_ID\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\id_ID\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\id_ID\PhoneNumber();
}
}
