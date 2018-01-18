<?php

namespace tests\PHPUnit\Framework;

use Mockery as m;
use PHPUnit\Framework\OutputError;

class OutputErrorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\OutputError
*/
protected $outputError;

public function setUp()
{
    parent::setUp();

    $this->outputError = new \PHPUnit\Framework\OutputError();
}
}
