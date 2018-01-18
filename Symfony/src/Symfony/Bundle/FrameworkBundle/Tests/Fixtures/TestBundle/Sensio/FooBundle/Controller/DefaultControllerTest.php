<?php

namespace tests\TestBundle\Sensio\FooBundle\Controller;

use Mockery as m;
use TestBundle\Sensio\FooBundle\Controller\DefaultController;

class DefaultControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \TestBundle\Sensio\FooBundle\Controller\DefaultController
*/
protected $defaultController;

public function setUp()
{
    parent::setUp();

    $this->defaultController = new \TestBundle\Sensio\FooBundle\Controller\DefaultController();
}
}
