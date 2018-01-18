<?php

namespace tests\Faker\Provider\ko_KR;

use Faker\Provider\ko_KR\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ko_KR\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\ko_KR\Text();
}
}
