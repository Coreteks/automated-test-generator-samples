<?php

namespace tests\Faker\Provider\it_CH;

use Faker\Provider\it_CH\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\it_CH\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\it_CH\Internet();
}
}
