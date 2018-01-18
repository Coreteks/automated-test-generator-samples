<?php

namespace tests\Faker\Provider\nl_NL;

use Faker\Provider\nl_NL\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\nl_NL\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\nl_NL\PhoneNumber();
}
}
