<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\ClearCompiledCommand;
use Mockery as m;

class ClearCompiledCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\ClearCompiledCommand
*/
protected $clearCompiledCommand;

public function setUp()
{
    parent::setUp();

    $this->clearCompiledCommand = new \Illuminate\Foundation\Console\ClearCompiledCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($servicesPath = $this->laravel->getCachedServicesPath())) == false (line 30)
    // if (file_exists($packagesPath = $this->laravel->getCachedPackagesPath())) == false (line 34)

    $actual = $this->clearCompiledCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($servicesPath = $this->laravel->getCachedServicesPath())) == false (line 30)
    // if (file_exists($packagesPath = $this->laravel->getCachedPackagesPath())) == true (line 34)

    $actual = $this->clearCompiledCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($servicesPath = $this->laravel->getCachedServicesPath())) == true (line 30)
    // if (file_exists($packagesPath = $this->laravel->getCachedPackagesPath())) == false (line 34)

    $actual = $this->clearCompiledCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($servicesPath = $this->laravel->getCachedServicesPath())) == true (line 30)
    // if (file_exists($packagesPath = $this->laravel->getCachedPackagesPath())) == true (line 34)

    $actual = $this->clearCompiledCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
