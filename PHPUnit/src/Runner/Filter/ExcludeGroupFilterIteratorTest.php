<?php

namespace tests\PHPUnit\Runner\Filter;

use Mockery as m;
use PHPUnit\Runner\Filter\ExcludeGroupFilterIterator;

class ExcludeGroupFilterIteratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Runner\Filter\ExcludeGroupFilterIterator
*/
protected $excludeGroupFilterIterator;

public function setUp()
{
    parent::setUp();

    $this->excludeGroupFilterIterator = new \PHPUnit\Runner\Filter\ExcludeGroupFilterIterator();
}
}
