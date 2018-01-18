<?php

namespace tests\PHPUnit\Framework;

use Mockery as m;
use PHPUnit\Framework\CoveredCodeNotExecutedException;

class CoveredCodeNotExecutedExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\CoveredCodeNotExecutedException
*/
protected $coveredCodeNotExecutedException;

public function setUp()
{
    parent::setUp();

    $this->coveredCodeNotExecutedException = new \PHPUnit\Framework\CoveredCodeNotExecutedException();
}
}
