<?php

namespace tests\Faker\Provider\lv_LV;

use Faker\Provider\lv_LV\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\lv_LV\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\lv_LV\Internet();
}
}
