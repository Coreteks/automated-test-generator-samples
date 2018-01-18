<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\SameSize;

class SameSizeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_expected = null;
/**
* @var \PHPUnit\Framework\Constraint\SameSize
*/
protected $sameSize;

public function setUp()
{
    parent::setUp();

    $this->_expected = null;
    $this->sameSize = new \PHPUnit\Framework\Constraint\SameSize($this->_expected);
}
}
