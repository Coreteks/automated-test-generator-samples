<?php

namespace tests\Faker\Provider\el_GR;

use Faker\Provider\el_GR\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\el_GR\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\el_GR\Text();
}
}
