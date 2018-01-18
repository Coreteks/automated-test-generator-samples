<?php

namespace tests;

use CI_Table;
use Mockery as m;

class CI_TableTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_config = null;
/**
* @var \CI_Table
*/
protected $cI_Table;

public function setUp()
{
    parent::setUp();

    $this->_config = null;
    $this->cI_Table = new \CI_Table($this->_config);
}

public function testSet_template0()
{
    $template = m::mock('UntypedParameter_template_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($template)) == false (line 136)

    $actual = $this->cI_Table->set_template($template);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_template1()
{
    $template = m::mock('UntypedParameter_template_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($template)) == true (line 136)

    $actual = $this->cI_Table->set_template($template);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_heading0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Table->set_heading($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake_columns0()
{
    $array = m::mock('UntypedParameter_array_');
    $col_limit = m::mock('UntypedParameter_col_limit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($array) or \count($array) === 0 or !\is_int($col_limit)) == false (line 175)
    // if ($col_limit === 0) == false (line 184)
    // if (\count($temp) < $col_limit) == false (line 194)
    // PhpParser\Node\Stmt\Do_ == false (line 190)

    $actual = $this->cI_Table->make_columns($array, $col_limit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake_columns1()
{
    $array = m::mock('UntypedParameter_array_');
    $col_limit = m::mock('UntypedParameter_col_limit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($array) or \count($array) === 0 or !\is_int($col_limit)) == false (line 175)
    // if ($col_limit === 0) == false (line 184)
    // if (\count($temp) < $col_limit) == true (line 194)
    // for (...) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 190)

    $actual = $this->cI_Table->make_columns($array, $col_limit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake_columns2()
{
    $array = m::mock('UntypedParameter_array_');
    $col_limit = m::mock('UntypedParameter_col_limit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($array) or \count($array) === 0 or !\is_int($col_limit)) == false (line 175)
    // if ($col_limit === 0) == false (line 184)
    // if (\count($temp) < $col_limit) == true (line 194)
    // for (...) == true (line 196)
    // for (...) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 190)

    $actual = $this->cI_Table->make_columns($array, $col_limit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake_columns3()
{
    $array = m::mock('UntypedParameter_array_');
    $col_limit = m::mock('UntypedParameter_col_limit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($array) or \count($array) === 0 or !\is_int($col_limit)) == false (line 175)
    // if ($col_limit === 0) == true (line 184)

    $actual = $this->cI_Table->make_columns($array, $col_limit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake_columns4()
{
    $array = m::mock('UntypedParameter_array_');
    $col_limit = m::mock('UntypedParameter_col_limit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($array) or \count($array) === 0 or !\is_int($col_limit)) == true (line 175)

    $actual = $this->cI_Table->make_columns($array, $col_limit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_empty0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Table->set_empty($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_row0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Table->add_row($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_caption0()
{
    $caption = m::mock('UntypedParameter_caption_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Table->set_caption($caption);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate0()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate2()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate3()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate4()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate5()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate6()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate7()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate8()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate9()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate10()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate11()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate12()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate13()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate14()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate15()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate16()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate17()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate18()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate19()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate20()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate21()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate22()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate23()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate24()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate25()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate26()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate27()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate28()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate29()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate30()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate31()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate32()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate33()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate34()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate35()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate36()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate37()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate38()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate39()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate40()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate41()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate42()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate43()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate44()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate45()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate46()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate47()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate48()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate49()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate50()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate51()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate52()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate53()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate54()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate55()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate56()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate57()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate58()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate59()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate60()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate61()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate62()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate63()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate64()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate65()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate66()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate67()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate68()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate69()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate70()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate71()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate72()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate73()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate74()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate75()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate76()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate77()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate78()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate79()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate80()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate81()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate82()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate83()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate84()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate85()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate86()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate87()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate88()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate89()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate90()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate91()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate92()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate93()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate94()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate95()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate96()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate97()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate98()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate99()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate100()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate101()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate102()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate103()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate104()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate105()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate106()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate107()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate108()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate109()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate110()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate111()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate112()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate113()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate114()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate115()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate116()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate117()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate118()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate119()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate120()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate121()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate122()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate123()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate124()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate125()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate126()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate127()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate128()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate129()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate130()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate131()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate132()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate133()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate134()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate135()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate136()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate137()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate138()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate139()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate140()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate141()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate142()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate143()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate144()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate145()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate146()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate147()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate148()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate149()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate150()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate151()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate152()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate153()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate154()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate155()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate156()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate157()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate158()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate159()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate160()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate161()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate162()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate163()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate164()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate165()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate166()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate167()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate168()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate169()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate170()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate171()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate172()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate173()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate174()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate175()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate176()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate177()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate178()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate179()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate180()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate181()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate182()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate183()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate184()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate185()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate186()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate187()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate188()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate189()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate190()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate191()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate192()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate193()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate194()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate195()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate196()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate197()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate198()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate199()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate200()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate201()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate202()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate203()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate204()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate205()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate206()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate207()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate208()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate209()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate210()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate211()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate212()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate213()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate214()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate215()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate216()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate217()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate218()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate219()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate220()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate221()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate222()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate223()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate224()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate225()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate226()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate227()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate228()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate229()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate230()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate231()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate232()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate233()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate234()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate235()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate236()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate237()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate238()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate239()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate240()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate241()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate242()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate243()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate244()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate245()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate246()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate247()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate248()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate249()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate250()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate251()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate252()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate253()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate254()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate255()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate256()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate257()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate258()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate259()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate260()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == false (line 295)
    // if (empty($this->heading) && empty($this->rows)) == true (line 308)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate261()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate262()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate263()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate264()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate265()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate266()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate267()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate268()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate269()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate270()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate271()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate272()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate273()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate274()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate275()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate276()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate277()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate278()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate279()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate280()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate281()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate282()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate283()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate284()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate285()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate286()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate287()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate288()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate289()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate290()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate291()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate292()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate293()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate294()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate295()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate296()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate297()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate298()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate299()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate300()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate301()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate302()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate303()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate304()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate305()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate306()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate307()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate308()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate309()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate310()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate311()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate312()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate313()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate314()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate315()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate316()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate317()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate318()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate319()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate320()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate321()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate322()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate323()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate324()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate325()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate326()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate327()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate328()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate329()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate330()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate331()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate332()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate333()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate334()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate335()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate336()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate337()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate338()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate339()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate340()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate341()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate342()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate343()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate344()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate345()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate346()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate347()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate348()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate349()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate350()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate351()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate352()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate353()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate354()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate355()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate356()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate357()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate358()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate359()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate360()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate361()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate362()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate363()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate364()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate365()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate366()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate367()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate368()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate369()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate370()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate371()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate372()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate373()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate374()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate375()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate376()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate377()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate378()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate379()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate380()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate381()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate382()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate383()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate384()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate385()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate386()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate387()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate388()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate389()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate390()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate391()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate392()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate393()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate394()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate395()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate396()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate397()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate398()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate399()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate400()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate401()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate402()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate403()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate404()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate405()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate406()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate407()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate408()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate409()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate410()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate411()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate412()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate413()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate414()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate415()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate416()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate417()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate418()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate419()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate420()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate421()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate422()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate423()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate424()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate425()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate426()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate427()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate428()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate429()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate430()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate431()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate432()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate433()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate434()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate435()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate436()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate437()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate438()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate439()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate440()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate441()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate442()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate443()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate444()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate445()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate446()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate447()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate448()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate449()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate450()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate451()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate452()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate453()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate454()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate455()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate456()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate457()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate458()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate459()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate460()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate461()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate462()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate463()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate464()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate465()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate466()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate467()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate468()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate469()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate470()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate471()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate472()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate473()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate474()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate475()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate476()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate477()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate478()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate479()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate480()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate481()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate482()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate483()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate484()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate485()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate486()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate487()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate488()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate489()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate490()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate491()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate492()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate493()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate494()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate495()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate496()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate497()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate498()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate499()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate500()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate501()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate502()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate503()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate504()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate505()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate506()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate507()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate508()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate509()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate510()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate511()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate512()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate513()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate514()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate515()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate516()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate517()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate518()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate519()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate520()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate521()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == false (line 301)
    // if (empty($this->heading) && empty($this->rows)) == true (line 308)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate522()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate523()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate524()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate525()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate526()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate527()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate528()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate529()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate530()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate531()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate532()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate533()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate534()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate535()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate536()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate537()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate538()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate539()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate540()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate541()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate542()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate543()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate544()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate545()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate546()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate547()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate548()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate549()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate550()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate551()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate552()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate553()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate554()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate555()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate556()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate557()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate558()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate559()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate560()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate561()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate562()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate563()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate564()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate565()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate566()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate567()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate568()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate569()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate570()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate571()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate572()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate573()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate574()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate575()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate576()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate577()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate578()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate579()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate580()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate581()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate582()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate583()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate584()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate585()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate586()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate587()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate588()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate589()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate590()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate591()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate592()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate593()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate594()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate595()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate596()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate597()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate598()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate599()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate600()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate601()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate602()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate603()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate604()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate605()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate606()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate607()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate608()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate609()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate610()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate611()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate612()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate613()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate614()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate615()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate616()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate617()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate618()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate619()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate620()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate621()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate622()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate623()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate624()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate625()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate626()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate627()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate628()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate629()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate630()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate631()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate632()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate633()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate634()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate635()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate636()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate637()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate638()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate639()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate640()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate641()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate642()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate643()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate644()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate645()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate646()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate647()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate648()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate649()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate650()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate651()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate652()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate653()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate654()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate655()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate656()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate657()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate658()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate659()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate660()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate661()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate662()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate663()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate664()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate665()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate666()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate667()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate668()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate669()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate670()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate671()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate672()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate673()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate674()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate675()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate676()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate677()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate678()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate679()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate680()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate681()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate682()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate683()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate684()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate685()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate686()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate687()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate688()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate689()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate690()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate691()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate692()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate693()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate694()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate695()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate696()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate697()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate698()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate699()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate700()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate701()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate702()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate703()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate704()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate705()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate706()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate707()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate708()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate709()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate710()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate711()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate712()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate713()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate714()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate715()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate716()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate717()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate718()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate719()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate720()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate721()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate722()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate723()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate724()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate725()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate726()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate727()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate728()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate729()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate730()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate731()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate732()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate733()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate734()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate735()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate736()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate737()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate738()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate739()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate740()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate741()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate742()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate743()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate744()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate745()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate746()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate747()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate748()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate749()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate750()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate751()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate752()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate753()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate754()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate755()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate756()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate757()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate758()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate759()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate760()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate761()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate762()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate763()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate764()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate765()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate766()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate767()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate768()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate769()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate770()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate771()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate772()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate773()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate774()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate775()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate776()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate777()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate778()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate779()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate780()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate781()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate782()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == false (line 297)
    // if (\is_array($table_data)) == true (line 301)
    // if (empty($this->heading) && empty($this->rows)) == true (line 308)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate783()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate784()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate785()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate786()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate787()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate788()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate789()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate790()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate791()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate792()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate793()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate794()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate795()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate796()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate797()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate798()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate799()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate800()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate801()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate802()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate803()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate804()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate805()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate806()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate807()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate808()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate809()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate810()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate811()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate812()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate813()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate814()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate815()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate816()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate817()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate818()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate819()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate820()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate821()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate822()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate823()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate824()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate825()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate826()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate827()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate828()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate829()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate830()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate831()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate832()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate833()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate834()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate835()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate836()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate837()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate838()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate839()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate840()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate841()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate842()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate843()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate844()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate845()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate846()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate847()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate848()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate849()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate850()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate851()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate852()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate853()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate854()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate855()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate856()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate857()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate858()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate859()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate860()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate861()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate862()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate863()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate864()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate865()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate866()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate867()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate868()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate869()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate870()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate871()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate872()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate873()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate874()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate875()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate876()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate877()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate878()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate879()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate880()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate881()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate882()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate883()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate884()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate885()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate886()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate887()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate888()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate889()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate890()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate891()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate892()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate893()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate894()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate895()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate896()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate897()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate898()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate899()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate900()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate901()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate902()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate903()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate904()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate905()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate906()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate907()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate908()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate909()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate910()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate911()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate912()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == false (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate913()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate914()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate915()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate916()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate917()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate918()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate919()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate920()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate921()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate922()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate923()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate924()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate925()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate926()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate927()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate928()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate929()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate930()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate931()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate932()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate933()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate934()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate935()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate936()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate937()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate938()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate939()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate940()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate941()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate942()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate943()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate944()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate945()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate946()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate947()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate948()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate949()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate950()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate951()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate952()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate953()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate954()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate955()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate956()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate957()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate958()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate959()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate960()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate961()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate962()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate963()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate964()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate965()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate966()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate967()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate968()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate969()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate970()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate971()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate972()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate973()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate974()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate975()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate976()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate977()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == false (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate978()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate979()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate980()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate981()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate982()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate983()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate984()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate985()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate986()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate987()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate988()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate989()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate990()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == false (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate991()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate992()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate993()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate994()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate995()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate996()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate997()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate998()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate999()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1000()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1001()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1002()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1003()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1004()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1005()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1006()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1007()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1008()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1009()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1010()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1011()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1012()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1013()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1014()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1015()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1016()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1017()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1018()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1019()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1020()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1021()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1022()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1023()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1024()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1025()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1026()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1027()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1028()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1029()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == false (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1030()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == false (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1031()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1032()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1033()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1034()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1035()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1036()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1037()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1038()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == false (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1039()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == false (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1040()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == false (line 388)
    // if (isset($this->function)) == true (line 392)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1041()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == false (line 363)
    // if ($key !== 'data') == true (line 379)
    // if ($cell === '' or $cell === \NULL) == true (line 388)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1042()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == false (line 308)
    // if (isset($this->function) && !\is_callable($this->function)) == true (line 317)
    // if ($this->caption) == true (line 327)
    // if (!empty($this->heading)) == true (line 333)
    // if ($key !== 'data') == true (line 343)
    // if (!empty($this->rows)) == true (line 356)
    // if (!\is_array($row)) == true (line 363)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1043()
{
    $table_data = m::mock('UntypedParameter_table_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($table_data)) == true (line 295)
    // if ($table_data instanceof \CI_DB_result) == true (line 297)
    // if (empty($this->heading) && empty($this->rows)) == true (line 308)

    $actual = $this->cI_Table->generate($table_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClear0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Table->clear();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
