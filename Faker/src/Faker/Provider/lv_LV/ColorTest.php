<?php

namespace tests\Faker\Provider\lv_LV;

use Faker\Provider\lv_LV\Color;
use Mockery as m;

class ColorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\lv_LV\Color
*/
protected $color;

public function setUp()
{
    parent::setUp();

    $this->color = new \Faker\Provider\lv_LV\Color();
}
}
