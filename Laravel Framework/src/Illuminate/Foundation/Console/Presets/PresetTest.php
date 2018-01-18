<?php

namespace tests\Illuminate\Foundation\Console\Presets;

use Illuminate\Foundation\Console\Presets\Preset;
use Mockery as m;

class PresetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\Presets\Preset
*/
protected $preset;

public function setUp()
{
    parent::setUp();

    $this->preset = new \Illuminate\Foundation\Console\Presets\Preset();
}
}
