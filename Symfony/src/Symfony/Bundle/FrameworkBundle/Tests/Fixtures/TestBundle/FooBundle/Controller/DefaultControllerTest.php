<?php

namespace tests\TestBundle\FooBundle\Controller;

use Mockery as m;
use TestBundle\FooBundle\Controller\DefaultController;

class DefaultControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \TestBundle\FooBundle\Controller\DefaultController
*/
protected $defaultController;

public function setUp()
{
    parent::setUp();

    $this->defaultController = new \TestBundle\FooBundle\Controller\DefaultController();
}
}
