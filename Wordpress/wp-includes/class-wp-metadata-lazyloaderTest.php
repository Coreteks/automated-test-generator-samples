<?php

namespace tests;

use Mockery as m;
use WP_Metadata_Lazyloader;

class WP_Metadata_LazyloaderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Metadata_Lazyloader
*/
protected $wP_Metadata_Lazyloader;

public function setUp()
{
    parent::setUp();

    $this->wP_Metadata_Lazyloader = new \WP_Metadata_Lazyloader();
}

public function testQueue_objects0()
{
    $object_type = m::mock('UntypedParameter_object_type_');
    $object_ids = m::mock('UntypedParameter_object_ids_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->settings[$object_type])) == false (line 76)
    // if (!isset($this->pending_objects[$object_type])) == false (line 82)

    $actual = $this->wP_Metadata_Lazyloader->queue_objects($object_type, $object_ids);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue_objects1()
{
    $object_type = m::mock('UntypedParameter_object_type_');
    $object_ids = m::mock('UntypedParameter_object_ids_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->settings[$object_type])) == false (line 76)
    // if (!isset($this->pending_objects[$object_type])) == false (line 82)
    // if (!isset($this->pending_objects[$object_type][$object_id])) == false (line 88)

    $actual = $this->wP_Metadata_Lazyloader->queue_objects($object_type, $object_ids);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue_objects2()
{
    $object_type = m::mock('UntypedParameter_object_type_');
    $object_ids = m::mock('UntypedParameter_object_ids_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->settings[$object_type])) == false (line 76)
    // if (!isset($this->pending_objects[$object_type])) == false (line 82)
    // if (!isset($this->pending_objects[$object_type][$object_id])) == true (line 88)

    $actual = $this->wP_Metadata_Lazyloader->queue_objects($object_type, $object_ids);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue_objects3()
{
    $object_type = m::mock('UntypedParameter_object_type_');
    $object_ids = m::mock('UntypedParameter_object_ids_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->settings[$object_type])) == false (line 76)
    // if (!isset($this->pending_objects[$object_type])) == true (line 82)

    $actual = $this->wP_Metadata_Lazyloader->queue_objects($object_type, $object_ids);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue_objects4()
{
    $object_type = m::mock('UntypedParameter_object_type_');
    $object_ids = m::mock('UntypedParameter_object_ids_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->settings[$object_type])) == false (line 76)
    // if (!isset($this->pending_objects[$object_type])) == true (line 82)
    // if (!isset($this->pending_objects[$object_type][$object_id])) == false (line 88)

    $actual = $this->wP_Metadata_Lazyloader->queue_objects($object_type, $object_ids);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue_objects5()
{
    $object_type = m::mock('UntypedParameter_object_type_');
    $object_ids = m::mock('UntypedParameter_object_ids_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->settings[$object_type])) == false (line 76)
    // if (!isset($this->pending_objects[$object_type])) == true (line 82)
    // if (!isset($this->pending_objects[$object_type][$object_id])) == true (line 88)

    $actual = $this->wP_Metadata_Lazyloader->queue_objects($object_type, $object_ids);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue_objects6()
{
    $object_type = m::mock('UntypedParameter_object_type_');
    $object_ids = m::mock('UntypedParameter_object_ids_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->settings[$object_type])) == true (line 76)

    $actual = $this->wP_Metadata_Lazyloader->queue_objects($object_type, $object_ids);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset_queue0()
{
    $object_type = m::mock('UntypedParameter_object_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->settings[$object_type])) == false (line 116)

    $actual = $this->wP_Metadata_Lazyloader->reset_queue($object_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset_queue1()
{
    $object_type = m::mock('UntypedParameter_object_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->settings[$object_type])) == true (line 116)

    $actual = $this->wP_Metadata_Lazyloader->reset_queue($object_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLazyload_term_meta0()
{
    $check = m::mock('UntypedParameter_check_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->pending_objects['term'])) == false (line 139)

    $actual = $this->wP_Metadata_Lazyloader->lazyload_term_meta($check);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLazyload_term_meta1()
{
    $check = m::mock('UntypedParameter_check_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->pending_objects['term'])) == true (line 139)

    $actual = $this->wP_Metadata_Lazyloader->lazyload_term_meta($check);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLazyload_comment_meta0()
{
    $check = m::mock('UntypedParameter_check_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->pending_objects['comment'])) == false (line 161)

    $actual = $this->wP_Metadata_Lazyloader->lazyload_comment_meta($check);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLazyload_comment_meta1()
{
    $check = m::mock('UntypedParameter_check_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->pending_objects['comment'])) == true (line 161)

    $actual = $this->wP_Metadata_Lazyloader->lazyload_comment_meta($check);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
