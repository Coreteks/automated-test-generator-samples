<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures\DoctrineEmbeddable;

class DoctrineEmbeddableTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures\DoctrineEmbeddable
*/
protected $doctrineEmbeddable;

public function setUp()
{
    parent::setUp();

    $this->doctrineEmbeddable = new \Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures\DoctrineEmbeddable();
}
}
