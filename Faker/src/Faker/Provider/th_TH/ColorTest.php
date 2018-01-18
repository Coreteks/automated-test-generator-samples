<?php

namespace tests\Faker\Provider\th_TH;

use Faker\Provider\th_TH\Color;
use Mockery as m;

class ColorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\th_TH\Color
*/
protected $color;

public function setUp()
{
    parent::setUp();

    $this->color = new \Faker\Provider\th_TH\Color();
}
}
