<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Fixtures\BaseBundle;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\BaseBundle\BaseBundle;

class BaseBundleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Fixtures\BaseBundle\BaseBundle
*/
protected $baseBundle;

public function setUp()
{
    parent::setUp();

    $this->baseBundle = new \Symfony\Bundle\FrameworkBundle\Tests\Fixtures\BaseBundle\BaseBundle();
}
}
