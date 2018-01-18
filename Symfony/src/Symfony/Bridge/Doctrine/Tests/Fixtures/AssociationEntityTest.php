<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\AssociationEntity;

class AssociationEntityTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\AssociationEntity
*/
protected $associationEntity;

public function setUp()
{
    parent::setUp();

    $this->associationEntity = new \Symfony\Bridge\Doctrine\Tests\Fixtures\AssociationEntity();
}
}
