<?php

namespace tests\Faker\Provider\es_AR;

use Faker\Provider\es_AR\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\es_AR\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\es_AR\PhoneNumber();
}
}
