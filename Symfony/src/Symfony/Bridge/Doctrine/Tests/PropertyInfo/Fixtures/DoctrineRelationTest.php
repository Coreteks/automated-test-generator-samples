<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures\DoctrineRelation;

class DoctrineRelationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures\DoctrineRelation
*/
protected $doctrineRelation;

public function setUp()
{
    parent::setUp();

    $this->doctrineRelation = new \Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures\DoctrineRelation();
}
}
