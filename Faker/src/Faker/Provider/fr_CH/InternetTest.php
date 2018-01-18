<?php

namespace tests\Faker\Provider\fr_CH;

use Faker\Provider\fr_CH\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fr_CH\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\fr_CH\Internet();
}
}
