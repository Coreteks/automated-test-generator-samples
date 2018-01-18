<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Config;
use Mockery as m;

class ConfigTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Config
*/
protected $config;

public function setUp()
{
    parent::setUp();

    $this->config = new \Illuminate\Support\Facades\Config();
}
}
