<?php

namespace tests\TestBundle\Sensio\Cms\FooBundle;

use Mockery as m;
use TestBundle\Sensio\Cms\FooBundle\SensioCmsFooBundle;

class SensioCmsFooBundleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \TestBundle\Sensio\Cms\FooBundle\SensioCmsFooBundle
*/
protected $sensioCmsFooBundle;

public function setUp()
{
    parent::setUp();

    $this->sensioCmsFooBundle = new \TestBundle\Sensio\Cms\FooBundle\SensioCmsFooBundle();
}
}
