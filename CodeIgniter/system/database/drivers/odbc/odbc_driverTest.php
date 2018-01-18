<?php

namespace tests;

use CI_DB_odbc_driver;
use Mockery as m;

class CI_DB_odbc_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_DB_odbc_driver
*/
protected $cI_DB_odbc_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_DB_odbc_driver = new \CI_DB_odbc_driver($this->_params);
}

public function testDb_connect0()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    $actual = $this->cI_DB_odbc_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds0()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == false (line 155)
    // if (!\is_array($binds)) == false (line 159)
    // if ($c = \preg_match_all("/'[^']*'|\"[^\"]*\"/i", $sql, $matches)) == false (line 175)
    // if (($c = \preg_match_all('/' . \preg_quote($this->bind_marker, '/') . '/i', $sql, $matches, \PREG_OFFSET_CAPTURE)) !== $bind_count) == false (line 189)
    // if ($this->bind_marker !== '?') == false (line 194)
    // if (\FALSE !== ($this->odbc_result = \odbc_prepare($this->conn_id, $sql))) == false (line 204)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds1()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == false (line 155)
    // if (!\is_array($binds)) == false (line 159)
    // if ($c = \preg_match_all("/'[^']*'|\"[^\"]*\"/i", $sql, $matches)) == false (line 175)
    // if (($c = \preg_match_all('/' . \preg_quote($this->bind_marker, '/') . '/i', $sql, $matches, \PREG_OFFSET_CAPTURE)) !== $bind_count) == false (line 189)
    // if ($this->bind_marker !== '?') == false (line 194)
    // if (\FALSE !== ($this->odbc_result = \odbc_prepare($this->conn_id, $sql))) == true (line 204)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds2()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == false (line 155)
    // if (!\is_array($binds)) == false (line 159)
    // if ($c = \preg_match_all("/'[^']*'|\"[^\"]*\"/i", $sql, $matches)) == false (line 175)
    // if (($c = \preg_match_all('/' . \preg_quote($this->bind_marker, '/') . '/i', $sql, $matches, \PREG_OFFSET_CAPTURE)) !== $bind_count) == false (line 189)
    // if ($this->bind_marker !== '?') == true (line 194)
    // PhpParser\Node\Stmt\Do_ == false (line 196)
    // if (\FALSE !== ($this->odbc_result = \odbc_prepare($this->conn_id, $sql))) == false (line 204)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds3()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == false (line 155)
    // if (!\is_array($binds)) == false (line 159)
    // if ($c = \preg_match_all("/'[^']*'|\"[^\"]*\"/i", $sql, $matches)) == false (line 175)
    // if (($c = \preg_match_all('/' . \preg_quote($this->bind_marker, '/') . '/i', $sql, $matches, \PREG_OFFSET_CAPTURE)) !== $bind_count) == false (line 189)
    // if ($this->bind_marker !== '?') == true (line 194)
    // PhpParser\Node\Stmt\Do_ == false (line 196)
    // if (\FALSE !== ($this->odbc_result = \odbc_prepare($this->conn_id, $sql))) == true (line 204)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds4()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == false (line 155)
    // if (!\is_array($binds)) == false (line 159)
    // if ($c = \preg_match_all("/'[^']*'|\"[^\"]*\"/i", $sql, $matches)) == false (line 175)
    // if (($c = \preg_match_all('/' . \preg_quote($this->bind_marker, '/') . '/i', $sql, $matches, \PREG_OFFSET_CAPTURE)) !== $bind_count) == true (line 189)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds5()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == false (line 155)
    // if (!\is_array($binds)) == false (line 159)
    // if ($c = \preg_match_all("/'[^']*'|\"[^\"]*\"/i", $sql, $matches)) == true (line 175)
    // if ($bind_count !== $c) == false (line 184)
    // if ($this->bind_marker !== '?') == false (line 194)
    // if (\FALSE !== ($this->odbc_result = \odbc_prepare($this->conn_id, $sql))) == false (line 204)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds6()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == false (line 155)
    // if (!\is_array($binds)) == false (line 159)
    // if ($c = \preg_match_all("/'[^']*'|\"[^\"]*\"/i", $sql, $matches)) == true (line 175)
    // if ($bind_count !== $c) == false (line 184)
    // if ($this->bind_marker !== '?') == false (line 194)
    // if (\FALSE !== ($this->odbc_result = \odbc_prepare($this->conn_id, $sql))) == true (line 204)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds7()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == false (line 155)
    // if (!\is_array($binds)) == false (line 159)
    // if ($c = \preg_match_all("/'[^']*'|\"[^\"]*\"/i", $sql, $matches)) == true (line 175)
    // if ($bind_count !== $c) == false (line 184)
    // if ($this->bind_marker !== '?') == true (line 194)
    // PhpParser\Node\Stmt\Do_ == false (line 196)
    // if (\FALSE !== ($this->odbc_result = \odbc_prepare($this->conn_id, $sql))) == false (line 204)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds8()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == false (line 155)
    // if (!\is_array($binds)) == false (line 159)
    // if ($c = \preg_match_all("/'[^']*'|\"[^\"]*\"/i", $sql, $matches)) == true (line 175)
    // if ($bind_count !== $c) == false (line 184)
    // if ($this->bind_marker !== '?') == true (line 194)
    // PhpParser\Node\Stmt\Do_ == false (line 196)
    // if (\FALSE !== ($this->odbc_result = \odbc_prepare($this->conn_id, $sql))) == true (line 204)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds9()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == false (line 155)
    // if (!\is_array($binds)) == false (line 159)
    // if ($c = \preg_match_all("/'[^']*'|\"[^\"]*\"/i", $sql, $matches)) == true (line 175)
    // if ($bind_count !== $c) == true (line 184)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds10()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == false (line 155)
    // if (!\is_array($binds)) == true (line 159)
    // if ($c = \preg_match_all("/'[^']*'|\"[^\"]*\"/i", $sql, $matches)) == false (line 175)
    // if (($c = \preg_match_all('/' . \preg_quote($this->bind_marker, '/') . '/i', $sql, $matches, \PREG_OFFSET_CAPTURE)) !== $bind_count) == false (line 189)
    // if ($this->bind_marker !== '?') == false (line 194)
    // if (\FALSE !== ($this->odbc_result = \odbc_prepare($this->conn_id, $sql))) == false (line 204)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds11()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == false (line 155)
    // if (!\is_array($binds)) == true (line 159)
    // if ($c = \preg_match_all("/'[^']*'|\"[^\"]*\"/i", $sql, $matches)) == false (line 175)
    // if (($c = \preg_match_all('/' . \preg_quote($this->bind_marker, '/') . '/i', $sql, $matches, \PREG_OFFSET_CAPTURE)) !== $bind_count) == false (line 189)
    // if ($this->bind_marker !== '?') == false (line 194)
    // if (\FALSE !== ($this->odbc_result = \odbc_prepare($this->conn_id, $sql))) == true (line 204)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds12()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == false (line 155)
    // if (!\is_array($binds)) == true (line 159)
    // if ($c = \preg_match_all("/'[^']*'|\"[^\"]*\"/i", $sql, $matches)) == false (line 175)
    // if (($c = \preg_match_all('/' . \preg_quote($this->bind_marker, '/') . '/i', $sql, $matches, \PREG_OFFSET_CAPTURE)) !== $bind_count) == false (line 189)
    // if ($this->bind_marker !== '?') == true (line 194)
    // PhpParser\Node\Stmt\Do_ == false (line 196)
    // if (\FALSE !== ($this->odbc_result = \odbc_prepare($this->conn_id, $sql))) == false (line 204)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds13()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == false (line 155)
    // if (!\is_array($binds)) == true (line 159)
    // if ($c = \preg_match_all("/'[^']*'|\"[^\"]*\"/i", $sql, $matches)) == false (line 175)
    // if (($c = \preg_match_all('/' . \preg_quote($this->bind_marker, '/') . '/i', $sql, $matches, \PREG_OFFSET_CAPTURE)) !== $bind_count) == false (line 189)
    // if ($this->bind_marker !== '?') == true (line 194)
    // PhpParser\Node\Stmt\Do_ == false (line 196)
    // if (\FALSE !== ($this->odbc_result = \odbc_prepare($this->conn_id, $sql))) == true (line 204)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds14()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == false (line 155)
    // if (!\is_array($binds)) == true (line 159)
    // if ($c = \preg_match_all("/'[^']*'|\"[^\"]*\"/i", $sql, $matches)) == false (line 175)
    // if (($c = \preg_match_all('/' . \preg_quote($this->bind_marker, '/') . '/i', $sql, $matches, \PREG_OFFSET_CAPTURE)) !== $bind_count) == true (line 189)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds15()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == false (line 155)
    // if (!\is_array($binds)) == true (line 159)
    // if ($c = \preg_match_all("/'[^']*'|\"[^\"]*\"/i", $sql, $matches)) == true (line 175)
    // if ($bind_count !== $c) == false (line 184)
    // if ($this->bind_marker !== '?') == false (line 194)
    // if (\FALSE !== ($this->odbc_result = \odbc_prepare($this->conn_id, $sql))) == false (line 204)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds16()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == false (line 155)
    // if (!\is_array($binds)) == true (line 159)
    // if ($c = \preg_match_all("/'[^']*'|\"[^\"]*\"/i", $sql, $matches)) == true (line 175)
    // if ($bind_count !== $c) == false (line 184)
    // if ($this->bind_marker !== '?') == false (line 194)
    // if (\FALSE !== ($this->odbc_result = \odbc_prepare($this->conn_id, $sql))) == true (line 204)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds17()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == false (line 155)
    // if (!\is_array($binds)) == true (line 159)
    // if ($c = \preg_match_all("/'[^']*'|\"[^\"]*\"/i", $sql, $matches)) == true (line 175)
    // if ($bind_count !== $c) == false (line 184)
    // if ($this->bind_marker !== '?') == true (line 194)
    // PhpParser\Node\Stmt\Do_ == false (line 196)
    // if (\FALSE !== ($this->odbc_result = \odbc_prepare($this->conn_id, $sql))) == false (line 204)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds18()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == false (line 155)
    // if (!\is_array($binds)) == true (line 159)
    // if ($c = \preg_match_all("/'[^']*'|\"[^\"]*\"/i", $sql, $matches)) == true (line 175)
    // if ($bind_count !== $c) == false (line 184)
    // if ($this->bind_marker !== '?') == true (line 194)
    // PhpParser\Node\Stmt\Do_ == false (line 196)
    // if (\FALSE !== ($this->odbc_result = \odbc_prepare($this->conn_id, $sql))) == true (line 204)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds19()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == false (line 155)
    // if (!\is_array($binds)) == true (line 159)
    // if ($c = \preg_match_all("/'[^']*'|\"[^\"]*\"/i", $sql, $matches)) == true (line 175)
    // if ($bind_count !== $c) == true (line 184)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile_binds20()
{
    $sql = m::mock('UntypedParameter_sql_');
    $binds = m::mock('UntypedParameter_binds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($binds) or empty($this->bind_marker) or \strpos($sql, $this->bind_marker) === \FALSE) == true (line 155)

    $actual = $this->cI_DB_odbc_driver->compile_binds($sql, $binds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_write_type0()
{
    $sql = m::mock('UntypedParameter_sql_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('#^(INSERT|UPDATE).*RETURNING\\s.+(\\,\\s?.+)*$#is', $sql)) == false (line 301)

    $actual = $this->cI_DB_odbc_driver->is_write_type($sql);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_write_type1()
{
    $sql = m::mock('UntypedParameter_sql_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('#^(INSERT|UPDATE).*RETURNING\\s.+(\\,\\s?.+)*$#is', $sql)) == true (line 301)

    $actual = $this->cI_DB_odbc_driver->is_write_type($sql);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAffected_rows0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_odbc_driver->affected_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert_id0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_odbc_driver->insert_id();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_odbc_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
