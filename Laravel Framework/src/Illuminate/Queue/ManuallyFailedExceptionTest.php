<?php

namespace tests\Illuminate\Queue;

use Illuminate\Queue\ManuallyFailedException;
use Mockery as m;

class ManuallyFailedExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Queue\ManuallyFailedException
*/
protected $manuallyFailedException;

public function setUp()
{
    parent::setUp();

    $this->manuallyFailedException = new \Illuminate\Queue\ManuallyFailedException();
}
}
