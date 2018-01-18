<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Blade;
use Mockery as m;

class BladeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Blade
*/
protected $blade;

public function setUp()
{
    parent::setUp();

    $this->blade = new \Illuminate\Support\Facades\Blade();
}
}
