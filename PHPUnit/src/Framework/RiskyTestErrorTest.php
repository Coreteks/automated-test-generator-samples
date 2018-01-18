<?php

namespace tests\PHPUnit\Framework;

use Mockery as m;
use PHPUnit\Framework\RiskyTestError;

class RiskyTestErrorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\RiskyTestError
*/
protected $riskyTestError;

public function setUp()
{
    parent::setUp();

    $this->riskyTestError = new \PHPUnit\Framework\RiskyTestError();
}
}
