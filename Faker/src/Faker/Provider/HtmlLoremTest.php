<?php

namespace tests\Faker\Provider;

use Faker\Generator;
use Faker\Provider\HtmlLorem;
use Mockery as m;

class HtmlLoremTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Faker\Provider\HtmlLorem
*/
protected $htmlLorem;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Faker\Generator::class);
    $this->htmlLorem = new \Faker\Provider\HtmlLorem($this->_generator);
}

public function testRandomHtml0()
{
    $maxDepth = m::mock('UntypedParameter_maxDepth_');
    $maxWidth = m::mock('UntypedParameter_maxWidth_');

    // TODO: Your mock expectations here

    $actual = $this->htmlLorem->randomHtml($maxDepth, $maxWidth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
