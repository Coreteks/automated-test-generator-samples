<?php

namespace tests\PhpParser\Parser;

use Mockery as m;
use PhpParser\Parser\Php7;

class Php7Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Parser\Php7
*/
protected $php7;

public function setUp()
{
    parent::setUp();

    $this->php7 = new \PhpParser\Parser\Php7();
}
}
