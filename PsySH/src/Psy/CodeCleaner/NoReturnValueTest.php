<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\NoReturnValue;

class NoReturnValueTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\NoReturnValue
*/
protected $noReturnValue;

public function setUp()
{
    parent::setUp();

    $this->noReturnValue = new \Psy\CodeCleaner\NoReturnValue();
}
}
