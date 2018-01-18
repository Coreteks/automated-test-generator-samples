<?php

namespace tests\Illuminate\Foundation\Providers;

use Illuminate\Foundation\Providers\ConsoleSupportServiceProvider;
use Mockery as m;

class ConsoleSupportServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider
*/
protected $consoleSupportServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->consoleSupportServiceProvider = new \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider();
}
}
