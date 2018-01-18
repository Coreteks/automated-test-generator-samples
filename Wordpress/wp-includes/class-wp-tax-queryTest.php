<?php

namespace tests;

use Mockery as m;
use WP_Tax_Query;

class WP_Tax_QueryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_tax_query = null;
/**
* @var \WP_Tax_Query
*/
protected $wP_Tax_Query;

public function setUp()
{
    parent::setUp();

    $this->_tax_query = null;
    $this->wP_Tax_Query = new \WP_Tax_Query($this->_tax_query);
}

public function testSanitize_query0()
{
    $queries = m::mock('UntypedParameter_queries_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Tax_Query->sanitize_query($queries);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_query1()
{
    $queries = m::mock('UntypedParameter_queries_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('relation' === $key) == false (line 149)
    // if (self::is_first_order_clause($query)) == false (line 153)
    // if (\is_array($query)) == false (line 183)

    $actual = $this->wP_Tax_Query->sanitize_query($queries);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_query2()
{
    $queries = m::mock('UntypedParameter_queries_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('relation' === $key) == false (line 149)
    // if (self::is_first_order_clause($query)) == false (line 153)
    // if (\is_array($query)) == true (line 183)
    // if (!empty($cleaned_subquery)) == false (line 186)

    $actual = $this->wP_Tax_Query->sanitize_query($queries);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_query3()
{
    $queries = m::mock('UntypedParameter_queries_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('relation' === $key) == false (line 149)
    // if (self::is_first_order_clause($query)) == false (line 153)
    // if (\is_array($query)) == true (line 183)
    // if (!empty($cleaned_subquery)) == true (line 186)
    // if (!isset($cleaned_subquery['relation'])) == false (line 188)

    $actual = $this->wP_Tax_Query->sanitize_query($queries);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_query4()
{
    $queries = m::mock('UntypedParameter_queries_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('relation' === $key) == false (line 149)
    // if (self::is_first_order_clause($query)) == false (line 153)
    // if (\is_array($query)) == true (line 183)
    // if (!empty($cleaned_subquery)) == true (line 186)
    // if (!isset($cleaned_subquery['relation'])) == true (line 188)

    $actual = $this->wP_Tax_Query->sanitize_query($queries);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_query5()
{
    $queries = m::mock('UntypedParameter_queries_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('relation' === $key) == false (line 149)
    // if (self::is_first_order_clause($query)) == true (line 153)
    // if (!empty($cleaned_clause['taxonomy']) && 'NOT IN' !== $cleaned_clause['operator']) == false (line 163)

    $actual = $this->wP_Tax_Query->sanitize_query($queries);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_query6()
{
    $queries = m::mock('UntypedParameter_queries_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('relation' === $key) == false (line 149)
    // if (self::is_first_order_clause($query)) == true (line 153)
    // if (!empty($cleaned_clause['taxonomy']) && 'NOT IN' !== $cleaned_clause['operator']) == true (line 163)
    // if (!isset($this->queried_terms[$taxonomy])) == false (line 165)
    // if (!empty($cleaned_clause['terms']) && !isset($this->queried_terms[$taxonomy]['terms'])) == false (line 173)
    // if (!empty($cleaned_clause['field']) && !isset($this->queried_terms[$taxonomy]['field'])) == false (line 177)

    $actual = $this->wP_Tax_Query->sanitize_query($queries);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_query7()
{
    $queries = m::mock('UntypedParameter_queries_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('relation' === $key) == false (line 149)
    // if (self::is_first_order_clause($query)) == true (line 153)
    // if (!empty($cleaned_clause['taxonomy']) && 'NOT IN' !== $cleaned_clause['operator']) == true (line 163)
    // if (!isset($this->queried_terms[$taxonomy])) == false (line 165)
    // if (!empty($cleaned_clause['terms']) && !isset($this->queried_terms[$taxonomy]['terms'])) == false (line 173)
    // if (!empty($cleaned_clause['field']) && !isset($this->queried_terms[$taxonomy]['field'])) == true (line 177)

    $actual = $this->wP_Tax_Query->sanitize_query($queries);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_query8()
{
    $queries = m::mock('UntypedParameter_queries_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('relation' === $key) == false (line 149)
    // if (self::is_first_order_clause($query)) == true (line 153)
    // if (!empty($cleaned_clause['taxonomy']) && 'NOT IN' !== $cleaned_clause['operator']) == true (line 163)
    // if (!isset($this->queried_terms[$taxonomy])) == false (line 165)
    // if (!empty($cleaned_clause['terms']) && !isset($this->queried_terms[$taxonomy]['terms'])) == true (line 173)
    // if (!empty($cleaned_clause['field']) && !isset($this->queried_terms[$taxonomy]['field'])) == false (line 177)

    $actual = $this->wP_Tax_Query->sanitize_query($queries);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_query9()
{
    $queries = m::mock('UntypedParameter_queries_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('relation' === $key) == false (line 149)
    // if (self::is_first_order_clause($query)) == true (line 153)
    // if (!empty($cleaned_clause['taxonomy']) && 'NOT IN' !== $cleaned_clause['operator']) == true (line 163)
    // if (!isset($this->queried_terms[$taxonomy])) == false (line 165)
    // if (!empty($cleaned_clause['terms']) && !isset($this->queried_terms[$taxonomy]['terms'])) == true (line 173)
    // if (!empty($cleaned_clause['field']) && !isset($this->queried_terms[$taxonomy]['field'])) == true (line 177)

    $actual = $this->wP_Tax_Query->sanitize_query($queries);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_query10()
{
    $queries = m::mock('UntypedParameter_queries_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('relation' === $key) == false (line 149)
    // if (self::is_first_order_clause($query)) == true (line 153)
    // if (!empty($cleaned_clause['taxonomy']) && 'NOT IN' !== $cleaned_clause['operator']) == true (line 163)
    // if (!isset($this->queried_terms[$taxonomy])) == true (line 165)
    // if (!empty($cleaned_clause['terms']) && !isset($this->queried_terms[$taxonomy]['terms'])) == false (line 173)
    // if (!empty($cleaned_clause['field']) && !isset($this->queried_terms[$taxonomy]['field'])) == false (line 177)

    $actual = $this->wP_Tax_Query->sanitize_query($queries);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_query11()
{
    $queries = m::mock('UntypedParameter_queries_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('relation' === $key) == false (line 149)
    // if (self::is_first_order_clause($query)) == true (line 153)
    // if (!empty($cleaned_clause['taxonomy']) && 'NOT IN' !== $cleaned_clause['operator']) == true (line 163)
    // if (!isset($this->queried_terms[$taxonomy])) == true (line 165)
    // if (!empty($cleaned_clause['terms']) && !isset($this->queried_terms[$taxonomy]['terms'])) == false (line 173)
    // if (!empty($cleaned_clause['field']) && !isset($this->queried_terms[$taxonomy]['field'])) == true (line 177)

    $actual = $this->wP_Tax_Query->sanitize_query($queries);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_query12()
{
    $queries = m::mock('UntypedParameter_queries_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('relation' === $key) == false (line 149)
    // if (self::is_first_order_clause($query)) == true (line 153)
    // if (!empty($cleaned_clause['taxonomy']) && 'NOT IN' !== $cleaned_clause['operator']) == true (line 163)
    // if (!isset($this->queried_terms[$taxonomy])) == true (line 165)
    // if (!empty($cleaned_clause['terms']) && !isset($this->queried_terms[$taxonomy]['terms'])) == true (line 173)
    // if (!empty($cleaned_clause['field']) && !isset($this->queried_terms[$taxonomy]['field'])) == false (line 177)

    $actual = $this->wP_Tax_Query->sanitize_query($queries);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_query13()
{
    $queries = m::mock('UntypedParameter_queries_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('relation' === $key) == false (line 149)
    // if (self::is_first_order_clause($query)) == true (line 153)
    // if (!empty($cleaned_clause['taxonomy']) && 'NOT IN' !== $cleaned_clause['operator']) == true (line 163)
    // if (!isset($this->queried_terms[$taxonomy])) == true (line 165)
    // if (!empty($cleaned_clause['terms']) && !isset($this->queried_terms[$taxonomy]['terms'])) == true (line 173)
    // if (!empty($cleaned_clause['field']) && !isset($this->queried_terms[$taxonomy]['field'])) == true (line 177)

    $actual = $this->wP_Tax_Query->sanitize_query($queries);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_query14()
{
    $queries = m::mock('UntypedParameter_queries_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('relation' === $key) == true (line 149)

    $actual = $this->wP_Tax_Query->sanitize_query($queries);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_relation0()
{
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('OR' === \strtoupper($relation)) == false (line 209)

    $actual = $this->wP_Tax_Query->sanitize_relation($relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_relation1()
{
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('OR' === \strtoupper($relation)) == true (line 209)

    $actual = $this->wP_Tax_Query->sanitize_relation($relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sql0()
{
    $primary_table = m::mock('UntypedParameter_primary_table_');
    $primary_id_column = m::mock('UntypedParameter_primary_id_column_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Tax_Query->get_sql($primary_table, $primary_id_column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sql_for_clause0()
{
    $clause = m::mock('UntypedParameter_clause_');
    $parent_query = m::mock('UntypedParameter_parent_query_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($clause)) == false (line 401)
    // if ('IN' == $operator) == false (line 408)
    // if ('NOT IN' == $operator) == false (line 438)
    // if ('AND' == $operator) == false (line 452)
    // if ('NOT EXISTS' === $operator || 'EXISTS' === $operator) == false (line 469)

    $actual = $this->wP_Tax_Query->get_sql_for_clause($clause, $parent_query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sql_for_clause1()
{
    $clause = m::mock('UntypedParameter_clause_');
    $parent_query = m::mock('UntypedParameter_parent_query_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($clause)) == false (line 401)
    // if ('IN' == $operator) == false (line 408)
    // if ('NOT IN' == $operator) == false (line 438)
    // if ('AND' == $operator) == false (line 452)
    // if ('NOT EXISTS' === $operator || 'EXISTS' === $operator) == true (line 469)

    $actual = $this->wP_Tax_Query->get_sql_for_clause($clause, $parent_query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sql_for_clause2()
{
    $clause = m::mock('UntypedParameter_clause_');
    $parent_query = m::mock('UntypedParameter_parent_query_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($clause)) == false (line 401)
    // if ('IN' == $operator) == false (line 408)
    // if ('NOT IN' == $operator) == false (line 438)
    // if ('AND' == $operator) == true (line 452)
    // if (empty($terms)) == false (line 454)

    $actual = $this->wP_Tax_Query->get_sql_for_clause($clause, $parent_query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sql_for_clause3()
{
    $clause = m::mock('UntypedParameter_clause_');
    $parent_query = m::mock('UntypedParameter_parent_query_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($clause)) == false (line 401)
    // if ('IN' == $operator) == false (line 408)
    // if ('NOT IN' == $operator) == false (line 438)
    // if ('AND' == $operator) == true (line 452)
    // if (empty($terms)) == true (line 454)

    $actual = $this->wP_Tax_Query->get_sql_for_clause($clause, $parent_query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sql_for_clause4()
{
    $clause = m::mock('UntypedParameter_clause_');
    $parent_query = m::mock('UntypedParameter_parent_query_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($clause)) == false (line 401)
    // if ('IN' == $operator) == false (line 408)
    // if ('NOT IN' == $operator) == true (line 438)
    // if (empty($terms)) == false (line 440)

    $actual = $this->wP_Tax_Query->get_sql_for_clause($clause, $parent_query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sql_for_clause5()
{
    $clause = m::mock('UntypedParameter_clause_');
    $parent_query = m::mock('UntypedParameter_parent_query_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($clause)) == false (line 401)
    // if ('IN' == $operator) == false (line 408)
    // if ('NOT IN' == $operator) == true (line 438)
    // if (empty($terms)) == true (line 440)

    $actual = $this->wP_Tax_Query->get_sql_for_clause($clause, $parent_query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sql_for_clause6()
{
    $clause = m::mock('UntypedParameter_clause_');
    $parent_query = m::mock('UntypedParameter_parent_query_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($clause)) == false (line 401)
    // if ('IN' == $operator) == true (line 408)
    // if (empty($terms)) == false (line 410)
    // if (\false === $alias) == false (line 421)

    $actual = $this->wP_Tax_Query->get_sql_for_clause($clause, $parent_query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sql_for_clause7()
{
    $clause = m::mock('UntypedParameter_clause_');
    $parent_query = m::mock('UntypedParameter_parent_query_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($clause)) == false (line 401)
    // if ('IN' == $operator) == true (line 408)
    // if (empty($terms)) == false (line 410)
    // if (\false === $alias) == true (line 421)

    $actual = $this->wP_Tax_Query->get_sql_for_clause($clause, $parent_query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sql_for_clause8()
{
    $clause = m::mock('UntypedParameter_clause_');
    $parent_query = m::mock('UntypedParameter_parent_query_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($clause)) == false (line 401)
    // if ('IN' == $operator) == true (line 408)
    // if (empty($terms)) == true (line 410)

    $actual = $this->wP_Tax_Query->get_sql_for_clause($clause, $parent_query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sql_for_clause9()
{
    $clause = m::mock('UntypedParameter_clause_');
    $parent_query = m::mock('UntypedParameter_parent_query_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($clause)) == true (line 401)

    $actual = $this->wP_Tax_Query->get_sql_for_clause($clause, $parent_query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransform_query0()
{
    $query = m::mock('UntypedParameter_query_');
    $resulting_field = m::mock('UntypedParameter_resulting_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query['terms'])) == false (line 598)
    // if ($query['field'] == $resulting_field) == false (line 602)
    // if (empty($terms)) == false (line 610)
    // switch ($query['field']) (line 625)
    // Case 'slug' == false (line 626)
    // Case 'name' == false (line 629)
    // Case 'term_taxonomy_id' == false (line 632)
    // Default (line 635)
    // if (\is_wp_error($term_list)) == false (line 643)
    // if ('AND' == $query['operator'] && \count($term_list) < \count($query['terms'])) == false (line 648)

    $actual = $this->wP_Tax_Query->transform_query($query, $resulting_field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransform_query1()
{
    $query = m::mock('UntypedParameter_query_');
    $resulting_field = m::mock('UntypedParameter_resulting_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query['terms'])) == false (line 598)
    // if ($query['field'] == $resulting_field) == false (line 602)
    // if (empty($terms)) == false (line 610)
    // switch ($query['field']) (line 625)
    // Case 'slug' == false (line 626)
    // Case 'name' == false (line 629)
    // Case 'term_taxonomy_id' == false (line 632)
    // Default (line 635)
    // if (\is_wp_error($term_list)) == false (line 643)
    // if ('AND' == $query['operator'] && \count($term_list) < \count($query['terms'])) == true (line 648)

    $actual = $this->wP_Tax_Query->transform_query($query, $resulting_field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransform_query2()
{
    $query = m::mock('UntypedParameter_query_');
    $resulting_field = m::mock('UntypedParameter_resulting_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query['terms'])) == false (line 598)
    // if ($query['field'] == $resulting_field) == false (line 602)
    // if (empty($terms)) == false (line 610)
    // switch ($query['field']) (line 625)
    // Case 'slug' == false (line 626)
    // Case 'name' == false (line 629)
    // Case 'term_taxonomy_id' == false (line 632)
    // Default (line 635)
    // if (\is_wp_error($term_list)) == true (line 643)

    $actual = $this->wP_Tax_Query->transform_query($query, $resulting_field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransform_query3()
{
    $query = m::mock('UntypedParameter_query_');
    $resulting_field = m::mock('UntypedParameter_resulting_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query['terms'])) == false (line 598)
    // if ($query['field'] == $resulting_field) == false (line 602)
    // if (empty($terms)) == false (line 610)
    // switch ($query['field']) (line 625)
    // Case 'slug' == false (line 626)
    // Case 'name' == false (line 629)
    // Case 'term_taxonomy_id' == true (line 632)
    // if (\is_wp_error($term_list)) == false (line 643)
    // if ('AND' == $query['operator'] && \count($term_list) < \count($query['terms'])) == false (line 648)

    $actual = $this->wP_Tax_Query->transform_query($query, $resulting_field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransform_query4()
{
    $query = m::mock('UntypedParameter_query_');
    $resulting_field = m::mock('UntypedParameter_resulting_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query['terms'])) == false (line 598)
    // if ($query['field'] == $resulting_field) == false (line 602)
    // if (empty($terms)) == false (line 610)
    // switch ($query['field']) (line 625)
    // Case 'slug' == false (line 626)
    // Case 'name' == false (line 629)
    // Case 'term_taxonomy_id' == true (line 632)
    // if (\is_wp_error($term_list)) == false (line 643)
    // if ('AND' == $query['operator'] && \count($term_list) < \count($query['terms'])) == true (line 648)

    $actual = $this->wP_Tax_Query->transform_query($query, $resulting_field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransform_query5()
{
    $query = m::mock('UntypedParameter_query_');
    $resulting_field = m::mock('UntypedParameter_resulting_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query['terms'])) == false (line 598)
    // if ($query['field'] == $resulting_field) == false (line 602)
    // if (empty($terms)) == false (line 610)
    // switch ($query['field']) (line 625)
    // Case 'slug' == false (line 626)
    // Case 'name' == false (line 629)
    // Case 'term_taxonomy_id' == true (line 632)
    // if (\is_wp_error($term_list)) == true (line 643)

    $actual = $this->wP_Tax_Query->transform_query($query, $resulting_field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransform_query6()
{
    $query = m::mock('UntypedParameter_query_');
    $resulting_field = m::mock('UntypedParameter_resulting_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query['terms'])) == false (line 598)
    // if ($query['field'] == $resulting_field) == false (line 602)
    // if (empty($terms)) == false (line 610)
    // switch ($query['field']) (line 625)
    // Case 'slug' == false (line 626)
    // Case 'name' == true (line 629)
    // if (\is_wp_error($term_list)) == false (line 643)
    // if ('AND' == $query['operator'] && \count($term_list) < \count($query['terms'])) == false (line 648)

    $actual = $this->wP_Tax_Query->transform_query($query, $resulting_field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransform_query7()
{
    $query = m::mock('UntypedParameter_query_');
    $resulting_field = m::mock('UntypedParameter_resulting_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query['terms'])) == false (line 598)
    // if ($query['field'] == $resulting_field) == false (line 602)
    // if (empty($terms)) == false (line 610)
    // switch ($query['field']) (line 625)
    // Case 'slug' == false (line 626)
    // Case 'name' == true (line 629)
    // if (\is_wp_error($term_list)) == false (line 643)
    // if ('AND' == $query['operator'] && \count($term_list) < \count($query['terms'])) == true (line 648)

    $actual = $this->wP_Tax_Query->transform_query($query, $resulting_field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransform_query8()
{
    $query = m::mock('UntypedParameter_query_');
    $resulting_field = m::mock('UntypedParameter_resulting_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query['terms'])) == false (line 598)
    // if ($query['field'] == $resulting_field) == false (line 602)
    // if (empty($terms)) == false (line 610)
    // switch ($query['field']) (line 625)
    // Case 'slug' == false (line 626)
    // Case 'name' == true (line 629)
    // if (\is_wp_error($term_list)) == true (line 643)

    $actual = $this->wP_Tax_Query->transform_query($query, $resulting_field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransform_query9()
{
    $query = m::mock('UntypedParameter_query_');
    $resulting_field = m::mock('UntypedParameter_resulting_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query['terms'])) == false (line 598)
    // if ($query['field'] == $resulting_field) == false (line 602)
    // if (empty($terms)) == false (line 610)
    // switch ($query['field']) (line 625)
    // Case 'slug' == true (line 626)
    // if (\is_wp_error($term_list)) == false (line 643)
    // if ('AND' == $query['operator'] && \count($term_list) < \count($query['terms'])) == false (line 648)

    $actual = $this->wP_Tax_Query->transform_query($query, $resulting_field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransform_query10()
{
    $query = m::mock('UntypedParameter_query_');
    $resulting_field = m::mock('UntypedParameter_resulting_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query['terms'])) == false (line 598)
    // if ($query['field'] == $resulting_field) == false (line 602)
    // if (empty($terms)) == false (line 610)
    // switch ($query['field']) (line 625)
    // Case 'slug' == true (line 626)
    // if (\is_wp_error($term_list)) == false (line 643)
    // if ('AND' == $query['operator'] && \count($term_list) < \count($query['terms'])) == true (line 648)

    $actual = $this->wP_Tax_Query->transform_query($query, $resulting_field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransform_query11()
{
    $query = m::mock('UntypedParameter_query_');
    $resulting_field = m::mock('UntypedParameter_resulting_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query['terms'])) == false (line 598)
    // if ($query['field'] == $resulting_field) == false (line 602)
    // if (empty($terms)) == false (line 610)
    // switch ($query['field']) (line 625)
    // Case 'slug' == true (line 626)
    // if (\is_wp_error($term_list)) == true (line 643)

    $actual = $this->wP_Tax_Query->transform_query($query, $resulting_field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransform_query12()
{
    $query = m::mock('UntypedParameter_query_');
    $resulting_field = m::mock('UntypedParameter_resulting_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query['terms'])) == false (line 598)
    // if ($query['field'] == $resulting_field) == false (line 602)
    // if (empty($terms)) == true (line 610)

    $actual = $this->wP_Tax_Query->transform_query($query, $resulting_field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransform_query13()
{
    $query = m::mock('UntypedParameter_query_');
    $resulting_field = m::mock('UntypedParameter_resulting_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query['terms'])) == false (line 598)
    // if ($query['field'] == $resulting_field) == true (line 602)

    $actual = $this->wP_Tax_Query->transform_query($query, $resulting_field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransform_query14()
{
    $query = m::mock('UntypedParameter_query_');
    $resulting_field = m::mock('UntypedParameter_resulting_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query['terms'])) == true (line 598)

    $actual = $this->wP_Tax_Query->transform_query($query, $resulting_field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
