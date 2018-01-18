<?php

namespace tests\Faker\Provider\bg_BG;

use Faker\Provider\bg_BG\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\bg_BG\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\bg_BG\PhoneNumber();
}
}
