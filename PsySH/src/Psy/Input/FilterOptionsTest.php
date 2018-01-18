<?php

namespace tests\Psy\Input;

use Mockery as m;
use Psy\Input\FilterOptions;

class FilterOptionsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Input\FilterOptions
*/
protected $filterOptions;

public function setUp()
{
    parent::setUp();

    $this->filterOptions = new \Psy\Input\FilterOptions();
}

public function testGetOptions0()
{
    // TODO: Your mock expectations here

    $actual = $this->filterOptions->getOptions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBind0()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($pattern = $input->getOption('grep'))) == false (line 51)
    // if (!$this->stringIsRegex($pattern)) == false (line 57)
    // if ($insensitive = $input->getOption('insensitive')) == false (line 61)

    $actual = $this->filterOptions->bind($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBind1()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($pattern = $input->getOption('grep'))) == false (line 51)
    // if (!$this->stringIsRegex($pattern)) == false (line 57)
    // if ($insensitive = $input->getOption('insensitive')) == true (line 61)

    $actual = $this->filterOptions->bind($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBind2()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($pattern = $input->getOption('grep'))) == false (line 51)
    // if (!$this->stringIsRegex($pattern)) == true (line 57)
    // if ($insensitive = $input->getOption('insensitive')) == false (line 61)

    $actual = $this->filterOptions->bind($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBind3()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($pattern = $input->getOption('grep'))) == false (line 51)
    // if (!$this->stringIsRegex($pattern)) == true (line 57)
    // if ($insensitive = $input->getOption('insensitive')) == true (line 61)

    $actual = $this->filterOptions->bind($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBind4()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($pattern = $input->getOption('grep'))) == true (line 51)

    $actual = $this->filterOptions->bind($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasFilter0()
{
    // TODO: Your mock expectations here

    $actual = $this->filterOptions->hasFilter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch0()
{
    $string = m::mock('UntypedParameter_string_');
    $matches = [];

    // TODO: Your mock expectations here

    $actual = $this->filterOptions->match($string, $matches);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
