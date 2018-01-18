<?php

namespace tests\Faker\Provider\ar_SA;

use Faker\Provider\ar_SA\Color;
use Mockery as m;

class ColorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ar_SA\Color
*/
protected $color;

public function setUp()
{
    parent::setUp();

    $this->color = new \Faker\Provider\ar_SA\Color();
}
}
