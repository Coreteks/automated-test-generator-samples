<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\AssociationEntity2;

class AssociationEntity2Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\AssociationEntity2
*/
protected $associationEntity2;

public function setUp()
{
    parent::setUp();

    $this->associationEntity2 = new \Symfony\Bridge\Doctrine\Tests\Fixtures\AssociationEntity2();
}
}
