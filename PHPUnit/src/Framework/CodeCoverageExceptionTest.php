<?php

namespace tests\PHPUnit\Framework;

use Mockery as m;
use PHPUnit\Framework\CodeCoverageException;

class CodeCoverageExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\CodeCoverageException
*/
protected $codeCoverageException;

public function setUp()
{
    parent::setUp();

    $this->codeCoverageException = new \PHPUnit\Framework\CodeCoverageException();
}
}
