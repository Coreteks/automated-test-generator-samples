<?php

namespace tests\Faker\Provider\cs_CZ;

use Faker\Provider\cs_CZ\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\cs_CZ\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\cs_CZ\Text();
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
