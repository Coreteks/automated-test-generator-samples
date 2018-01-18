<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Fixtures;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\DeclaredClass;

class DeclaredClassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Fixtures\DeclaredClass
*/
protected $declaredClass;

public function setUp()
{
    parent::setUp();

    $this->declaredClass = new \Symfony\Bundle\FrameworkBundle\Tests\Fixtures\DeclaredClass();
}
}
