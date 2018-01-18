<?php

namespace tests\Faker\Provider\zh_CN;

use Faker\Provider\zh_CN\Color;
use Mockery as m;

class ColorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\zh_CN\Color
*/
protected $color;

public function setUp()
{
    parent::setUp();

    $this->color = new \Faker\Provider\zh_CN\Color();
}
}
