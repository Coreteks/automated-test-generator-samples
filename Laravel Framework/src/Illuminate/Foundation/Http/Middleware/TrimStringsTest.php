<?php

namespace tests\Illuminate\Foundation\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings;
use Mockery as m;

class TrimStringsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Http\Middleware\TrimStrings
*/
protected $trimStrings;

public function setUp()
{
    parent::setUp();

    $this->trimStrings = new \Illuminate\Foundation\Http\Middleware\TrimStrings();
}
}
