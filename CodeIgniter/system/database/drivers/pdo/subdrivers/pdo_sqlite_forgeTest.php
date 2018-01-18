<?php

namespace tests;

use CI_DB_pdo_sqlite_forge;
use Mockery as m;

class CI_DB_pdo_sqlite_forgeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_db = null;
/**
* @var \CI_DB_pdo_sqlite_forge
*/
protected $cI_DB_pdo_sqlite_forge;

public function setUp()
{
    parent::setUp();

    $this->_db = null;
    $this->cI_DB_pdo_sqlite_forge = new \CI_DB_pdo_sqlite_forge($this->_db);
}

public function testCreate_database0()
{
    $db_name = m::mock('UntypedParameter_db_name_');

    // TODO: Your mock expectations here

    $actual = $this->cI_DB_pdo_sqlite_forge->create_database($db_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDrop_database0()
{
    $db_name = m::mock('UntypedParameter_db_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\file_exists($this->db->database)) == false (line 122)

    $actual = $this->cI_DB_pdo_sqlite_forge->drop_database($db_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDrop_database1()
{
    $db_name = m::mock('UntypedParameter_db_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\file_exists($this->db->database)) == true (line 122)
    // if (!@\unlink($this->db->database)) == false (line 126)
    // if (!empty($this->db->data_cache['db_names'])) == false (line 130)

    $actual = $this->cI_DB_pdo_sqlite_forge->drop_database($db_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDrop_database2()
{
    $db_name = m::mock('UntypedParameter_db_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\file_exists($this->db->database)) == true (line 122)
    // if (!@\unlink($this->db->database)) == false (line 126)
    // if (!empty($this->db->data_cache['db_names'])) == true (line 130)
    // if ($key !== \FALSE) == false (line 133)

    $actual = $this->cI_DB_pdo_sqlite_forge->drop_database($db_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDrop_database3()
{
    $db_name = m::mock('UntypedParameter_db_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\file_exists($this->db->database)) == true (line 122)
    // if (!@\unlink($this->db->database)) == false (line 126)
    // if (!empty($this->db->data_cache['db_names'])) == true (line 130)
    // if ($key !== \FALSE) == true (line 133)

    $actual = $this->cI_DB_pdo_sqlite_forge->drop_database($db_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDrop_database4()
{
    $db_name = m::mock('UntypedParameter_db_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\file_exists($this->db->database)) == true (line 122)
    // if (!@\unlink($this->db->database)) == true (line 126)

    $actual = $this->cI_DB_pdo_sqlite_forge->drop_database($db_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
