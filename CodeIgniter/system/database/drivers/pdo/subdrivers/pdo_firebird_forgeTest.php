<?php

namespace tests;

use CI_DB_pdo_firebird_forge;
use Mockery as m;

class CI_DB_pdo_firebird_forgeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_DB_pdo_firebird_forge
*/
protected $cI_DB_pdo_firebird_forge;

public function setUp()
{
    parent::setUp();

    $this->cI_DB_pdo_firebird_forge = new \CI_DB_pdo_firebird_forge();
}

public function testCreate_database0()
{
    $db_name = m::mock('UntypedParameter_db_name_');

    // TODO: Your mock expectations here

    $actual = $this->cI_DB_pdo_firebird_forge->create_database($db_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDrop_database0()
{
    $db_name = m::mock('UntypedParameter_db_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\ibase_drop_db($this->conn_id)) == false (line 102)
    // if (!empty($this->db->data_cache['db_names'])) == false (line 106)

    $actual = $this->cI_DB_pdo_firebird_forge->drop_database($db_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDrop_database1()
{
    $db_name = m::mock('UntypedParameter_db_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\ibase_drop_db($this->conn_id)) == false (line 102)
    // if (!empty($this->db->data_cache['db_names'])) == true (line 106)
    // if ($key !== \FALSE) == false (line 109)

    $actual = $this->cI_DB_pdo_firebird_forge->drop_database($db_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDrop_database2()
{
    $db_name = m::mock('UntypedParameter_db_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\ibase_drop_db($this->conn_id)) == false (line 102)
    // if (!empty($this->db->data_cache['db_names'])) == true (line 106)
    // if ($key !== \FALSE) == true (line 109)

    $actual = $this->cI_DB_pdo_firebird_forge->drop_database($db_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDrop_database3()
{
    $db_name = m::mock('UntypedParameter_db_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\ibase_drop_db($this->conn_id)) == true (line 102)

    $actual = $this->cI_DB_pdo_firebird_forge->drop_database($db_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
