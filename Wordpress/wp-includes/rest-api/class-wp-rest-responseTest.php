<?php

namespace tests;

use Mockery as m;
use WP_REST_Response;

class WP_REST_ResponseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_REST_Response
*/
protected $wP_REST_Response;

public function setUp()
{
    parent::setUp();

    $this->wP_REST_Response = new \WP_REST_Response();
}

public function testAdd_link0()
{
    $rel = m::mock('UntypedParameter_rel_');
    $href = m::mock('UntypedParameter_href_');
    $attributes = m::mock('UntypedParameter_attributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->links[$rel])) == false (line 59)
    // if (isset($attributes['href'])) == false (line 63)

    $actual = $this->wP_REST_Response->add_link($rel, $href, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_link1()
{
    $rel = m::mock('UntypedParameter_rel_');
    $href = m::mock('UntypedParameter_href_');
    $attributes = m::mock('UntypedParameter_attributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->links[$rel])) == false (line 59)
    // if (isset($attributes['href'])) == true (line 63)

    $actual = $this->wP_REST_Response->add_link($rel, $href, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_link2()
{
    $rel = m::mock('UntypedParameter_rel_');
    $href = m::mock('UntypedParameter_href_');
    $attributes = m::mock('UntypedParameter_attributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->links[$rel])) == true (line 59)
    // if (isset($attributes['href'])) == false (line 63)

    $actual = $this->wP_REST_Response->add_link($rel, $href, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_link3()
{
    $rel = m::mock('UntypedParameter_rel_');
    $href = m::mock('UntypedParameter_href_');
    $attributes = m::mock('UntypedParameter_attributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->links[$rel])) == true (line 59)
    // if (isset($attributes['href'])) == true (line 63)

    $actual = $this->wP_REST_Response->add_link($rel, $href, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_link0()
{
    $rel = m::mock('UntypedParameter_rel_');
    $href = m::mock('UntypedParameter_href_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->links[$rel])) == false (line 84)
    // if ($href) == false (line 88)
    // if (!$this->links[$rel]) == false (line 94)

    $actual = $this->wP_REST_Response->remove_link($rel, $href);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_link1()
{
    $rel = m::mock('UntypedParameter_rel_');
    $href = m::mock('UntypedParameter_href_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->links[$rel])) == false (line 84)
    // if ($href) == false (line 88)
    // if (!$this->links[$rel]) == true (line 94)

    $actual = $this->wP_REST_Response->remove_link($rel, $href);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_link2()
{
    $rel = m::mock('UntypedParameter_rel_');
    $href = m::mock('UntypedParameter_href_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->links[$rel])) == false (line 84)
    // if ($href) == true (line 88)
    // if (!$this->links[$rel]) == false (line 94)

    $actual = $this->wP_REST_Response->remove_link($rel, $href);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_link3()
{
    $rel = m::mock('UntypedParameter_rel_');
    $href = m::mock('UntypedParameter_href_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->links[$rel])) == false (line 84)
    // if ($href) == true (line 88)
    // if (!$this->links[$rel]) == true (line 94)

    $actual = $this->wP_REST_Response->remove_link($rel, $href);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_link4()
{
    $rel = m::mock('UntypedParameter_rel_');
    $href = m::mock('UntypedParameter_href_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->links[$rel])) == true (line 84)

    $actual = $this->wP_REST_Response->remove_link($rel, $href);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_links0()
{
    $links = m::mock('UntypedParameter_links_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Response->add_links($links);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_links1()
{
    $links = m::mock('UntypedParameter_links_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($set['href'])) == false (line 114)

    $actual = $this->wP_REST_Response->add_links($links);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_links2()
{
    $links = m::mock('UntypedParameter_links_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($set['href'])) == false (line 114)

    $actual = $this->wP_REST_Response->add_links($links);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_links3()
{
    $links = m::mock('UntypedParameter_links_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($set['href'])) == true (line 114)

    $actual = $this->wP_REST_Response->add_links($links);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_links4()
{
    $links = m::mock('UntypedParameter_links_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($set['href'])) == true (line 114)

    $actual = $this->wP_REST_Response->add_links($links);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_links0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Response->get_links();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLink_header0()
{
    $rel = m::mock('UntypedParameter_rel_');
    $link = m::mock('UntypedParameter_link_');
    $other = m::mock('UntypedParameter_other_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Response->link_header($rel, $link, $other);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLink_header1()
{
    $rel = m::mock('UntypedParameter_rel_');
    $link = m::mock('UntypedParameter_link_');
    $other = m::mock('UntypedParameter_other_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('title' === $key) == false (line 154)

    $actual = $this->wP_REST_Response->link_header($rel, $link, $other);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLink_header2()
{
    $rel = m::mock('UntypedParameter_rel_');
    $link = m::mock('UntypedParameter_link_');
    $other = m::mock('UntypedParameter_other_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('title' === $key) == true (line 154)

    $actual = $this->wP_REST_Response->link_header($rel, $link, $other);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_matched_route0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Response->get_matched_route();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_matched_route0()
{
    $route = m::mock('UntypedParameter_route_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Response->set_matched_route($route);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_matched_handler0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Response->get_matched_handler();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_matched_handler0()
{
    $handler = m::mock('UntypedParameter_handler_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Response->set_matched_handler($handler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_error0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Response->is_error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAs_error0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_error()) == false (line 225)
    // if (\is_array($this->get_data())) == false (line 231)

    $actual = $this->wP_REST_Response->as_error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAs_error1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_error()) == false (line 225)
    // if (\is_array($this->get_data())) == true (line 231)
    // if (!empty($data['additional_errors'])) == false (line 234)

    $actual = $this->wP_REST_Response->as_error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAs_error2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_error()) == false (line 225)
    // if (\is_array($this->get_data())) == true (line 231)
    // if (!empty($data['additional_errors'])) == true (line 234)

    $actual = $this->wP_REST_Response->as_error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAs_error3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_error()) == false (line 225)
    // if (\is_array($this->get_data())) == true (line 231)
    // if (!empty($data['additional_errors'])) == true (line 234)

    $actual = $this->wP_REST_Response->as_error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAs_error4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_error()) == true (line 225)

    $actual = $this->wP_REST_Response->as_error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_curies0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Response->get_curies();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
