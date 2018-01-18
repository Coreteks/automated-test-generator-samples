<?php

namespace tests\Symfony\Bridge\Doctrine\Form;

use Doctrine\Common\Persistence\ManagerRegistry;
use Mockery as m;
use Symfony\Bridge\Doctrine\Form\DoctrineOrmExtension;

class DoctrineOrmExtensionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_registry;
/**
* @var \Symfony\Bridge\Doctrine\Form\DoctrineOrmExtension
*/
protected $doctrineOrmExtension;

public function setUp()
{
    parent::setUp();

    $this->_registry = m::mock(\Doctrine\Common\Persistence\ManagerRegistry::class);
    $this->doctrineOrmExtension = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmExtension($this->_registry);
}
}
