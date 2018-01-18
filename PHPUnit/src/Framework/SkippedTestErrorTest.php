<?php

namespace tests\PHPUnit\Framework;

use Mockery as m;
use PHPUnit\Framework\SkippedTestError;

class SkippedTestErrorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\SkippedTestError
*/
protected $skippedTestError;

public function setUp()
{
    parent::setUp();

    $this->skippedTestError = new \PHPUnit\Framework\SkippedTestError();
}
}
