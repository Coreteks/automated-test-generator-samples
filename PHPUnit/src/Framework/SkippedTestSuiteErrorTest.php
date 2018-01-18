<?php

namespace tests\PHPUnit\Framework;

use Mockery as m;
use PHPUnit\Framework\SkippedTestSuiteError;

class SkippedTestSuiteErrorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\SkippedTestSuiteError
*/
protected $skippedTestSuiteError;

public function setUp()
{
    parent::setUp();

    $this->skippedTestSuiteError = new \PHPUnit\Framework\SkippedTestSuiteError();
}
}
