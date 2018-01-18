<?php

namespace tests\Symfony\Bridge\Monolog\Handler\FingersCrossed;

use Mockery as m;
use Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy;
use Symfony\Component\HttpFoundation\RequestStack;

class NotFoundActivationStrategyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_requestStack;
/**
* @var array
*/
protected $_excludedUrls = [];
/**
* @var mixed
*/
protected $_actionLevel = null;
/**
* @var \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy
*/
protected $notFoundActivationStrategy;

public function setUp()
{
    parent::setUp();

    $this->_requestStack = m::mock(\Symfony\Component\HttpFoundation\RequestStack::class);
    $this->_excludedUrls = [];
    $this->_actionLevel = null;
    $this->notFoundActivationStrategy = new \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy($this->_requestStack, $this->_excludedUrls, $this->_actionLevel);
}

public function testIsHandlerActivated0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isActivated && isset($record['context']['exception']) && $record['context']['exception'] instanceof \Symfony\Component\HttpKernel\Exception\HttpException && $record['context']['exception']->getStatusCode() == 404 && ($request = $this->requestStack->getMasterRequest())) == false (line 41)

    $actual = $this->notFoundActivationStrategy->isHandlerActivated($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsHandlerActivated1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isActivated && isset($record['context']['exception']) && $record['context']['exception'] instanceof \Symfony\Component\HttpKernel\Exception\HttpException && $record['context']['exception']->getStatusCode() == 404 && ($request = $this->requestStack->getMasterRequest())) == true (line 41)

    $actual = $this->notFoundActivationStrategy->isHandlerActivated($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
