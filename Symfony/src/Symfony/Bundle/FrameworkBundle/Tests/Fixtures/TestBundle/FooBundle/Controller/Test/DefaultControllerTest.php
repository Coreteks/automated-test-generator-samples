<?php

namespace tests\TestBundle\FooBundle\Controller\Test;

use Mockery as m;
use TestBundle\FooBundle\Controller\Test\DefaultController;

class DefaultControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \TestBundle\FooBundle\Controller\Test\DefaultController
*/
protected $defaultController;

public function setUp()
{
    parent::setUp();

    $this->defaultController = new \TestBundle\FooBundle\Controller\Test\DefaultController();
}
}
