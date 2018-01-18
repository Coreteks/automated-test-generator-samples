<?php

namespace tests\Ramsey\Uuid\Generator;

use Mockery as m;
use Ramsey\Uuid\Generator\OpenSslGenerator;

class OpenSslGeneratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Generator\OpenSslGenerator
*/
protected $openSslGenerator;

public function setUp()
{
    parent::setUp();

    $this->openSslGenerator = new \Ramsey\Uuid\Generator\OpenSslGenerator();
}

public function testGenerate0()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    $actual = $this->openSslGenerator->generate($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
