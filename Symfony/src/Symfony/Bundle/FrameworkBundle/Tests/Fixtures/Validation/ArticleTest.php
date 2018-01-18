<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Article;

class ArticleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Article
*/
protected $article;

public function setUp()
{
    parent::setUp();

    $this->article = new \Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Article();
}
}
