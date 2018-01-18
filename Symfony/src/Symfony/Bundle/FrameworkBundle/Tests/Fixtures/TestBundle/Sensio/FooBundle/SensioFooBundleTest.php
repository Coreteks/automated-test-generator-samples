<?php

namespace tests\TestBundle\Sensio\FooBundle;

use Mockery as m;
use TestBundle\Sensio\FooBundle\SensioFooBundle;

class SensioFooBundleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \TestBundle\Sensio\FooBundle\SensioFooBundle
*/
protected $sensioFooBundle;

public function setUp()
{
    parent::setUp();

    $this->sensioFooBundle = new \TestBundle\Sensio\FooBundle\SensioFooBundle();
}
}
