<?php

namespace tests\Symfony\Bridge\Monolog\Processor;

use Mockery as m;
use Symfony\Bridge\Monolog\Processor\TokenProcessor;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class TokenProcessorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_tokenStorage;
/**
* @var \Symfony\Bridge\Monolog\Processor\TokenProcessor
*/
protected $tokenProcessor;

public function setUp()
{
    parent::setUp();

    $this->_tokenStorage = m::mock(\Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface::class);
    $this->tokenProcessor = new \Symfony\Bridge\Monolog\Processor\TokenProcessor($this->_tokenStorage);
}

public function test__invoke0()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== ($token = $this->tokenStorage->getToken())) == false (line 33)

    $actual = $this->tokenProcessor->__invoke($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke1()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== ($token = $this->tokenStorage->getToken())) == true (line 33)

    $actual = $this->tokenProcessor->__invoke($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
