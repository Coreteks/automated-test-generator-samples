<?php

namespace tests\Faker\Provider\ru_RU;

use Faker\Provider\ru_RU\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ru_RU\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\ru_RU\Text();
}

public function testRealText0()
{
    $maxNbChars = m::mock('UntypedParameter_maxNbChars_');
    $indexSize = m::mock('UntypedParameter_indexSize_');

    // TODO: Your mock expectations here

    $actual = $this->text->realText($maxNbChars, $indexSize);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
