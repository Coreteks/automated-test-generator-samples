<?php

namespace tests;

use CI_DB_cubrid_utility;
use Mockery as m;

class CI_DB_cubrid_utilityTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_DB_cubrid_utility
*/
protected $cI_DB_cubrid_utility;

public function setUp()
{
    parent::setUp();

    $this->cI_DB_cubrid_utility = new \CI_DB_cubrid_utility();
}

public function testList_databases0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->db->data_cache['db_names'])) == false (line 56)

    $actual = $this->cI_DB_cubrid_utility->list_databases();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_databases1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->db->data_cache['db_names'])) == true (line 56)

    $actual = $this->cI_DB_cubrid_utility->list_databases();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
