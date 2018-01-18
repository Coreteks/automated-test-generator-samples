<?php

namespace tests\PHPUnit\Util;

use Mockery as m;
use PHPUnit\Util\RegularExpression;

class RegularExpressionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Util\RegularExpression
*/
protected $regularExpression;

public function setUp()
{
    parent::setUp();

    $this->regularExpression = new \PHPUnit\Util\RegularExpression();
}

public function testSafeMatch0()
{
    $pattern = m::mock('UntypedParameter_pattern_');
    $subject = m::mock('UntypedParameter_subject_');
    $matches = m::mock('UntypedParameter_matches_');
    $flags = m::mock('UntypedParameter_flags_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->regularExpression->safeMatch($pattern, $subject, $matches, $flags, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
