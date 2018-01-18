<?php

namespace tests;

use Mockery as m;
use WP_oEmbed;

class WP_oEmbedTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_oEmbed
*/
protected $wP_oEmbed;

public function setUp()
{
    parent::setUp();

    $this->wP_oEmbed = new \WP_oEmbed();
}

public function test__call0()
{
    $name = m::mock('UntypedParameter_name_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($name, $this->compat_methods)) == false (line 237)

    $actual = $this->wP_oEmbed->__call($name, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call1()
{
    $name = m::mock('UntypedParameter_name_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($name, $this->compat_methods)) == true (line 237)

    $actual = $this->wP_oEmbed->__call($name, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_provider0()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['discover'])) == false (line 259)
    // if (!$provider && $args['discover']) == false (line 278)

    $actual = $this->wP_oEmbed->get_provider($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_provider1()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['discover'])) == false (line 259)
    // if (!$provider && $args['discover']) == true (line 278)

    $actual = $this->wP_oEmbed->get_provider($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_provider2()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['discover'])) == false (line 259)
    // if (!$regex) == false (line 267)
    // if (\preg_match($matchmask, $url)) == false (line 272)
    // if (!$provider && $args['discover']) == false (line 278)

    $actual = $this->wP_oEmbed->get_provider($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_provider3()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['discover'])) == false (line 259)
    // if (!$regex) == false (line 267)
    // if (\preg_match($matchmask, $url)) == false (line 272)
    // if (!$provider && $args['discover']) == true (line 278)

    $actual = $this->wP_oEmbed->get_provider($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_provider4()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['discover'])) == false (line 259)
    // if (!$regex) == false (line 267)
    // if (\preg_match($matchmask, $url)) == true (line 272)
    // if (!$provider && $args['discover']) == false (line 278)

    $actual = $this->wP_oEmbed->get_provider($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_provider5()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['discover'])) == false (line 259)
    // if (!$regex) == false (line 267)
    // if (\preg_match($matchmask, $url)) == true (line 272)
    // if (!$provider && $args['discover']) == true (line 278)

    $actual = $this->wP_oEmbed->get_provider($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_provider6()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['discover'])) == false (line 259)
    // if (!$regex) == true (line 267)
    // if (\preg_match($matchmask, $url)) == false (line 272)
    // if (!$provider && $args['discover']) == false (line 278)

    $actual = $this->wP_oEmbed->get_provider($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_provider7()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['discover'])) == false (line 259)
    // if (!$regex) == true (line 267)
    // if (\preg_match($matchmask, $url)) == false (line 272)
    // if (!$provider && $args['discover']) == true (line 278)

    $actual = $this->wP_oEmbed->get_provider($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_provider8()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['discover'])) == false (line 259)
    // if (!$regex) == true (line 267)
    // if (\preg_match($matchmask, $url)) == true (line 272)
    // if (!$provider && $args['discover']) == false (line 278)

    $actual = $this->wP_oEmbed->get_provider($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_provider9()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['discover'])) == false (line 259)
    // if (!$regex) == true (line 267)
    // if (\preg_match($matchmask, $url)) == true (line 272)
    // if (!$provider && $args['discover']) == true (line 278)

    $actual = $this->wP_oEmbed->get_provider($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_provider10()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['discover'])) == true (line 259)
    // if (!$provider && $args['discover']) == false (line 278)

    $actual = $this->wP_oEmbed->get_provider($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_provider11()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['discover'])) == true (line 259)
    // if (!$provider && $args['discover']) == true (line 278)

    $actual = $this->wP_oEmbed->get_provider($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_provider12()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['discover'])) == true (line 259)
    // if (!$regex) == false (line 267)
    // if (\preg_match($matchmask, $url)) == false (line 272)
    // if (!$provider && $args['discover']) == false (line 278)

    $actual = $this->wP_oEmbed->get_provider($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_provider13()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['discover'])) == true (line 259)
    // if (!$regex) == false (line 267)
    // if (\preg_match($matchmask, $url)) == false (line 272)
    // if (!$provider && $args['discover']) == true (line 278)

    $actual = $this->wP_oEmbed->get_provider($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_provider14()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['discover'])) == true (line 259)
    // if (!$regex) == false (line 267)
    // if (\preg_match($matchmask, $url)) == true (line 272)
    // if (!$provider && $args['discover']) == false (line 278)

    $actual = $this->wP_oEmbed->get_provider($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_provider15()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['discover'])) == true (line 259)
    // if (!$regex) == false (line 267)
    // if (\preg_match($matchmask, $url)) == true (line 272)
    // if (!$provider && $args['discover']) == true (line 278)

    $actual = $this->wP_oEmbed->get_provider($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_provider16()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['discover'])) == true (line 259)
    // if (!$regex) == true (line 267)
    // if (\preg_match($matchmask, $url)) == false (line 272)
    // if (!$provider && $args['discover']) == false (line 278)

    $actual = $this->wP_oEmbed->get_provider($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_provider17()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['discover'])) == true (line 259)
    // if (!$regex) == true (line 267)
    // if (\preg_match($matchmask, $url)) == false (line 272)
    // if (!$provider && $args['discover']) == true (line 278)

    $actual = $this->wP_oEmbed->get_provider($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_provider18()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['discover'])) == true (line 259)
    // if (!$regex) == true (line 267)
    // if (\preg_match($matchmask, $url)) == true (line 272)
    // if (!$provider && $args['discover']) == false (line 278)

    $actual = $this->wP_oEmbed->get_provider($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_provider19()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['discover'])) == true (line 259)
    // if (!$regex) == true (line 267)
    // if (\preg_match($matchmask, $url)) == true (line 272)
    // if (!$provider && $args['discover']) == true (line 278)

    $actual = $this->wP_oEmbed->get_provider($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_add_provider_early0()
{
    $format = m::mock('UntypedParameter_format_');
    $provider = m::mock('UntypedParameter_provider_');
    $regex = m::mock('UntypedParameter_regex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty(self::$early_providers['add'])) == false (line 305)

    $actual = $this->wP_oEmbed->_add_provider_early($format, $provider, $regex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_add_provider_early1()
{
    $format = m::mock('UntypedParameter_format_');
    $provider = m::mock('UntypedParameter_provider_');
    $regex = m::mock('UntypedParameter_regex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty(self::$early_providers['add'])) == true (line 305)

    $actual = $this->wP_oEmbed->_add_provider_early($format, $provider, $regex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_remove_provider_early0()
{
    $format = m::mock('UntypedParameter_format_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty(self::$early_providers['remove'])) == false (line 329)

    $actual = $this->wP_oEmbed->_remove_provider_early($format);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_remove_provider_early1()
{
    $format = m::mock('UntypedParameter_format_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty(self::$early_providers['remove'])) == true (line 329)

    $actual = $this->wP_oEmbed->_remove_provider_early($format);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data0()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$provider) == false (line 352)
    // if (\false === $data) == false (line 358)

    $actual = $this->wP_oEmbed->get_data($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data1()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$provider) == false (line 352)
    // if (\false === $data) == true (line 358)

    $actual = $this->wP_oEmbed->get_data($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data2()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$provider) == true (line 352)

    $actual = $this->wP_oEmbed->get_data($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_html0()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null !== $pre) == false (line 395)
    // if (\false === $data) == false (line 401)

    $actual = $this->wP_oEmbed->get_html($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_html1()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null !== $pre) == false (line 395)
    // if (\false === $data) == true (line 401)

    $actual = $this->wP_oEmbed->get_html($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_html2()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null !== $pre) == true (line 395)

    $actual = $this->wP_oEmbed->get_html($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover0()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == false (line 445)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover1()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == false (line 445)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover2()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == false (line 445)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover3()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == false (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover4()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == false (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover5()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == false (line 478)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover6()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover7()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover8()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover9()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == false (line 482)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover10()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == false (line 482)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover11()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == false (line 482)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover12()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == false (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover13()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == false (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover14()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == false (line 486)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover15()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == true (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover16()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == true (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover17()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == true (line 486)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover18()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == false (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover19()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == false (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover20()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == false (line 478)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover21()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover22()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover23()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover24()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == false (line 482)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover25()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == false (line 482)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover26()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == false (line 482)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover27()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == false (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover28()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == false (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover29()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == false (line 486)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover30()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == true (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover31()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == true (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover32()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == true (line 486)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover33()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == false (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover34()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == false (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover35()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == false (line 478)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover36()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover37()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover38()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover39()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == false (line 482)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover40()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == false (line 482)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover41()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == false (line 482)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover42()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == false (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover43()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == false (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover44()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == false (line 486)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover45()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == true (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover46()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == true (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover47()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == false (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == true (line 486)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover48()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == false (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover49()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == false (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover50()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == false (line 478)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover51()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover52()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover53()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover54()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == false (line 482)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover55()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == false (line 482)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover56()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == false (line 482)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover57()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == false (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover58()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == false (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover59()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == false (line 486)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover60()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == true (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover61()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == true (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover62()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == true (line 486)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover63()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == false (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover64()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == false (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover65()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == false (line 478)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover66()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover67()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover68()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover69()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == false (line 482)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover70()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == false (line 482)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover71()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == false (line 482)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover72()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == false (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover73()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == false (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover74()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == false (line 486)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover75()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == true (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover76()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == true (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover77()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == false (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == true (line 486)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover78()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == false (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover79()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == false (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover80()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == false (line 478)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover81()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover82()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover83()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover84()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == false (line 482)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover85()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == false (line 482)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover86()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == false (line 482)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover87()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == false (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover88()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == false (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover89()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == false (line 486)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover90()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == true (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == false (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover91()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == true (line 486)
    // if (!empty($providers['json'])) == false (line 495)
    // if (!empty($providers['xml'])) == true (line 497)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiscover92()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($html = \wp_remote_retrieve_body($request)) == true (line 445)
    // if ($html_head_end = \stripos($html, '</head>')) == true (line 465)
    // if (\stripos($html, $linktype)) == true (line 472)
    // if ($tagfound && \preg_match_all('#<link([^<>]+)/?>#iU', $html, $links)) == true (line 478)
    // if (!empty($atts['type']) && !empty($linktypes[$atts['type']]) && !empty($atts['href'])) == true (line 482)
    // if ('json' == $linktypes[$atts['type']]) == true (line 486)
    // if (!empty($providers['json'])) == true (line 495)

    $actual = $this->wP_oEmbed->discover($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFetch0()
{
    $provider = m::mock('UntypedParameter_provider_');
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->wP_oEmbed->fetch($provider, $url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFetch1()
{
    $provider = m::mock('UntypedParameter_provider_');
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($result) && 'not-implemented' == $result->get_error_code()) == false (line 536)

    $actual = $this->wP_oEmbed->fetch($provider, $url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFetch2()
{
    $provider = m::mock('UntypedParameter_provider_');
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($result) && 'not-implemented' == $result->get_error_code()) == true (line 536)

    $actual = $this->wP_oEmbed->fetch($provider, $url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData2html0()
{
    $data = m::mock('UntypedParameter_data_');
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_object($data) || empty($data->type)) == false (line 659)
    // switch ($data->type) (line 665)
    // Case 'photo' == false (line 666)
    // Case 'video' == false (line 678)
    // Case 'rich' == false (line 679)
    // Case 'link' == false (line 685)
    // Default (line 691)

    $actual = $this->wP_oEmbed->data2html($data, $url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData2html1()
{
    $data = m::mock('UntypedParameter_data_');
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_object($data) || empty($data->type)) == false (line 659)
    // switch ($data->type) (line 665)
    // Case 'photo' == false (line 666)
    // Case 'video' == false (line 678)
    // Case 'rich' == false (line 679)
    // Case 'link' == true (line 685)
    // if (!empty($data->title) && \is_string($data->title)) == false (line 686)

    $actual = $this->wP_oEmbed->data2html($data, $url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData2html2()
{
    $data = m::mock('UntypedParameter_data_');
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_object($data) || empty($data->type)) == false (line 659)
    // switch ($data->type) (line 665)
    // Case 'photo' == false (line 666)
    // Case 'video' == false (line 678)
    // Case 'rich' == false (line 679)
    // Case 'link' == true (line 685)
    // if (!empty($data->title) && \is_string($data->title)) == true (line 686)

    $actual = $this->wP_oEmbed->data2html($data, $url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData2html3()
{
    $data = m::mock('UntypedParameter_data_');
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_object($data) || empty($data->type)) == false (line 659)
    // switch ($data->type) (line 665)
    // Case 'photo' == false (line 666)
    // Case 'video' == false (line 678)
    // Case 'rich' == true (line 679)
    // if (!empty($data->html) && \is_string($data->html)) == false (line 680)

    $actual = $this->wP_oEmbed->data2html($data, $url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData2html4()
{
    $data = m::mock('UntypedParameter_data_');
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_object($data) || empty($data->type)) == false (line 659)
    // switch ($data->type) (line 665)
    // Case 'photo' == false (line 666)
    // Case 'video' == false (line 678)
    // Case 'rich' == true (line 679)
    // if (!empty($data->html) && \is_string($data->html)) == true (line 680)

    $actual = $this->wP_oEmbed->data2html($data, $url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData2html5()
{
    $data = m::mock('UntypedParameter_data_');
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_object($data) || empty($data->type)) == false (line 659)
    // switch ($data->type) (line 665)
    // Case 'photo' == false (line 666)
    // Case 'video' == true (line 678)
    // if (!empty($data->html) && \is_string($data->html)) == false (line 680)

    $actual = $this->wP_oEmbed->data2html($data, $url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData2html6()
{
    $data = m::mock('UntypedParameter_data_');
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_object($data) || empty($data->type)) == false (line 659)
    // switch ($data->type) (line 665)
    // Case 'photo' == false (line 666)
    // Case 'video' == true (line 678)
    // if (!empty($data->html) && \is_string($data->html)) == true (line 680)

    $actual = $this->wP_oEmbed->data2html($data, $url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData2html7()
{
    $data = m::mock('UntypedParameter_data_');
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_object($data) || empty($data->type)) == false (line 659)
    // switch ($data->type) (line 665)
    // Case 'photo' == true (line 666)
    // if (empty($data->url) || empty($data->width) || empty($data->height)) == false (line 667)
    // if (!\is_string($data->url) || !\is_numeric($data->width) || !\is_numeric($data->height)) == false (line 670)

    $actual = $this->wP_oEmbed->data2html($data, $url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData2html8()
{
    $data = m::mock('UntypedParameter_data_');
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_object($data) || empty($data->type)) == false (line 659)
    // switch ($data->type) (line 665)
    // Case 'photo' == true (line 666)
    // if (empty($data->url) || empty($data->width) || empty($data->height)) == false (line 667)
    // if (!\is_string($data->url) || !\is_numeric($data->width) || !\is_numeric($data->height)) == true (line 670)

    $actual = $this->wP_oEmbed->data2html($data, $url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData2html9()
{
    $data = m::mock('UntypedParameter_data_');
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_object($data) || empty($data->type)) == false (line 659)
    // switch ($data->type) (line 665)
    // Case 'photo' == true (line 666)
    // if (empty($data->url) || empty($data->width) || empty($data->height)) == true (line 667)

    $actual = $this->wP_oEmbed->data2html($data, $url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData2html10()
{
    $data = m::mock('UntypedParameter_data_');
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_object($data) || empty($data->type)) == true (line 659)

    $actual = $this->wP_oEmbed->data2html($data, $url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_strip_newlines0()
{
    $html = m::mock('UntypedParameter_html_');
    $data = m::mock('UntypedParameter_data_');
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === \strpos($html, "\n")) == false (line 721)

    $actual = $this->wP_oEmbed->_strip_newlines($html, $data, $url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_strip_newlines1()
{
    $html = m::mock('UntypedParameter_html_');
    $data = m::mock('UntypedParameter_data_');
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === \strpos($html, "\n")) == false (line 721)

    $actual = $this->wP_oEmbed->_strip_newlines($html, $data, $url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_strip_newlines2()
{
    $html = m::mock('UntypedParameter_html_');
    $data = m::mock('UntypedParameter_data_');
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === \strpos($html, "\n")) == true (line 721)

    $actual = $this->wP_oEmbed->_strip_newlines($html, $data, $url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
