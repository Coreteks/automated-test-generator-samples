<?php

namespace tests\Illuminate\Foundation\Testing;

use Illuminate\Foundation\Testing\RefreshDatabaseState;
use Mockery as m;

class RefreshDatabaseStateTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Testing\RefreshDatabaseState
*/
protected $refreshDatabaseState;

public function setUp()
{
    parent::setUp();

    $this->refreshDatabaseState = new \Illuminate\Foundation\Testing\RefreshDatabaseState();
}
}
