<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Serialization;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Serialization\Author;

class AuthorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Serialization\Author
*/
protected $author;

public function setUp()
{
    parent::setUp();

    $this->author = new \Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Serialization\Author();
}
}
