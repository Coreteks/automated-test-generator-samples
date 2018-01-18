<?php

namespace tests\Faker\Provider\nl_NL;

use Faker\Provider\nl_NL\Color;
use Mockery as m;

class ColorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\nl_NL\Color
*/
protected $color;

public function setUp()
{
    parent::setUp();

    $this->color = new \Faker\Provider\nl_NL\Color();
}
}
