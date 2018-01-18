<?php

namespace tests\Faker\Provider\ka_GE;

use Faker\Provider\ka_GE\Color;
use Mockery as m;

class ColorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ka_GE\Color
*/
protected $color;

public function setUp()
{
    parent::setUp();

    $this->color = new \Faker\Provider\ka_GE\Color();
}
}
