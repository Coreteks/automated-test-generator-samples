<?php

namespace tests\TestBundle\FooBundle\Controller\Sub;

use Mockery as m;
use TestBundle\FooBundle\Controller\Sub\DefaultController;

class DefaultControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \TestBundle\FooBundle\Controller\Sub\DefaultController
*/
protected $defaultController;

public function setUp()
{
    parent::setUp();

    $this->defaultController = new \TestBundle\FooBundle\Controller\Sub\DefaultController();
}
}