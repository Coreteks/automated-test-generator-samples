<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Artisan;
use Mockery as m;

class ArtisanTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Artisan
*/
protected $artisan;

public function setUp()
{
    parent::setUp();

    $this->artisan = new \Illuminate\Support\Facades\Artisan();
}
}
