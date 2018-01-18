<?php

namespace tests;

use Mockery as m;
use WP_Widget_RSS;

class WP_Widget_RSSTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Widget_RSS
*/
protected $wP_Widget_RSS;

public function setUp()
{
    parent::setUp();

    $this->wP_Widget_RSS = new \WP_Widget_RSS();
}

public function testWidget0()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget1()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget2()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget3()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget4()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget5()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget6()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget7()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget8()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget9()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget10()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget11()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget12()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget13()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget14()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget15()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget16()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget17()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget18()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget19()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget20()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget21()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget22()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget23()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget24()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget25()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget26()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget27()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget28()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget29()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget30()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget31()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget32()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget33()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget34()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget35()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget36()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget37()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget38()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget39()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget40()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget41()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget42()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget43()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget44()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget45()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget46()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget47()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget48()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget49()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget50()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget51()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget52()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget53()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget54()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget55()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget56()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget57()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget58()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget59()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget60()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget61()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget62()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget63()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget64()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget65()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget66()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget67()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget68()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget69()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget70()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget71()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget72()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget73()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget74()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget75()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget76()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget77()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget78()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget79()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget80()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == true (line 60)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget81()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == true (line 55)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget82()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget83()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget84()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget85()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget86()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget87()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget88()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget89()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget90()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget91()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget92()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget93()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget94()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget95()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget96()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget97()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == false (line 69)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget98()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget99()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget100()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget101()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget102()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget103()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget104()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget105()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget106()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget107()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget108()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget109()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget110()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget111()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget112()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget113()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget114()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget115()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget116()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget117()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget118()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget119()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget120()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget121()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget122()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget123()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget124()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget125()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget126()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget127()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget128()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget129()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == false (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget130()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget131()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget132()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget133()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget134()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget135()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget136()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget137()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget138()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget139()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget140()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget141()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget142()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget143()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget144()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget145()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget146()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget147()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget148()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget149()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget150()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget151()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget152()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget153()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == false (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget154()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget155()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget156()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget157()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == false (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget158()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget159()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == false (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget160()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == false (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget161()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == false (line 60)
    // if (!\is_wp_error($rss)) == true (line 69)
    // if (empty($title)) == true (line 71)
    // while (\stristr($link, 'http') != $link) == true (line 75)
    // while (\stristr($link, 'http') != $link) == false (line 75)
    // if (empty($title)) == true (line 80)
    // if ($title) == true (line 89)
    // if ($title) == true (line 94)
    // if (!\is_wp_error($rss)) == true (line 100)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget162()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == false (line 55)
    // if (\in_array(\untrailingslashit($url), array(\site_url(), \home_url()))) == true (line 60)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget163()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == false (line 46)
    // while (\stristr($url, 'http') != $url) == true (line 51)
    // while (\stristr($url, 'http') != $url) == false (line 51)
    // if (empty($url)) == true (line 55)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget164()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['error']) && $instance['error']) == true (line 46)

    $actual = $this->wP_Widget_RSS->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate0()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_RSS->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm0()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($instance)) == false (line 129)

    $actual = $this->wP_Widget_RSS->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm1()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($instance)) == true (line 129)

    $actual = $this->wP_Widget_RSS->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
