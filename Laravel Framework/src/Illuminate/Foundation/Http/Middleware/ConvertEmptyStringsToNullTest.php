<?php

namespace tests\Illuminate\Foundation\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull;
use Mockery as m;

class ConvertEmptyStringsToNullTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull
*/
protected $convertEmptyStringsToNull;

public function setUp()
{
    parent::setUp();

    $this->convertEmptyStringsToNull = new \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull();
}
}
