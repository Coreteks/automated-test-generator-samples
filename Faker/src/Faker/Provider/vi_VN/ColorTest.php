<?php

namespace tests\Faker\Provider\vi_VN;

use Faker\Provider\vi_VN\Color;
use Mockery as m;

class ColorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\vi_VN\Color
*/
protected $color;

public function setUp()
{
    parent::setUp();

    $this->color = new \Faker\Provider\vi_VN\Color();
}
}
