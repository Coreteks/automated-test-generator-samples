<?php

namespace tests\PHPUnit\Framework;

use Mockery as m;
use PHPUnit\Framework\IncompleteTestError;

class IncompleteTestErrorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\IncompleteTestError
*/
protected $incompleteTestError;

public function setUp()
{
    parent::setUp();

    $this->incompleteTestError = new \PHPUnit\Framework\IncompleteTestError();
}
}
