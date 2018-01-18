<?php

namespace tests\Faker\Provider\zh_TW;

use Faker\Provider\zh_TW\Color;
use Mockery as m;

class ColorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\zh_TW\Color
*/
protected $color;

public function setUp()
{
    parent::setUp();

    $this->color = new \Faker\Provider\zh_TW\Color();
}
}
