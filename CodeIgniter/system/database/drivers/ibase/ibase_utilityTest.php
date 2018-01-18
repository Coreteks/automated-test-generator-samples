<?php

namespace tests;

use CI_DB_ibase_utility;
use Mockery as m;

class CI_DB_ibase_utilityTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_DB_ibase_utility
*/
protected $cI_DB_ibase_utility;

public function setUp()
{
    parent::setUp();

    $this->cI_DB_ibase_utility = new \CI_DB_ibase_utility();
}
}
