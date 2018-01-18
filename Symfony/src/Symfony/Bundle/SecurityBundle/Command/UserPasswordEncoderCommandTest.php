<?php

namespace tests\Symfony\Bundle\SecurityBundle\Command;

use Mockery as m;
use Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;

class UserPasswordEncoderCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_encoderFactory;
/**
* @var array
*/
protected $_userClasses = [];
/**
* @var \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
*/
protected $userPasswordEncoderCommand;

public function setUp()
{
    parent::setUp();

    $this->_encoderFactory = m::mock(\Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface::class);
    $this->_userClasses = [];
    $this->userPasswordEncoderCommand = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand($this->_encoderFactory, $this->_userClasses);
}
}
