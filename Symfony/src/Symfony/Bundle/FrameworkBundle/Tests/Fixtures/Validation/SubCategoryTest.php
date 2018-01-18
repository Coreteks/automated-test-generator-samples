<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\SubCategory;

class SubCategoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\SubCategory
*/
protected $subCategory;

public function setUp()
{
    parent::setUp();

    $this->subCategory = new \Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\SubCategory();
}
}
