<?php

namespace tests\TestBundle\Sensio\Cms\FooBundle\Controller;

use Mockery as m;
use TestBundle\Sensio\Cms\FooBundle\Controller\DefaultController;

class DefaultControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \TestBundle\Sensio\Cms\FooBundle\Controller\DefaultController
*/
protected $defaultController;

public function setUp()
{
    parent::setUp();

    $this->defaultController = new \TestBundle\Sensio\Cms\FooBundle\Controller\DefaultController();
}
}
