<?php

namespace tests\Illuminate\Foundation;

use Illuminate\Foundation\ComposerScripts;
use Mockery as m;

class ComposerScriptsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\ComposerScripts
*/
protected $composerScripts;

public function setUp()
{
    parent::setUp();

    $this->composerScripts = new \Illuminate\Foundation\ComposerScripts();
}

public function testPostInstall0()
{
    $event = m::mock(\Composer\Script\Event::class);

    // TODO: Your mock expectations here

    $actual = $this->composerScripts->postInstall($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPostUpdate0()
{
    $event = m::mock(\Composer\Script\Event::class);

    // TODO: Your mock expectations here

    $actual = $this->composerScripts->postUpdate($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPostAutoloadDump0()
{
    $event = m::mock(\Composer\Script\Event::class);

    // TODO: Your mock expectations here

    $actual = $this->composerScripts->postAutoloadDump($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
