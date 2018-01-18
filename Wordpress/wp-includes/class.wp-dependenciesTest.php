<?php

namespace tests;

use Mockery as m;
use WP_Dependencies;

class WP_DependenciesTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Dependencies
*/
protected $wP_Dependencies;

public function setUp()
{
    parent::setUp();

    $this->wP_Dependencies = new \WP_Dependencies();
}

public function testDo_items0()
{
    $handles = m::mock('UntypedParameter_handles_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Dependencies->do_items($handles, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_items1()
{
    $handles = m::mock('UntypedParameter_handles_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\in_array($handle, $this->done, \true) && isset($this->registered[$handle])) == false (line 99)

    $actual = $this->wP_Dependencies->do_items($handles, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_items2()
{
    $handles = m::mock('UntypedParameter_handles_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\in_array($handle, $this->done, \true) && isset($this->registered[$handle])) == true (line 99)
    // if ($this->do_item($handle, $group)) == false (line 106)

    $actual = $this->wP_Dependencies->do_items($handles, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_items3()
{
    $handles = m::mock('UntypedParameter_handles_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\in_array($handle, $this->done, \true) && isset($this->registered[$handle])) == true (line 99)
    // if ($this->do_item($handle, $group)) == true (line 106)

    $actual = $this->wP_Dependencies->do_items($handles, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item0()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Dependencies->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps0()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps1()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == false (line 161)
    // if (!isset($this->registered[$handle])) == false (line 166)
    // if ($this->registered[$handle]->deps && \array_diff($this->registered[$handle]->deps, \array_keys($this->registered))) == false (line 168)
    // if ($this->registered[$handle]->deps && !$this->all_deps($this->registered[$handle]->deps, \true, $new_group)) == false (line 170)
    // if (!$keep_going) == false (line 174)
    // if ($queued) == false (line 182)
    // if (isset($handle_parts[1])) == false (line 186)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps2()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == false (line 161)
    // if (!isset($this->registered[$handle])) == false (line 166)
    // if ($this->registered[$handle]->deps && \array_diff($this->registered[$handle]->deps, \array_keys($this->registered))) == false (line 168)
    // if ($this->registered[$handle]->deps && !$this->all_deps($this->registered[$handle]->deps, \true, $new_group)) == false (line 170)
    // if (!$keep_going) == false (line 174)
    // if ($queued) == false (line 182)
    // if (isset($handle_parts[1])) == true (line 186)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps3()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == false (line 161)
    // if (!isset($this->registered[$handle])) == false (line 166)
    // if ($this->registered[$handle]->deps && \array_diff($this->registered[$handle]->deps, \array_keys($this->registered))) == false (line 168)
    // if ($this->registered[$handle]->deps && !$this->all_deps($this->registered[$handle]->deps, \true, $new_group)) == false (line 170)
    // if (!$keep_going) == false (line 174)
    // if ($queued) == true (line 182)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps4()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == false (line 161)
    // if (!isset($this->registered[$handle])) == false (line 166)
    // if ($this->registered[$handle]->deps && \array_diff($this->registered[$handle]->deps, \array_keys($this->registered))) == false (line 168)
    // if ($this->registered[$handle]->deps && !$this->all_deps($this->registered[$handle]->deps, \true, $new_group)) == false (line 170)
    // if (!$keep_going) == true (line 174)
    // if ($recursion) == false (line 175)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps5()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == false (line 161)
    // if (!isset($this->registered[$handle])) == false (line 166)
    // if ($this->registered[$handle]->deps && \array_diff($this->registered[$handle]->deps, \array_keys($this->registered))) == false (line 168)
    // if ($this->registered[$handle]->deps && !$this->all_deps($this->registered[$handle]->deps, \true, $new_group)) == false (line 170)
    // if (!$keep_going) == true (line 174)
    // if ($recursion) == true (line 175)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps6()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == false (line 161)
    // if (!isset($this->registered[$handle])) == false (line 166)
    // if ($this->registered[$handle]->deps && \array_diff($this->registered[$handle]->deps, \array_keys($this->registered))) == false (line 168)
    // if ($this->registered[$handle]->deps && !$this->all_deps($this->registered[$handle]->deps, \true, $new_group)) == true (line 170)
    // if (!$keep_going) == false (line 174)
    // if ($queued) == false (line 182)
    // if (isset($handle_parts[1])) == false (line 186)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps7()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == false (line 161)
    // if (!isset($this->registered[$handle])) == false (line 166)
    // if ($this->registered[$handle]->deps && \array_diff($this->registered[$handle]->deps, \array_keys($this->registered))) == false (line 168)
    // if ($this->registered[$handle]->deps && !$this->all_deps($this->registered[$handle]->deps, \true, $new_group)) == true (line 170)
    // if (!$keep_going) == false (line 174)
    // if ($queued) == false (line 182)
    // if (isset($handle_parts[1])) == true (line 186)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps8()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == false (line 161)
    // if (!isset($this->registered[$handle])) == false (line 166)
    // if ($this->registered[$handle]->deps && \array_diff($this->registered[$handle]->deps, \array_keys($this->registered))) == false (line 168)
    // if ($this->registered[$handle]->deps && !$this->all_deps($this->registered[$handle]->deps, \true, $new_group)) == true (line 170)
    // if (!$keep_going) == false (line 174)
    // if ($queued) == true (line 182)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps9()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == false (line 161)
    // if (!isset($this->registered[$handle])) == false (line 166)
    // if ($this->registered[$handle]->deps && \array_diff($this->registered[$handle]->deps, \array_keys($this->registered))) == false (line 168)
    // if ($this->registered[$handle]->deps && !$this->all_deps($this->registered[$handle]->deps, \true, $new_group)) == true (line 170)
    // if (!$keep_going) == true (line 174)
    // if ($recursion) == false (line 175)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps10()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == false (line 161)
    // if (!isset($this->registered[$handle])) == false (line 166)
    // if ($this->registered[$handle]->deps && \array_diff($this->registered[$handle]->deps, \array_keys($this->registered))) == false (line 168)
    // if ($this->registered[$handle]->deps && !$this->all_deps($this->registered[$handle]->deps, \true, $new_group)) == true (line 170)
    // if (!$keep_going) == true (line 174)
    // if ($recursion) == true (line 175)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps11()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == false (line 161)
    // if (!isset($this->registered[$handle])) == false (line 166)
    // if ($this->registered[$handle]->deps && \array_diff($this->registered[$handle]->deps, \array_keys($this->registered))) == true (line 168)
    // if (!$keep_going) == false (line 174)
    // if ($queued) == false (line 182)
    // if (isset($handle_parts[1])) == false (line 186)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps12()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == false (line 161)
    // if (!isset($this->registered[$handle])) == false (line 166)
    // if ($this->registered[$handle]->deps && \array_diff($this->registered[$handle]->deps, \array_keys($this->registered))) == true (line 168)
    // if (!$keep_going) == false (line 174)
    // if ($queued) == false (line 182)
    // if (isset($handle_parts[1])) == true (line 186)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps13()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == false (line 161)
    // if (!isset($this->registered[$handle])) == false (line 166)
    // if ($this->registered[$handle]->deps && \array_diff($this->registered[$handle]->deps, \array_keys($this->registered))) == true (line 168)
    // if (!$keep_going) == false (line 174)
    // if ($queued) == true (line 182)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps14()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == false (line 161)
    // if (!isset($this->registered[$handle])) == false (line 166)
    // if ($this->registered[$handle]->deps && \array_diff($this->registered[$handle]->deps, \array_keys($this->registered))) == true (line 168)
    // if (!$keep_going) == true (line 174)
    // if ($recursion) == false (line 175)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps15()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == false (line 161)
    // if (!isset($this->registered[$handle])) == false (line 166)
    // if ($this->registered[$handle]->deps && \array_diff($this->registered[$handle]->deps, \array_keys($this->registered))) == true (line 168)
    // if (!$keep_going) == true (line 174)
    // if ($recursion) == true (line 175)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps16()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == false (line 161)
    // if (!isset($this->registered[$handle])) == true (line 166)
    // if (!$keep_going) == false (line 174)
    // if ($queued) == false (line 182)
    // if (isset($handle_parts[1])) == false (line 186)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps17()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == false (line 161)
    // if (!isset($this->registered[$handle])) == true (line 166)
    // if (!$keep_going) == false (line 174)
    // if ($queued) == false (line 182)
    // if (isset($handle_parts[1])) == true (line 186)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps18()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == false (line 161)
    // if (!isset($this->registered[$handle])) == true (line 166)
    // if (!$keep_going) == false (line 174)
    // if ($queued) == true (line 182)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps19()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == false (line 161)
    // if (!isset($this->registered[$handle])) == true (line 166)
    // if (!$keep_going) == true (line 174)
    // if ($recursion) == false (line 175)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps20()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == false (line 161)
    // if (!isset($this->registered[$handle])) == true (line 166)
    // if (!$keep_going) == true (line 174)
    // if ($recursion) == true (line 175)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps21()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == false (line 154)
    // if ($queued && !$moved) == true (line 161)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps22()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == false (line 145)
    // if (\in_array($handle, $this->done, \true)) == true (line 154)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps23()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($handles = (array) $handles)) == true (line 145)

    $actual = $this->wP_Dependencies->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd0()
{
    $handle = m::mock('UntypedParameter_handle_');
    $src = m::mock('UntypedParameter_src_');
    $deps = m::mock('UntypedParameter_deps_');
    $ver = m::mock('UntypedParameter_ver_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->registered[$handle])) == false (line 215)

    $actual = $this->wP_Dependencies->add($handle, $src, $deps, $ver, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd1()
{
    $handle = m::mock('UntypedParameter_handle_');
    $src = m::mock('UntypedParameter_src_');
    $deps = m::mock('UntypedParameter_deps_');
    $ver = m::mock('UntypedParameter_ver_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->registered[$handle])) == true (line 215)

    $actual = $this->wP_Dependencies->add($handle, $src, $deps, $ver, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_data0()
{
    $handle = m::mock('UntypedParameter_handle_');
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->registered[$handle])) == false (line 235)

    $actual = $this->wP_Dependencies->add_data($handle, $key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_data1()
{
    $handle = m::mock('UntypedParameter_handle_');
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->registered[$handle])) == true (line 235)

    $actual = $this->wP_Dependencies->add_data($handle, $key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data0()
{
    $handle = m::mock('UntypedParameter_handle_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->registered[$handle])) == false (line 254)
    // if (!isset($this->registered[$handle]->extra[$key])) == false (line 258)

    $actual = $this->wP_Dependencies->get_data($handle, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data1()
{
    $handle = m::mock('UntypedParameter_handle_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->registered[$handle])) == false (line 254)
    // if (!isset($this->registered[$handle]->extra[$key])) == true (line 258)

    $actual = $this->wP_Dependencies->get_data($handle, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data2()
{
    $handle = m::mock('UntypedParameter_handle_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->registered[$handle])) == true (line 254)

    $actual = $this->wP_Dependencies->get_data($handle, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove0()
{
    $handles = m::mock('UntypedParameter_handles_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Dependencies->remove($handles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove1()
{
    $handles = m::mock('UntypedParameter_handles_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Dependencies->remove($handles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnqueue0()
{
    $handles = m::mock('UntypedParameter_handles_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Dependencies->enqueue($handles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnqueue1()
{
    $handles = m::mock('UntypedParameter_handles_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\in_array($handle[0], $this->queue) && isset($this->registered[$handle[0]])) == false (line 296)

    $actual = $this->wP_Dependencies->enqueue($handles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnqueue2()
{
    $handles = m::mock('UntypedParameter_handles_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\in_array($handle[0], $this->queue) && isset($this->registered[$handle[0]])) == true (line 296)
    // if (isset($handle[1])) == false (line 298)

    $actual = $this->wP_Dependencies->enqueue($handles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnqueue3()
{
    $handles = m::mock('UntypedParameter_handles_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\in_array($handle[0], $this->queue) && isset($this->registered[$handle[0]])) == true (line 296)
    // if (isset($handle[1])) == true (line 298)

    $actual = $this->wP_Dependencies->enqueue($handles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDequeue0()
{
    $handles = m::mock('UntypedParameter_handles_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Dependencies->dequeue($handles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDequeue1()
{
    $handles = m::mock('UntypedParameter_handles_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false !== $key) == false (line 320)

    $actual = $this->wP_Dependencies->dequeue($handles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDequeue2()
{
    $handles = m::mock('UntypedParameter_handles_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false !== $key) == true (line 320)

    $actual = $this->wP_Dependencies->dequeue($handles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery0()
{
    $handle = m::mock('UntypedParameter_handle_');
    $list = m::mock('UntypedParameter_list_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($list) (line 363)
    // Case 'registered' == false (line 364)
    // Case 'scripts' == false (line 365)
    // Case 'enqueued' == false (line 371)
    // Case 'queue' == false (line 372)
    // Case 'to_do' == false (line 378)
    // Case 'to_print' == false (line 379)
    // Case 'done' == false (line 382)
    // Case 'printed' == false (line 383)

    $actual = $this->wP_Dependencies->query($handle, $list);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery1()
{
    $handle = m::mock('UntypedParameter_handle_');
    $list = m::mock('UntypedParameter_list_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($list) (line 363)
    // Case 'registered' == false (line 364)
    // Case 'scripts' == false (line 365)
    // Case 'enqueued' == false (line 371)
    // Case 'queue' == false (line 372)
    // Case 'to_do' == false (line 378)
    // Case 'to_print' == false (line 379)
    // Case 'done' == false (line 382)
    // Case 'printed' == true (line 383)

    $actual = $this->wP_Dependencies->query($handle, $list);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery2()
{
    $handle = m::mock('UntypedParameter_handle_');
    $list = m::mock('UntypedParameter_list_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($list) (line 363)
    // Case 'registered' == false (line 364)
    // Case 'scripts' == false (line 365)
    // Case 'enqueued' == false (line 371)
    // Case 'queue' == false (line 372)
    // Case 'to_do' == false (line 378)
    // Case 'to_print' == false (line 379)
    // Case 'done' == true (line 382)

    $actual = $this->wP_Dependencies->query($handle, $list);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery3()
{
    $handle = m::mock('UntypedParameter_handle_');
    $list = m::mock('UntypedParameter_list_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($list) (line 363)
    // Case 'registered' == false (line 364)
    // Case 'scripts' == false (line 365)
    // Case 'enqueued' == false (line 371)
    // Case 'queue' == false (line 372)
    // Case 'to_do' == false (line 378)
    // Case 'to_print' == true (line 379)

    $actual = $this->wP_Dependencies->query($handle, $list);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery4()
{
    $handle = m::mock('UntypedParameter_handle_');
    $list = m::mock('UntypedParameter_list_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($list) (line 363)
    // Case 'registered' == false (line 364)
    // Case 'scripts' == false (line 365)
    // Case 'enqueued' == false (line 371)
    // Case 'queue' == false (line 372)
    // Case 'to_do' == true (line 378)

    $actual = $this->wP_Dependencies->query($handle, $list);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery5()
{
    $handle = m::mock('UntypedParameter_handle_');
    $list = m::mock('UntypedParameter_list_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($list) (line 363)
    // Case 'registered' == false (line 364)
    // Case 'scripts' == false (line 365)
    // Case 'enqueued' == false (line 371)
    // Case 'queue' == true (line 372)
    // if (\in_array($handle, $this->queue)) == false (line 373)

    $actual = $this->wP_Dependencies->query($handle, $list);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery6()
{
    $handle = m::mock('UntypedParameter_handle_');
    $list = m::mock('UntypedParameter_list_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($list) (line 363)
    // Case 'registered' == false (line 364)
    // Case 'scripts' == false (line 365)
    // Case 'enqueued' == false (line 371)
    // Case 'queue' == true (line 372)
    // if (\in_array($handle, $this->queue)) == true (line 373)

    $actual = $this->wP_Dependencies->query($handle, $list);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery7()
{
    $handle = m::mock('UntypedParameter_handle_');
    $list = m::mock('UntypedParameter_list_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($list) (line 363)
    // Case 'registered' == false (line 364)
    // Case 'scripts' == false (line 365)
    // Case 'enqueued' == true (line 371)
    // if (\in_array($handle, $this->queue)) == false (line 373)

    $actual = $this->wP_Dependencies->query($handle, $list);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery8()
{
    $handle = m::mock('UntypedParameter_handle_');
    $list = m::mock('UntypedParameter_list_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($list) (line 363)
    // Case 'registered' == false (line 364)
    // Case 'scripts' == false (line 365)
    // Case 'enqueued' == true (line 371)
    // if (\in_array($handle, $this->queue)) == true (line 373)

    $actual = $this->wP_Dependencies->query($handle, $list);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery9()
{
    $handle = m::mock('UntypedParameter_handle_');
    $list = m::mock('UntypedParameter_list_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($list) (line 363)
    // Case 'registered' == false (line 364)
    // Case 'scripts' == true (line 365)
    // if (isset($this->registered[$handle])) == false (line 366)

    $actual = $this->wP_Dependencies->query($handle, $list);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery10()
{
    $handle = m::mock('UntypedParameter_handle_');
    $list = m::mock('UntypedParameter_list_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($list) (line 363)
    // Case 'registered' == false (line 364)
    // Case 'scripts' == true (line 365)
    // if (isset($this->registered[$handle])) == true (line 366)

    $actual = $this->wP_Dependencies->query($handle, $list);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery11()
{
    $handle = m::mock('UntypedParameter_handle_');
    $list = m::mock('UntypedParameter_list_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($list) (line 363)
    // Case 'registered' == true (line 364)
    // if (isset($this->registered[$handle])) == false (line 366)

    $actual = $this->wP_Dependencies->query($handle, $list);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery12()
{
    $handle = m::mock('UntypedParameter_handle_');
    $list = m::mock('UntypedParameter_list_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($list) (line 363)
    // Case 'registered' == true (line 364)
    // if (isset($this->registered[$handle])) == true (line 366)

    $actual = $this->wP_Dependencies->query($handle, $list);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_group0()
{
    $handle = m::mock('UntypedParameter_handle_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->groups[$handle]) && $this->groups[$handle] <= $group) == false (line 402)

    $actual = $this->wP_Dependencies->set_group($handle, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_group1()
{
    $handle = m::mock('UntypedParameter_handle_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->groups[$handle]) && $this->groups[$handle] <= $group) == true (line 402)

    $actual = $this->wP_Dependencies->set_group($handle, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
