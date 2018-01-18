<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Fixtures;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\WarmedClass;

class WarmedClassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Fixtures\WarmedClass
*/
protected $warmedClass;

public function setUp()
{
    parent::setUp();

    $this->warmedClass = new \Symfony\Bundle\FrameworkBundle\Tests\Fixtures\WarmedClass();
}
}
