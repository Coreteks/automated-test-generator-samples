<?php

namespace tests\PhpParser\Parser;

use Mockery as m;
use PhpParser\Parser\Php5;

class Php5Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Parser\Php5
*/
protected $php5;

public function setUp()
{
    parent::setUp();

    $this->php5 = new \PhpParser\Parser\Php5();
}
}
