<?php

namespace tests\Faker\Provider\hy_AM;

use Faker\Provider\hy_AM\Color;
use Mockery as m;

class ColorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\hy_AM\Color
*/
protected $color;

public function setUp()
{
    parent::setUp();

    $this->color = new \Faker\Provider\hy_AM\Color();
}
}
