<?php

namespace tests\Faker\Provider\kk_KZ;

use Faker\Provider\kk_KZ\Color;
use Mockery as m;

class ColorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\kk_KZ\Color
*/
protected $color;

public function setUp()
{
    parent::setUp();

    $this->color = new \Faker\Provider\kk_KZ\Color();
}
}
