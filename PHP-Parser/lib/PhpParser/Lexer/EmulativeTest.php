<?php

namespace tests\PhpParser\Lexer;

use Mockery as m;
use PhpParser\Lexer\Emulative;

class EmulativeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Lexer\Emulative
*/
protected $emulative;

public function setUp()
{
    parent::setUp();

    $this->emulative = new \PhpParser\Lexer\Emulative();
}
}
