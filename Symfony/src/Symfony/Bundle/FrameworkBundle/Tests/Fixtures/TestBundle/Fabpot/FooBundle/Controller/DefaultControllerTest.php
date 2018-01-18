<?php

namespace tests\TestBundle\Fabpot\FooBundle\Controller;

use Mockery as m;
use TestBundle\Fabpot\FooBundle\Controller\DefaultController;

class DefaultControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \TestBundle\Fabpot\FooBundle\Controller\DefaultController
*/
protected $defaultController;

public function setUp()
{
    parent::setUp();

    $this->defaultController = new \TestBundle\Fabpot\FooBundle\Controller\DefaultController();
}
}
