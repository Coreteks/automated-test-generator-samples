<?php

namespace tests;

use CI_DB;
use Mockery as m;

class CI_DBTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_DB
*/
protected $cI_DB;

public function setUp()
{
    parent::setUp();

    $this->cI_DB = new \CI_DB();
}
}
