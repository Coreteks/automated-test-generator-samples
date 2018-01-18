<?php

namespace tests\Faker\Provider\ru_RU;

use Faker\Provider\ru_RU\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ru_RU\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\ru_RU\Internet();
}
}
