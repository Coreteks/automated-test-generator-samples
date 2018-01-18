<?php

namespace tests;

use CI_DB_ibase_forge;
use Mockery as m;

class CI_DB_ibase_forgeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_DB_ibase_forge
*/
protected $cI_DB_ibase_forge;

public function setUp()
{
    parent::setUp();

    $this->cI_DB_ibase_forge = new \CI_DB_ibase_forge();
}

public function testCreate_database0()
{
    $db_name = m::mock('UntypedParameter_db_name_');

    // TODO: Your mock expectations here

    $actual = $this->cI_DB_ibase_forge->create_database($db_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDrop_database0()
{
    $db_name = m::mock('UntypedParameter_db_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\ibase_drop_db($this->conn_id)) == false (line 116)
    // if (!empty($this->db->data_cache['db_names'])) == false (line 120)

    $actual = $this->cI_DB_ibase_forge->drop_database($db_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDrop_database1()
{
    $db_name = m::mock('UntypedParameter_db_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\ibase_drop_db($this->conn_id)) == false (line 116)
    // if (!empty($this->db->data_cache['db_names'])) == true (line 120)
    // if ($key !== \FALSE) == false (line 123)

    $actual = $this->cI_DB_ibase_forge->drop_database($db_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDrop_database2()
{
    $db_name = m::mock('UntypedParameter_db_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\ibase_drop_db($this->conn_id)) == false (line 116)
    // if (!empty($this->db->data_cache['db_names'])) == true (line 120)
    // if ($key !== \FALSE) == true (line 123)

    $actual = $this->cI_DB_ibase_forge->drop_database($db_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDrop_database3()
{
    $db_name = m::mock('UntypedParameter_db_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\ibase_drop_db($this->conn_id)) == true (line 116)

    $actual = $this->cI_DB_ibase_forge->drop_database($db_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
