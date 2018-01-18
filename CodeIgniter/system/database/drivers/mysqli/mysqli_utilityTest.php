<?php

namespace tests;

use CI_DB_mysqli_utility;
use Mockery as m;

class CI_DB_mysqli_utilityTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_DB_mysqli_utility
*/
protected $cI_DB_mysqli_utility;

public function setUp()
{
    parent::setUp();

    $this->cI_DB_mysqli_utility = new \CI_DB_mysqli_utility();
}
}
