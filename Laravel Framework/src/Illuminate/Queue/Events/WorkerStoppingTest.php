<?php

namespace tests\Illuminate\Queue\Events;

use Illuminate\Queue\Events\WorkerStopping;
use Mockery as m;

class WorkerStoppingTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Queue\Events\WorkerStopping
*/
protected $workerStopping;

public function setUp()
{
    parent::setUp();

    $this->workerStopping = new \Illuminate\Queue\Events\WorkerStopping();
}
}
