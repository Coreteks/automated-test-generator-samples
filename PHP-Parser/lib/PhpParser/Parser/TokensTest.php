<?php

namespace tests\PhpParser\Parser;

use Mockery as m;
use PhpParser\Parser\Tokens;

class TokensTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Parser\Tokens
*/
protected $tokens;

public function setUp()
{
    parent::setUp();

    $this->tokens = new \PhpParser\Parser\Tokens();
}
}
