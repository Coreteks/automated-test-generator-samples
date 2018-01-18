<?php

namespace tests;

use Mockery as m;
use WP_Term;

class WP_TermTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_term = null;
/**
* @var \WP_Term
*/
protected $wP_Term;

public function setUp()
{
    parent::setUp();

    $this->_term = null;
    $this->wP_Term = new \WP_Term($this->_term);
}

public function testGet_instance0()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == false (line 127)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance1()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == false (line 138)
    // if (1 === \count($terms)) == false (line 147)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == false (line 172)
    // if (1 === \count($terms)) == false (line 179)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance2()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == false (line 138)
    // if (1 === \count($terms)) == false (line 147)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == false (line 172)
    // if (1 === \count($terms)) == true (line 179)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance3()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == false (line 138)
    // if (1 === \count($terms)) == false (line 147)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == true (line 172)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance4()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == false (line 138)
    // if (1 === \count($terms)) == false (line 147)
    // if (!$_term) == true (line 167)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance5()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == false (line 138)
    // if (1 === \count($terms)) == false (line 147)
    // if (!\taxonomy_exists($t->taxonomy)) == false (line 154)
    // if ($_term) == false (line 159)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == false (line 172)
    // if (1 === \count($terms)) == false (line 179)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance6()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == false (line 138)
    // if (1 === \count($terms)) == false (line 147)
    // if (!\taxonomy_exists($t->taxonomy)) == false (line 154)
    // if ($_term) == false (line 159)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == false (line 172)
    // if (1 === \count($terms)) == true (line 179)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance7()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == false (line 138)
    // if (1 === \count($terms)) == false (line 147)
    // if (!\taxonomy_exists($t->taxonomy)) == false (line 154)
    // if ($_term) == false (line 159)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == true (line 172)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance8()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == false (line 138)
    // if (1 === \count($terms)) == false (line 147)
    // if (!\taxonomy_exists($t->taxonomy)) == false (line 154)
    // if ($_term) == false (line 159)
    // if (!$_term) == true (line 167)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance9()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == false (line 138)
    // if (1 === \count($terms)) == false (line 147)
    // if (!\taxonomy_exists($t->taxonomy)) == false (line 154)
    // if ($_term) == true (line 159)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance10()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == false (line 138)
    // if (1 === \count($terms)) == false (line 147)
    // if (!\taxonomy_exists($t->taxonomy)) == true (line 154)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == false (line 172)
    // if (1 === \count($terms)) == false (line 179)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance11()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == false (line 138)
    // if (1 === \count($terms)) == false (line 147)
    // if (!\taxonomy_exists($t->taxonomy)) == true (line 154)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == false (line 172)
    // if (1 === \count($terms)) == true (line 179)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance12()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == false (line 138)
    // if (1 === \count($terms)) == false (line 147)
    // if (!\taxonomy_exists($t->taxonomy)) == true (line 154)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == true (line 172)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance13()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == false (line 138)
    // if (1 === \count($terms)) == false (line 147)
    // if (!\taxonomy_exists($t->taxonomy)) == true (line 154)
    // if (!$_term) == true (line 167)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance14()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == false (line 138)
    // if (1 === \count($terms)) == true (line 147)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == false (line 172)
    // if (1 === \count($terms)) == false (line 179)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance15()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == false (line 138)
    // if (1 === \count($terms)) == true (line 147)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == false (line 172)
    // if (1 === \count($terms)) == true (line 179)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance16()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == false (line 138)
    // if (1 === \count($terms)) == true (line 147)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == true (line 172)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance17()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == false (line 138)
    // if (1 === \count($terms)) == true (line 147)
    // if (!$_term) == true (line 167)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance18()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == true (line 138)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == false (line 172)
    // if (1 === \count($terms)) == false (line 179)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance19()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == true (line 138)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == false (line 172)
    // if (1 === \count($terms)) == true (line 179)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance20()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == true (line 138)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == true (line 172)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance21()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == true (line 138)
    // if (!$_term) == true (line 167)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance22()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == true (line 138)
    // if ($taxonomy === $match->taxonomy) == false (line 140)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == false (line 172)
    // if (1 === \count($terms)) == false (line 179)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance23()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == true (line 138)
    // if ($taxonomy === $match->taxonomy) == false (line 140)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == false (line 172)
    // if (1 === \count($terms)) == true (line 179)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance24()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == true (line 138)
    // if ($taxonomy === $match->taxonomy) == false (line 140)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == true (line 172)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance25()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == true (line 138)
    // if ($taxonomy === $match->taxonomy) == false (line 140)
    // if (!$_term) == true (line 167)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance26()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == true (line 138)
    // if ($taxonomy === $match->taxonomy) == true (line 140)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == false (line 172)
    // if (1 === \count($terms)) == false (line 179)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance27()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == true (line 138)
    // if ($taxonomy === $match->taxonomy) == true (line 140)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == false (line 172)
    // if (1 === \count($terms)) == true (line 179)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance28()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == true (line 138)
    // if ($taxonomy === $match->taxonomy) == true (line 140)
    // if (!$_term) == false (line 167)
    // if (!\taxonomy_exists($_term->taxonomy)) == true (line 172)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance29()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == false (line 133)
    // if ($taxonomy) == true (line 138)
    // if ($taxonomy === $match->taxonomy) == true (line 140)
    // if (!$_term) == true (line 167)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance30()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == false (line 120)
    // if (!$_term || $taxonomy && $taxonomy !== $_term->taxonomy) == true (line 127)
    // if (!$terms) == true (line 133)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance31()
{
    $term_id = m::mock('UntypedParameter_term_id_');
    $taxonomy = m::mock('UntypedParameter_taxonomy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$term_id) == true (line 120)

    $actual = $this->wP_Term->get_instance($term_id, $taxonomy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter0()
{
    $filter = m::mock('UntypedParameter_filter_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Term->filter($filter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_array0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Term->to_array();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 234)
    // Case 'data' == false (line 235)

    $actual = $this->wP_Term->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 234)
    // Case 'data' == true (line 235)

    $actual = $this->wP_Term->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 234)
    // Case 'data' == true (line 235)

    $actual = $this->wP_Term->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
