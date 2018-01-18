<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures\Embeddable;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\Embeddable\Identifier;

class IdentifierTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\Embeddable\Identifier
*/
protected $identifier;

public function setUp()
{
    parent::setUp();

    $this->identifier = new \Symfony\Bridge\Doctrine\Tests\Fixtures\Embeddable\Identifier();
}
}
