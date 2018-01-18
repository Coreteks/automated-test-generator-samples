<?php

namespace tests\PHPUnit\Runner\Filter;

use Mockery as m;
use PHPUnit\Runner\Filter\IncludeGroupFilterIterator;

class IncludeGroupFilterIteratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Runner\Filter\IncludeGroupFilterIterator
*/
protected $includeGroupFilterIterator;

public function setUp()
{
    parent::setUp();

    $this->includeGroupFilterIterator = new \PHPUnit\Runner\Filter\IncludeGroupFilterIterator();
}
}
