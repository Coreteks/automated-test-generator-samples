<?php

namespace tests\PhpParser\PrettyPrinter;

use Mockery as m;
use PhpParser\PrettyPrinter\Standard;

class StandardTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\PrettyPrinter\Standard
*/
protected $standard;

public function setUp()
{
    parent::setUp();

    $this->standard = new \PhpParser\PrettyPrinter\Standard();
}
}
