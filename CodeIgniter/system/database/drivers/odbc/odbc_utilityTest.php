<?php

namespace tests;

use CI_DB_odbc_utility;
use Mockery as m;

class CI_DB_odbc_utilityTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_DB_odbc_utility
*/
protected $cI_DB_odbc_utility;

public function setUp()
{
    parent::setUp();

    $this->cI_DB_odbc_utility = new \CI_DB_odbc_utility();
}
}
