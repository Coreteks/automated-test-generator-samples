<?php

namespace tests\PhpParser;

use Mockery as m;
use PhpParser\ConstExprEvaluationException;

class ConstExprEvaluationExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\ConstExprEvaluationException
*/
protected $constExprEvaluationException;

public function setUp()
{
    parent::setUp();

    $this->constExprEvaluationException = new \PhpParser\ConstExprEvaluationException();
}
}
