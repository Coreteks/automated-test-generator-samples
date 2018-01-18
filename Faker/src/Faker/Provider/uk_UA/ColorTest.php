<?php

namespace tests\Faker\Provider\uk_UA;

use Faker\Provider\uk_UA\Color;
use Mockery as m;

class ColorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\uk_UA\Color
*/
protected $color;

public function setUp()
{
    parent::setUp();

    $this->color = new \Faker\Provider\uk_UA\Color();
}
}
