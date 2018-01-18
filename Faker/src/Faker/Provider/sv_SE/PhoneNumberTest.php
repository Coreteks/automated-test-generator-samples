<?php

namespace tests\Faker\Provider\sv_SE;

use Faker\Provider\sv_SE\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\sv_SE\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\sv_SE\PhoneNumber();
}
}
