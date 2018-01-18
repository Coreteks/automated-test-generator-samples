<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Category;

class CategoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Category
*/
protected $category;

public function setUp()
{
    parent::setUp();

    $this->category = new \Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Category();
}
}
