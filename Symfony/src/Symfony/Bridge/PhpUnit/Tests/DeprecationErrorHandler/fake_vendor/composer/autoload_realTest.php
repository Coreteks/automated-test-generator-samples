<?php

namespace tests;

use ComposerAutoloaderInitFake;
use Mockery as m;

class ComposerAutoloaderInitFakeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \ComposerAutoloaderInitFake
*/
protected $composerAutoloaderInitFake;

public function setUp()
{
    parent::setUp();

    $this->composerAutoloaderInitFake = new \ComposerAutoloaderInitFake();
}
}
