<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\StringMatchesFormatDescription;

class StringMatchesFormatDescriptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_string = null;
/**
* @var \PHPUnit\Framework\Constraint\StringMatchesFormatDescription
*/
protected $stringMatchesFormatDescription;

public function setUp()
{
    parent::setUp();

    $this->_string = null;
    $this->stringMatchesFormatDescription = new \PHPUnit\Framework\Constraint\StringMatchesFormatDescription($this->_string);
}
}
