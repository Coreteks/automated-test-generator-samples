<?php

namespace tests\TestBundle\FooBundle;

use Mockery as m;
use TestBundle\FooBundle\FooBundle;

class FooBundleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \TestBundle\FooBundle\FooBundle
*/
protected $fooBundle;

public function setUp()
{
    parent::setUp();

    $this->fooBundle = new \TestBundle\FooBundle\FooBundle();
}
}
