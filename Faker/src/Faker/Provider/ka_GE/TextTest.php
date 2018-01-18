<?php

namespace tests\Faker\Provider\ka_GE;

use Faker\Provider\ka_GE\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ka_GE\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\ka_GE\Text();
}
}
