<?php

namespace tests;

use Mockery as m;
use WP_REST_Term_Meta_Fields;

class WP_REST_Term_Meta_FieldsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_taxonomy = null;
/**
* @var \WP_REST_Term_Meta_Fields
*/
protected $wP_REST_Term_Meta_Fields;

public function setUp()
{
    parent::setUp();

    $this->_taxonomy = null;
    $this->wP_REST_Term_Meta_Fields = new \WP_REST_Term_Meta_Fields($this->_taxonomy);
}

public function testGet_rest_field_type0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Term_Meta_Fields->get_rest_field_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
