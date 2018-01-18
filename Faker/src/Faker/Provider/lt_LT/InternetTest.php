<?php

namespace tests\Faker\Provider\lt_LT;

use Faker\Provider\lt_LT\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\lt_LT\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\lt_LT\Internet();
}
}
