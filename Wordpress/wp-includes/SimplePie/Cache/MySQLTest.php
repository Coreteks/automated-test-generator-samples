<?php

namespace tests;

use Mockery as m;
use SimplePie_Cache_MySQL;

class SimplePie_Cache_MySQLTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_location = null;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var mixed
*/
protected $_type = null;
/**
* @var \SimplePie_Cache_MySQL
*/
protected $simplePie_Cache_MySQL;

public function setUp()
{
    parent::setUp();

    $this->_location = null;
    $this->_name = null;
    $this->_type = null;
    $this->simplePie_Cache_MySQL = new \SimplePie_Cache_MySQL($this->_location, $this->_name, $this->_type);
}

public function testSave0()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == false (line 160)
    // if ($query->execute()) == false (line 257)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave1()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == false (line 160)
    // if ($query->execute()) == true (line 257)
    // if ($query->rowCount() > 0) == false (line 259)
    // if ($query->execute()) == false (line 276)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave2()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == false (line 160)
    // if ($query->execute()) == true (line 257)
    // if ($query->rowCount() > 0) == false (line 259)
    // if ($query->execute()) == true (line 276)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave3()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == false (line 160)
    // if ($query->execute()) == true (line 257)
    // if ($query->rowCount() > 0) == true (line 259)
    // if ($this->execute()) == false (line 265)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave4()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == false (line 160)
    // if ($query->execute()) == true (line 257)
    // if ($query->rowCount() > 0) == true (line 259)
    // if ($this->execute()) == true (line 265)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave5()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == false (line 168)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave6()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == false (line 207)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave7()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == false (line 217)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave8()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave9()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave10()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave11()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave12()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave13()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave14()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave15()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave16()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave17()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave18()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == false (line 217)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave19()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave20()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave21()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave22()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave23()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave24()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave25()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave26()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave27()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave28()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == false (line 200)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave29()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == false (line 170)
    // if (!$query->execute()) == true (line 200)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave30()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == false (line 207)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave31()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == false (line 217)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave32()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave33()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave34()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave35()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave36()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave37()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave38()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave39()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave40()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave41()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave42()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == false (line 217)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave43()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave44()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave45()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave46()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave47()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave48()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave49()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave50()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave51()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave52()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave53()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == false (line 173)
    // if (!$query->execute()) == true (line 188)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave54()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == false (line 207)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave55()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == false (line 217)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave56()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave57()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave58()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave59()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave60()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave61()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave62()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave63()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave64()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave65()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave66()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == false (line 217)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave67()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave68()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave69()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave70()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave71()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave72()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave73()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave74()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == false (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave75()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == false (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave76()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == false (line 188)
    // if (!empty($ids)) == true (line 207)
    // if ($query->execute()) == true (line 217)
    // while ($row = $query->fetchColumn()) == true (line 220)
    // while ($row = $query->fetchColumn()) == false (line 220)
    // if (!($date = $prepared[1][$new_id]->get_date('U'))) == true (line 229)
    // if (!$query->execute()) == true (line 239)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave77()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 155)
    // if ($data instanceof \SimplePie) == true (line 160)
    // if ($query->execute()) == true (line 168)
    // if ($query->fetchColumn() > 0) == true (line 170)
    // if ($items) == true (line 173)
    // if (!$query->execute()) == true (line 188)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave78()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == true (line 155)

    $actual = $this->simplePie_Cache_MySQL->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == false (line 300)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == false (line 313)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == false (line 327)
    // if ($feed !== \null) == false (line 336)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == false (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == false (line 346)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == false (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == false (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == true (line 348)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == false (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == false (line 346)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == false (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == false (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == true (line 348)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == true (line 327)
    // if ($feed !== \null) == false (line 336)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == true (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == false (line 346)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == true (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == true (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == true (line 348)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == true (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == false (line 346)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == true (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == true (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == true (line 348)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == true (line 323)
    // if ($feed !== \null) == false (line 336)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == true (line 323)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == false (line 346)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == true (line 323)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == true (line 323)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == true (line 348)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == true (line 323)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == false (line 346)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == true (line 323)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == true (line 323)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == true (line 348)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == true (line 319)
    // if ($feed !== \null) == false (line 336)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == true (line 319)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == false (line 346)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == true (line 319)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == true (line 319)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == true (line 348)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad27()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == true (line 319)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == false (line 346)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad28()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == true (line 319)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad29()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == true (line 319)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == true (line 348)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad30()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == true (line 315)
    // if ($feed !== \null) == false (line 336)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad31()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == true (line 315)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == false (line 346)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad32()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == true (line 315)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad33()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == true (line 315)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == true (line 348)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad34()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == true (line 315)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == false (line 346)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad35()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == true (line 315)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad36()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == false (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == true (line 315)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == true (line 348)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad37()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == false (line 313)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad38()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == false (line 327)
    // if ($feed !== \null) == false (line 336)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad39()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == false (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == false (line 346)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad40()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == false (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad41()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == false (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == true (line 348)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad42()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == false (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == false (line 346)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad43()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == false (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad44()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == false (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == true (line 348)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad45()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == true (line 327)
    // if ($feed !== \null) == false (line 336)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad46()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == true (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == false (line 346)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad47()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == true (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad48()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == true (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == true (line 348)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad49()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == true (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == false (line 346)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad50()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == true (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad51()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == false (line 323)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RSS_20]['rss'][0])) == true (line 327)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == true (line 348)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad52()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == true (line 323)
    // if ($feed !== \null) == false (line 336)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad53()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == true (line 323)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == false (line 346)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad54()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == true (line 323)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad55()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == true (line 323)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == true (line 348)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad56()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == true (line 323)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == false (line 346)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad57()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == true (line 323)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad58()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == false (line 319)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_RDF]['RDF'][0])) == true (line 323)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == true (line 348)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad59()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == true (line 319)
    // if ($feed !== \null) == false (line 336)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad60()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == true (line 319)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == false (line 346)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad61()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == true (line 319)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad62()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == true (line 319)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == true (line 348)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad63()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == true (line 319)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == false (line 346)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad64()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == true (line 319)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad65()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == false (line 315)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_03]['feed'][0])) == true (line 319)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == true (line 348)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad66()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == true (line 315)
    // if ($feed !== \null) == false (line 336)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad67()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == true (line 315)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == false (line 346)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad68()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == true (line 315)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad69()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == true (line 315)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == false (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == true (line 348)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad70()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == true (line 315)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == false (line 346)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad71()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == true (line 315)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad72()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 293)
    // if ($query->execute() && ($row = $query->fetch())) == true (line 300)
    // if (isset($this->options['items'][0])) == true (line 304)
    // if ($items !== 0) == true (line 313)
    // if (isset($data['child'][\SIMPLEPIE_NAMESPACE_ATOM_10]['feed'][0])) == true (line 315)
    // if ($feed !== \null) == true (line 336)
    // if ($items > 0) == true (line 339)
    // if ($query->execute()) == true (line 346)
    // while ($row = $query->fetchColumn()) == true (line 348)
    // while ($row = $query->fetchColumn()) == false (line 348)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad73()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == true (line 293)

    $actual = $this->simplePie_Cache_MySQL->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMtime0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 371)
    // if ($query->execute() && ($time = $query->fetchColumn())) == false (line 378)

    $actual = $this->simplePie_Cache_MySQL->mtime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMtime1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 371)
    // if ($query->execute() && ($time = $query->fetchColumn())) == true (line 378)

    $actual = $this->simplePie_Cache_MySQL->mtime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMtime2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == true (line 371)

    $actual = $this->simplePie_Cache_MySQL->mtime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouch0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 395)
    // if ($query->execute() && $query->rowCount() > 0) == false (line 403)

    $actual = $this->simplePie_Cache_MySQL->touch();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouch1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 395)
    // if ($query->execute() && $query->rowCount() > 0) == true (line 403)

    $actual = $this->simplePie_Cache_MySQL->touch();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouch2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == true (line 395)

    $actual = $this->simplePie_Cache_MySQL->touch();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnlink0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 420)
    // if ($query->execute() && $query2->execute()) == false (line 429)

    $actual = $this->simplePie_Cache_MySQL->unlink();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnlink1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == false (line 420)
    // if ($query->execute() && $query2->execute()) == true (line 429)

    $actual = $this->simplePie_Cache_MySQL->unlink();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnlink2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->mysql === \null) == true (line 420)

    $actual = $this->simplePie_Cache_MySQL->unlink();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
