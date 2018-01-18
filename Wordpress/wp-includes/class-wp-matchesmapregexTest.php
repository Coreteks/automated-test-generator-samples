<?php

namespace tests;

use Mockery as m;
use WP_MatchesMapRegex;

class WP_MatchesMapRegexTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_subject = null;
/**
* @var mixed
*/
protected $_matches = null;
/**
* @var \WP_MatchesMapRegex
*/
protected $wP_MatchesMapRegex;

public function setUp()
{
    parent::setUp();

    $this->_subject = null;
    $this->_matches = null;
    $this->wP_MatchesMapRegex = new \WP_MatchesMapRegex($this->_subject, $this->_matches);
}

public function testApply0()
{
    $subject = m::mock('UntypedParameter_subject_');
    $matches = m::mock('UntypedParameter_matches_');

    // TODO: Your mock expectations here

    $actual = $this->wP_MatchesMapRegex->apply($subject, $matches);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCallback0()
{
    $matches = m::mock('UntypedParameter_matches_');

    // TODO: Your mock expectations here

    $actual = $this->wP_MatchesMapRegex->callback($matches);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
