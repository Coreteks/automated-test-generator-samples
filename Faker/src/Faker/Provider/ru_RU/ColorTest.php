<?php

namespace tests\Faker\Provider\ru_RU;

use Faker\Provider\ru_RU\Color;
use Mockery as m;

class ColorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ru_RU\Color
*/
protected $color;

public function setUp()
{
    parent::setUp();

    $this->color = new \Faker\Provider\ru_RU\Color();
}
}
