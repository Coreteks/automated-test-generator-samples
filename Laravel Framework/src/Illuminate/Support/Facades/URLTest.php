<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\URL;
use Mockery as m;

class URLTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\URL
*/
protected $uRL;

public function setUp()
{
    parent::setUp();

    $this->uRL = new \Illuminate\Support\Facades\URL();
}
}
