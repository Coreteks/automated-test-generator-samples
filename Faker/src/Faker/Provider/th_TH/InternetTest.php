<?php

namespace tests\Faker\Provider\th_TH;

use Faker\Provider\th_TH\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\th_TH\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\th_TH\Internet();
}
}
