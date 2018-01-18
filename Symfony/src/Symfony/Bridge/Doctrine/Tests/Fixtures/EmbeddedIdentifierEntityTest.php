<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\EmbeddedIdentifierEntity;

class EmbeddedIdentifierEntityTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\EmbeddedIdentifierEntity
*/
protected $embeddedIdentifierEntity;

public function setUp()
{
    parent::setUp();

    $this->embeddedIdentifierEntity = new \Symfony\Bridge\Doctrine\Tests\Fixtures\EmbeddedIdentifierEntity();
}
}
