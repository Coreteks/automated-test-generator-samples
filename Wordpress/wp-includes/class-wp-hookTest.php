<?php

namespace tests;

use Mockery as m;
use WP_Hook;

class WP_HookTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Hook
*/
protected $wP_Hook;

public function setUp()
{
    parent::setUp();

    $this->wP_Hook = new \WP_Hook();
}

public function testAdd_filter0()
{
    $tag = m::mock('UntypedParameter_tag_');
    $function_to_add = m::mock('UntypedParameter_function_to_add_');
    $priority = m::mock('UntypedParameter_priority_');
    $accepted_args = m::mock('UntypedParameter_accepted_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$priority_existed && \count($this->callbacks) > 1) == false (line 83)
    // if ($this->nesting_level > 0) == false (line 87)

    $actual = $this->wP_Hook->add_filter($tag, $function_to_add, $priority, $accepted_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_filter1()
{
    $tag = m::mock('UntypedParameter_tag_');
    $function_to_add = m::mock('UntypedParameter_function_to_add_');
    $priority = m::mock('UntypedParameter_priority_');
    $accepted_args = m::mock('UntypedParameter_accepted_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$priority_existed && \count($this->callbacks) > 1) == false (line 83)
    // if ($this->nesting_level > 0) == true (line 87)

    $actual = $this->wP_Hook->add_filter($tag, $function_to_add, $priority, $accepted_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_filter2()
{
    $tag = m::mock('UntypedParameter_tag_');
    $function_to_add = m::mock('UntypedParameter_function_to_add_');
    $priority = m::mock('UntypedParameter_priority_');
    $accepted_args = m::mock('UntypedParameter_accepted_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$priority_existed && \count($this->callbacks) > 1) == true (line 83)
    // if ($this->nesting_level > 0) == false (line 87)

    $actual = $this->wP_Hook->add_filter($tag, $function_to_add, $priority, $accepted_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_filter3()
{
    $tag = m::mock('UntypedParameter_tag_');
    $function_to_add = m::mock('UntypedParameter_function_to_add_');
    $priority = m::mock('UntypedParameter_priority_');
    $accepted_args = m::mock('UntypedParameter_accepted_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$priority_existed && \count($this->callbacks) > 1) == true (line 83)
    // if ($this->nesting_level > 0) == true (line 87)

    $actual = $this->wP_Hook->add_filter($tag, $function_to_add, $priority, $accepted_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_filter0()
{
    $tag = m::mock('UntypedParameter_tag_');
    $function_to_remove = m::mock('UntypedParameter_function_to_remove_');
    $priority = m::mock('UntypedParameter_priority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($exists) == false (line 175)

    $actual = $this->wP_Hook->remove_filter($tag, $function_to_remove, $priority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_filter1()
{
    $tag = m::mock('UntypedParameter_tag_');
    $function_to_remove = m::mock('UntypedParameter_function_to_remove_');
    $priority = m::mock('UntypedParameter_priority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($exists) == true (line 175)
    // if (!$this->callbacks[$priority]) == false (line 177)

    $actual = $this->wP_Hook->remove_filter($tag, $function_to_remove, $priority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_filter2()
{
    $tag = m::mock('UntypedParameter_tag_');
    $function_to_remove = m::mock('UntypedParameter_function_to_remove_');
    $priority = m::mock('UntypedParameter_priority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($exists) == true (line 175)
    // if (!$this->callbacks[$priority]) == true (line 177)
    // if ($this->nesting_level > 0) == false (line 179)

    $actual = $this->wP_Hook->remove_filter($tag, $function_to_remove, $priority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_filter3()
{
    $tag = m::mock('UntypedParameter_tag_');
    $function_to_remove = m::mock('UntypedParameter_function_to_remove_');
    $priority = m::mock('UntypedParameter_priority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($exists) == true (line 175)
    // if (!$this->callbacks[$priority]) == true (line 177)
    // if ($this->nesting_level > 0) == true (line 179)

    $actual = $this->wP_Hook->remove_filter($tag, $function_to_remove, $priority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_filter0()
{
    $tag = m::mock('UntypedParameter_tag_');
    $function_to_check = m::mock('UntypedParameter_function_to_check_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $function_to_check) == false (line 198)
    // if (!$function_key) == false (line 203)

    $actual = $this->wP_Hook->has_filter($tag, $function_to_check);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_filter1()
{
    $tag = m::mock('UntypedParameter_tag_');
    $function_to_check = m::mock('UntypedParameter_function_to_check_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $function_to_check) == false (line 198)
    // if (!$function_key) == false (line 203)
    // if (isset($callbacks[$function_key])) == false (line 208)

    $actual = $this->wP_Hook->has_filter($tag, $function_to_check);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_filter2()
{
    $tag = m::mock('UntypedParameter_tag_');
    $function_to_check = m::mock('UntypedParameter_function_to_check_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $function_to_check) == false (line 198)
    // if (!$function_key) == false (line 203)
    // if (isset($callbacks[$function_key])) == true (line 208)

    $actual = $this->wP_Hook->has_filter($tag, $function_to_check);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_filter3()
{
    $tag = m::mock('UntypedParameter_tag_');
    $function_to_check = m::mock('UntypedParameter_function_to_check_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $function_to_check) == false (line 198)
    // if (!$function_key) == true (line 203)

    $actual = $this->wP_Hook->has_filter($tag, $function_to_check);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_filter4()
{
    $tag = m::mock('UntypedParameter_tag_');
    $function_to_check = m::mock('UntypedParameter_function_to_check_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $function_to_check) == true (line 198)

    $actual = $this->wP_Hook->has_filter($tag, $function_to_check);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_filters0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Hook->has_filters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_filters1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($callbacks) == false (line 225)

    $actual = $this->wP_Hook->has_filters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_filters2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($callbacks) == true (line 225)

    $actual = $this->wP_Hook->has_filters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_all_filters0()
{
    $priority = m::mock('UntypedParameter_priority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->callbacks) == false (line 240)
    // if (\false === $priority) == false (line 244)
    // if (isset($this->callbacks[$priority])) == false (line 246)
    // if ($this->nesting_level > 0) == false (line 250)

    $actual = $this->wP_Hook->remove_all_filters($priority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_all_filters1()
{
    $priority = m::mock('UntypedParameter_priority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->callbacks) == false (line 240)
    // if (\false === $priority) == false (line 244)
    // if (isset($this->callbacks[$priority])) == false (line 246)
    // if ($this->nesting_level > 0) == true (line 250)

    $actual = $this->wP_Hook->remove_all_filters($priority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_all_filters2()
{
    $priority = m::mock('UntypedParameter_priority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->callbacks) == false (line 240)
    // if (\false === $priority) == false (line 244)
    // if (isset($this->callbacks[$priority])) == true (line 246)
    // if ($this->nesting_level > 0) == false (line 250)

    $actual = $this->wP_Hook->remove_all_filters($priority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_all_filters3()
{
    $priority = m::mock('UntypedParameter_priority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->callbacks) == false (line 240)
    // if (\false === $priority) == false (line 244)
    // if (isset($this->callbacks[$priority])) == true (line 246)
    // if ($this->nesting_level > 0) == true (line 250)

    $actual = $this->wP_Hook->remove_all_filters($priority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_all_filters4()
{
    $priority = m::mock('UntypedParameter_priority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->callbacks) == false (line 240)
    // if (\false === $priority) == true (line 244)
    // if ($this->nesting_level > 0) == false (line 250)

    $actual = $this->wP_Hook->remove_all_filters($priority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_all_filters5()
{
    $priority = m::mock('UntypedParameter_priority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->callbacks) == false (line 240)
    // if (\false === $priority) == true (line 244)
    // if ($this->nesting_level > 0) == true (line 250)

    $actual = $this->wP_Hook->remove_all_filters($priority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_all_filters6()
{
    $priority = m::mock('UntypedParameter_priority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->callbacks) == true (line 240)

    $actual = $this->wP_Hook->remove_all_filters($priority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply_filters0()
{
    $value = m::mock('UntypedParameter_value_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->callbacks) == false (line 265)
    // PhpParser\Node\Stmt\Do_ == false (line 274)

    $actual = $this->wP_Hook->apply_filters($value, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply_filters1()
{
    $value = m::mock('UntypedParameter_value_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->callbacks) == false (line 265)
    // if (!$this->doing_action) == false (line 278)
    // if ($the_['accepted_args'] == 0) == false (line 283)
    // if ($the_['accepted_args'] >= $num_args) == false (line 285)
    // PhpParser\Node\Stmt\Do_ == false (line 274)

    $actual = $this->wP_Hook->apply_filters($value, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply_filters2()
{
    $value = m::mock('UntypedParameter_value_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->callbacks) == false (line 265)
    // if (!$this->doing_action) == false (line 278)
    // if ($the_['accepted_args'] == 0) == false (line 283)
    // if ($the_['accepted_args'] >= $num_args) == true (line 285)
    // PhpParser\Node\Stmt\Do_ == false (line 274)

    $actual = $this->wP_Hook->apply_filters($value, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply_filters3()
{
    $value = m::mock('UntypedParameter_value_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->callbacks) == false (line 265)
    // if (!$this->doing_action) == false (line 278)
    // if ($the_['accepted_args'] == 0) == true (line 283)
    // PhpParser\Node\Stmt\Do_ == false (line 274)

    $actual = $this->wP_Hook->apply_filters($value, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply_filters4()
{
    $value = m::mock('UntypedParameter_value_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->callbacks) == false (line 265)
    // if (!$this->doing_action) == true (line 278)
    // if ($the_['accepted_args'] == 0) == false (line 283)
    // if ($the_['accepted_args'] >= $num_args) == false (line 285)
    // PhpParser\Node\Stmt\Do_ == false (line 274)

    $actual = $this->wP_Hook->apply_filters($value, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply_filters5()
{
    $value = m::mock('UntypedParameter_value_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->callbacks) == false (line 265)
    // if (!$this->doing_action) == true (line 278)
    // if ($the_['accepted_args'] == 0) == false (line 283)
    // if ($the_['accepted_args'] >= $num_args) == true (line 285)
    // PhpParser\Node\Stmt\Do_ == false (line 274)

    $actual = $this->wP_Hook->apply_filters($value, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply_filters6()
{
    $value = m::mock('UntypedParameter_value_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->callbacks) == false (line 265)
    // if (!$this->doing_action) == true (line 278)
    // if ($the_['accepted_args'] == 0) == true (line 283)
    // PhpParser\Node\Stmt\Do_ == false (line 274)

    $actual = $this->wP_Hook->apply_filters($value, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply_filters7()
{
    $value = m::mock('UntypedParameter_value_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->callbacks) == true (line 265)

    $actual = $this->wP_Hook->apply_filters($value, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_action0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->nesting_level) == false (line 313)

    $actual = $this->wP_Hook->do_action($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_action1()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->nesting_level) == true (line 313)

    $actual = $this->wP_Hook->do_action($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_all_hook0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // PhpParser\Node\Stmt\Do_ == false (line 329)

    $actual = $this->wP_Hook->do_all_hook($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_all_hook1()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // PhpParser\Node\Stmt\Do_ == false (line 329)

    $actual = $this->wP_Hook->do_all_hook($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCurrent_priority0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === \current($this->iterations)) == false (line 348)

    $actual = $this->wP_Hook->current_priority();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCurrent_priority1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === \current($this->iterations)) == true (line 348)

    $actual = $this->wP_Hook->current_priority();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuild_preinitialized_hooks0()
{
    $filters = m::mock('UntypedParameter_filters_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Hook->build_preinitialized_hooks($filters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuild_preinitialized_hooks1()
{
    $filters = m::mock('UntypedParameter_filters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($callback_groups) && $callback_groups instanceof \WP_Hook) == false (line 369)

    $actual = $this->wP_Hook->build_preinitialized_hooks($filters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuild_preinitialized_hooks2()
{
    $filters = m::mock('UntypedParameter_filters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($callback_groups) && $callback_groups instanceof \WP_Hook) == false (line 369)

    $actual = $this->wP_Hook->build_preinitialized_hooks($filters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuild_preinitialized_hooks3()
{
    $filters = m::mock('UntypedParameter_filters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($callback_groups) && $callback_groups instanceof \WP_Hook) == false (line 369)

    $actual = $this->wP_Hook->build_preinitialized_hooks($filters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuild_preinitialized_hooks4()
{
    $filters = m::mock('UntypedParameter_filters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($callback_groups) && $callback_groups instanceof \WP_Hook) == true (line 369)

    $actual = $this->wP_Hook->build_preinitialized_hooks($filters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetExists0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Hook->offsetExists($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Hook->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetSet0()
{
    $offset = m::mock('UntypedParameter_offset_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($offset)) == false (line 427)

    $actual = $this->wP_Hook->offsetSet($offset, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetSet1()
{
    $offset = m::mock('UntypedParameter_offset_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($offset)) == true (line 427)

    $actual = $this->wP_Hook->offsetSet($offset, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetUnset0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Hook->offsetUnset($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCurrent0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Hook->current();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNext0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Hook->next();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Hook->key();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Hook->valid();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRewind0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Hook->rewind();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
