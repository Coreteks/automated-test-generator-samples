<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Controller;

use Mockery as m;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser;
use Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ControllerResolverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Mockery\MockInterface
*/
protected $_parser;
/**
* @var \Mockery\MockInterface
*/
protected $_logger;
/**
* @var \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver
*/
protected $controllerResolver;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Symfony\Component\DependencyInjection\ContainerInterface::class);
    $this->_parser = m::mock(\Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser::class);
    $this->_logger = m::mock(\Psr\Log\LoggerInterface::class);
    $this->controllerResolver = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this->_container, $this->_parser, $this->_logger);
}
}
