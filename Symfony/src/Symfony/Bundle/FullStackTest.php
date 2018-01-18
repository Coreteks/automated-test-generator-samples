<?php

namespace tests\Symfony\Bundle;

use Mockery as m;
use Symfony\Bundle\FullStack;

class FullStackTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FullStack
*/
protected $fullStack;

public function setUp()
{
    parent::setUp();

    $this->fullStack = new \Symfony\Bundle\FullStack();
}
}
