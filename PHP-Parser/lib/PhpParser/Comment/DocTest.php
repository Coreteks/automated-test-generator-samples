<?php

namespace tests\PhpParser\Comment;

use Mockery as m;
use PhpParser\Comment\Doc;

class DocTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Comment\Doc
*/
protected $doc;

public function setUp()
{
    parent::setUp();

    $this->doc = new \PhpParser\Comment\Doc();
}
}
