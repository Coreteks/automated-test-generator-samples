<?php

namespace tests\Faker\Provider\tr_TR;

use Faker\Provider\tr_TR\Color;
use Mockery as m;

class ColorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\tr_TR\Color
*/
protected $color;

public function setUp()
{
    parent::setUp();

    $this->color = new \Faker\Provider\tr_TR\Color();
}
}
