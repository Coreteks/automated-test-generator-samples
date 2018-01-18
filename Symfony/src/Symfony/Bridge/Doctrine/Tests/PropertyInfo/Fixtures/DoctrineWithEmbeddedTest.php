<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures\DoctrineWithEmbedded;

class DoctrineWithEmbeddedTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures\DoctrineWithEmbedded
*/
protected $doctrineWithEmbedded;

public function setUp()
{
    parent::setUp();

    $this->doctrineWithEmbedded = new \Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures\DoctrineWithEmbedded();
}
}
