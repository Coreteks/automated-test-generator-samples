<?php

namespace tests\Illuminate\Container;

use Illuminate\Container\EntryNotFoundException;
use Mockery as m;

class EntryNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Container\EntryNotFoundException
*/
protected $entryNotFoundException;

public function setUp()
{
    parent::setUp();

    $this->entryNotFoundException = new \Illuminate\Container\EntryNotFoundException();
}
}
