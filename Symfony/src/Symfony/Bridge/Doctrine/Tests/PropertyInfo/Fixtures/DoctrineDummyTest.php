<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures\DoctrineDummy;

class DoctrineDummyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures\DoctrineDummy
*/
protected $doctrineDummy;

public function setUp()
{
    parent::setUp();

    $this->doctrineDummy = new \Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures\DoctrineDummy();
}
}
