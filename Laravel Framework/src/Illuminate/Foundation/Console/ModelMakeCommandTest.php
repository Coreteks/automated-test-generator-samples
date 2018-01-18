<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\ModelMakeCommand;
use Mockery as m;

class ModelMakeCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\ModelMakeCommand
*/
protected $modelMakeCommand;

public function setUp()
{
    parent::setUp();

    $this->modelMakeCommand = new \Illuminate\Foundation\Console\ModelMakeCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (parent::handle() === false && !$this->option('force')) == false (line 39)
    // if ($this->option('all')) == false (line 43)
    // if ($this->option('factory')) == false (line 50)
    // if ($this->option('migration')) == false (line 54)
    // if ($this->option('controller') || $this->option('resource')) == false (line 58)

    $actual = $this->modelMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (parent::handle() === false && !$this->option('force')) == false (line 39)
    // if ($this->option('all')) == false (line 43)
    // if ($this->option('factory')) == false (line 50)
    // if ($this->option('migration')) == false (line 54)
    // if ($this->option('controller') || $this->option('resource')) == true (line 58)

    $actual = $this->modelMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (parent::handle() === false && !$this->option('force')) == false (line 39)
    // if ($this->option('all')) == false (line 43)
    // if ($this->option('factory')) == false (line 50)
    // if ($this->option('migration')) == true (line 54)
    // if ($this->option('controller') || $this->option('resource')) == false (line 58)

    $actual = $this->modelMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (parent::handle() === false && !$this->option('force')) == false (line 39)
    // if ($this->option('all')) == false (line 43)
    // if ($this->option('factory')) == false (line 50)
    // if ($this->option('migration')) == true (line 54)
    // if ($this->option('controller') || $this->option('resource')) == true (line 58)

    $actual = $this->modelMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (parent::handle() === false && !$this->option('force')) == false (line 39)
    // if ($this->option('all')) == false (line 43)
    // if ($this->option('factory')) == true (line 50)
    // if ($this->option('migration')) == false (line 54)
    // if ($this->option('controller') || $this->option('resource')) == false (line 58)

    $actual = $this->modelMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (parent::handle() === false && !$this->option('force')) == false (line 39)
    // if ($this->option('all')) == false (line 43)
    // if ($this->option('factory')) == true (line 50)
    // if ($this->option('migration')) == false (line 54)
    // if ($this->option('controller') || $this->option('resource')) == true (line 58)

    $actual = $this->modelMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (parent::handle() === false && !$this->option('force')) == false (line 39)
    // if ($this->option('all')) == false (line 43)
    // if ($this->option('factory')) == true (line 50)
    // if ($this->option('migration')) == true (line 54)
    // if ($this->option('controller') || $this->option('resource')) == false (line 58)

    $actual = $this->modelMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (parent::handle() === false && !$this->option('force')) == false (line 39)
    // if ($this->option('all')) == false (line 43)
    // if ($this->option('factory')) == true (line 50)
    // if ($this->option('migration')) == true (line 54)
    // if ($this->option('controller') || $this->option('resource')) == true (line 58)

    $actual = $this->modelMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (parent::handle() === false && !$this->option('force')) == false (line 39)
    // if ($this->option('all')) == true (line 43)
    // if ($this->option('factory')) == false (line 50)
    // if ($this->option('migration')) == false (line 54)
    // if ($this->option('controller') || $this->option('resource')) == false (line 58)

    $actual = $this->modelMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (parent::handle() === false && !$this->option('force')) == false (line 39)
    // if ($this->option('all')) == true (line 43)
    // if ($this->option('factory')) == false (line 50)
    // if ($this->option('migration')) == false (line 54)
    // if ($this->option('controller') || $this->option('resource')) == true (line 58)

    $actual = $this->modelMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (parent::handle() === false && !$this->option('force')) == false (line 39)
    // if ($this->option('all')) == true (line 43)
    // if ($this->option('factory')) == false (line 50)
    // if ($this->option('migration')) == true (line 54)
    // if ($this->option('controller') || $this->option('resource')) == false (line 58)

    $actual = $this->modelMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (parent::handle() === false && !$this->option('force')) == false (line 39)
    // if ($this->option('all')) == true (line 43)
    // if ($this->option('factory')) == false (line 50)
    // if ($this->option('migration')) == true (line 54)
    // if ($this->option('controller') || $this->option('resource')) == true (line 58)

    $actual = $this->modelMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (parent::handle() === false && !$this->option('force')) == false (line 39)
    // if ($this->option('all')) == true (line 43)
    // if ($this->option('factory')) == true (line 50)
    // if ($this->option('migration')) == false (line 54)
    // if ($this->option('controller') || $this->option('resource')) == false (line 58)

    $actual = $this->modelMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (parent::handle() === false && !$this->option('force')) == false (line 39)
    // if ($this->option('all')) == true (line 43)
    // if ($this->option('factory')) == true (line 50)
    // if ($this->option('migration')) == false (line 54)
    // if ($this->option('controller') || $this->option('resource')) == true (line 58)

    $actual = $this->modelMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (parent::handle() === false && !$this->option('force')) == false (line 39)
    // if ($this->option('all')) == true (line 43)
    // if ($this->option('factory')) == true (line 50)
    // if ($this->option('migration')) == true (line 54)
    // if ($this->option('controller') || $this->option('resource')) == false (line 58)

    $actual = $this->modelMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (parent::handle() === false && !$this->option('force')) == false (line 39)
    // if ($this->option('all')) == true (line 43)
    // if ($this->option('factory')) == true (line 50)
    // if ($this->option('migration')) == true (line 54)
    // if ($this->option('controller') || $this->option('resource')) == true (line 58)

    $actual = $this->modelMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (parent::handle() === false && !$this->option('force')) == true (line 39)

    $actual = $this->modelMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
