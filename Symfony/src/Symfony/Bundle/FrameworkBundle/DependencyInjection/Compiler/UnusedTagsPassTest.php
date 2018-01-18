<?php

namespace tests\Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\UnusedTagsPass;

class UnusedTagsPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\UnusedTagsPass
*/
protected $unusedTagsPass;

public function setUp()
{
    parent::setUp();

    $this->unusedTagsPass = new \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\UnusedTagsPass();
}

public function testProcess0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    $actual = $this->unusedTagsPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess1()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($tag, $this->whitelist)) == false (line 65)
    // if (!empty($candidates)) == false (line 83)

    $actual = $this->unusedTagsPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess2()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($tag, $this->whitelist)) == false (line 65)
    // if (!empty($candidates)) == true (line 83)

    $actual = $this->unusedTagsPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess3()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($tag, $this->whitelist)) == false (line 65)
    // if ($definedTag === $tag) == false (line 72)
    // if (false !== strpos($definedTag, $tag) || levenshtein($tag, $definedTag) <= strlen($tag) / 3) == false (line 76)
    // if (!empty($candidates)) == false (line 83)

    $actual = $this->unusedTagsPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess4()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($tag, $this->whitelist)) == false (line 65)
    // if ($definedTag === $tag) == false (line 72)
    // if (false !== strpos($definedTag, $tag) || levenshtein($tag, $definedTag) <= strlen($tag) / 3) == false (line 76)
    // if (!empty($candidates)) == true (line 83)

    $actual = $this->unusedTagsPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess5()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($tag, $this->whitelist)) == false (line 65)
    // if ($definedTag === $tag) == false (line 72)
    // if (false !== strpos($definedTag, $tag) || levenshtein($tag, $definedTag) <= strlen($tag) / 3) == true (line 76)
    // if (!empty($candidates)) == false (line 83)

    $actual = $this->unusedTagsPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess6()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($tag, $this->whitelist)) == false (line 65)
    // if ($definedTag === $tag) == false (line 72)
    // if (false !== strpos($definedTag, $tag) || levenshtein($tag, $definedTag) <= strlen($tag) / 3) == true (line 76)
    // if (!empty($candidates)) == true (line 83)

    $actual = $this->unusedTagsPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess7()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($tag, $this->whitelist)) == false (line 65)
    // if ($definedTag === $tag) == true (line 72)
    // if (!empty($candidates)) == false (line 83)

    $actual = $this->unusedTagsPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess8()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($tag, $this->whitelist)) == false (line 65)
    // if ($definedTag === $tag) == true (line 72)
    // if (!empty($candidates)) == true (line 83)

    $actual = $this->unusedTagsPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess9()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($tag, $this->whitelist)) == true (line 65)

    $actual = $this->unusedTagsPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
