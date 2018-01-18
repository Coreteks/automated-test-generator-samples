<?php

namespace tests\Symfony\Bridge\Twig;

use Mockery as m;
use Symfony\Bridge\Twig\UndefinedCallableHandler;

class UndefinedCallableHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Twig\UndefinedCallableHandler
*/
protected $undefinedCallableHandler;

public function setUp()
{
    parent::setUp();

    $this->undefinedCallableHandler = new \Symfony\Bridge\Twig\UndefinedCallableHandler();
}

/**
 * @expectedException \Twig\Error\SyntaxError
 */
public function testOnUndefinedFilter0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset(self::$filterComponents[$name])) == false (line 60)
    // throw new \Twig\Error\SyntaxError(sprintf('Did you forget to run "composer require symfony/%s"? Unknown filter "%s".', self::$filterComponents[$name], $name)) -> exception (line 65)

    $actual = $this->undefinedCallableHandler->onUndefinedFilter($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnUndefinedFilter1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset(self::$filterComponents[$name])) == true (line 60)

    $actual = $this->undefinedCallableHandler->onUndefinedFilter($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Twig\Error\SyntaxError
 */
public function testOnUndefinedFunction0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset(self::$functionComponents[$name])) == false (line 70)
    // throw new \Twig\Error\SyntaxError(sprintf('Did you forget to run "composer require symfony/%s"? Unknown function "%s".', self::$functionComponents[$name], $name)) -> exception (line 74)

    $actual = $this->undefinedCallableHandler->onUndefinedFunction($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnUndefinedFunction1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset(self::$functionComponents[$name])) == true (line 70)

    $actual = $this->undefinedCallableHandler->onUndefinedFunction($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
