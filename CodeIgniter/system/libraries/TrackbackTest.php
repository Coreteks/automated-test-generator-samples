<?php

namespace tests;

use CI_Trackback;
use Mockery as m;

class CI_TrackbackTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_Trackback
*/
protected $cI_Trackback;

public function setUp()
{
    parent::setUp();

    $this->cI_Trackback = new \CI_Trackback();
}

public function testSend0()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (\count($ping_url) > 0) == false (line 165)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend1()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (\count($ping_url) > 0) == true (line 165)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend2()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (\count($ping_url) > 0) == true (line 165)
    // if ($this->process($url, $data) === \FALSE) == false (line 169)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend3()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (\count($ping_url) > 0) == true (line 165)
    // if ($this->process($url, $data) === \FALSE) == true (line 169)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend4()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == false (line 139)
    // Case 'url' == false (line 142)
    // Default (line 145)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == false (line 151)
    // if (\count($ping_url) > 0) == false (line 165)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend5()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == false (line 139)
    // Case 'url' == false (line 142)
    // Default (line 145)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == false (line 151)
    // if (\count($ping_url) > 0) == true (line 165)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend6()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == false (line 139)
    // Case 'url' == false (line 142)
    // Default (line 145)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == false (line 151)
    // if (\count($ping_url) > 0) == true (line 165)
    // if ($this->process($url, $data) === \FALSE) == false (line 169)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend7()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == false (line 139)
    // Case 'url' == false (line 142)
    // Default (line 145)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == false (line 151)
    // if (\count($ping_url) > 0) == true (line 165)
    // if ($this->process($url, $data) === \FALSE) == true (line 169)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend8()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == false (line 139)
    // Case 'url' == false (line 142)
    // Default (line 145)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == true (line 151)
    // if (\count($ping_url) > 0) == false (line 165)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend9()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == false (line 139)
    // Case 'url' == false (line 142)
    // Default (line 145)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == true (line 151)
    // if (\count($ping_url) > 0) == true (line 165)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend10()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == false (line 139)
    // Case 'url' == false (line 142)
    // Default (line 145)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == true (line 151)
    // if (\count($ping_url) > 0) == true (line 165)
    // if ($this->process($url, $data) === \FALSE) == false (line 169)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend11()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == false (line 139)
    // Case 'url' == false (line 142)
    // Default (line 145)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == true (line 151)
    // if (\count($ping_url) > 0) == true (line 165)
    // if ($this->process($url, $data) === \FALSE) == true (line 169)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend12()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == false (line 139)
    // Case 'url' == true (line 142)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == false (line 151)
    // if (\count($ping_url) > 0) == false (line 165)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend13()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == false (line 139)
    // Case 'url' == true (line 142)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == false (line 151)
    // if (\count($ping_url) > 0) == true (line 165)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend14()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == false (line 139)
    // Case 'url' == true (line 142)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == false (line 151)
    // if (\count($ping_url) > 0) == true (line 165)
    // if ($this->process($url, $data) === \FALSE) == false (line 169)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend15()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == false (line 139)
    // Case 'url' == true (line 142)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == false (line 151)
    // if (\count($ping_url) > 0) == true (line 165)
    // if ($this->process($url, $data) === \FALSE) == true (line 169)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend16()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == false (line 139)
    // Case 'url' == true (line 142)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == true (line 151)
    // if (\count($ping_url) > 0) == false (line 165)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend17()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == false (line 139)
    // Case 'url' == true (line 142)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == true (line 151)
    // if (\count($ping_url) > 0) == true (line 165)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend18()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == false (line 139)
    // Case 'url' == true (line 142)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == true (line 151)
    // if (\count($ping_url) > 0) == true (line 165)
    // if ($this->process($url, $data) === \FALSE) == false (line 169)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend19()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == false (line 139)
    // Case 'url' == true (line 142)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == true (line 151)
    // if (\count($ping_url) > 0) == true (line 165)
    // if ($this->process($url, $data) === \FALSE) == true (line 169)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend20()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == true (line 139)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == false (line 151)
    // if (\count($ping_url) > 0) == false (line 165)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend21()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == true (line 139)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == false (line 151)
    // if (\count($ping_url) > 0) == true (line 165)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend22()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == true (line 139)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == false (line 151)
    // if (\count($ping_url) > 0) == true (line 165)
    // if ($this->process($url, $data) === \FALSE) == false (line 169)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend23()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == true (line 139)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == false (line 151)
    // if (\count($ping_url) > 0) == true (line 165)
    // if ($this->process($url, $data) === \FALSE) == true (line 169)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend24()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == true (line 139)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == true (line 151)
    // if (\count($ping_url) > 0) == false (line 165)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend25()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == true (line 139)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == true (line 151)
    // if (\count($ping_url) > 0) == true (line 165)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend26()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == true (line 139)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == true (line 151)
    // if (\count($ping_url) > 0) == true (line 165)
    // if ($this->process($url, $data) === \FALSE) == false (line 169)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend27()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == false (line 136)
    // Case 'excerpt' == true (line 139)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == true (line 151)
    // if (\count($ping_url) > 0) == true (line 165)
    // if ($this->process($url, $data) === \FALSE) == true (line 169)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend28()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == true (line 136)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == false (line 151)
    // if (\count($ping_url) > 0) == false (line 165)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend29()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == true (line 136)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == false (line 151)
    // if (\count($ping_url) > 0) == true (line 165)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend30()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == true (line 136)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == false (line 151)
    // if (\count($ping_url) > 0) == true (line 165)
    // if ($this->process($url, $data) === \FALSE) == false (line 169)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend31()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == true (line 136)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == false (line 151)
    // if (\count($ping_url) > 0) == true (line 165)
    // if ($this->process($url, $data) === \FALSE) == true (line 169)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend32()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == true (line 136)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == true (line 151)
    // if (\count($ping_url) > 0) == false (line 165)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend33()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == true (line 136)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == true (line 151)
    // if (\count($ping_url) > 0) == true (line 165)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend34()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == true (line 136)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == true (line 151)
    // if (\count($ping_url) > 0) == true (line 165)
    // if ($this->process($url, $data) === \FALSE) == false (line 169)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend35()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == false (line 128)
    // switch ($item) (line 134)
    // Case 'ping_url' == true (line 136)
    // if ($this->convert_ascii === \TRUE && \in_array($item, array('excerpt', 'title', 'blog_name'), \TRUE)) == true (line 151)
    // if (\count($ping_url) > 0) == true (line 165)
    // if ($this->process($url, $data) === \FALSE) == true (line 169)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend36()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == false (line 119)
    // if (!isset($tb_data[$item])) == true (line 128)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend37()
{
    $tb_data = m::mock('UntypedParameter_tb_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($tb_data)) == true (line 119)

    $actual = $this->cI_Trackback->send($tb_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReceive0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Trackback->receive();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReceive1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_POST[$val])) == false (line 195)
    // if ($val !== 'url' && \MB_ENABLED === \TRUE) == false (line 203)
    // if ($val === 'excerpt') == false (line 217)

    $actual = $this->cI_Trackback->receive();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReceive2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_POST[$val])) == false (line 195)
    // if ($val !== 'url' && \MB_ENABLED === \TRUE) == false (line 203)
    // if ($val === 'excerpt') == true (line 217)

    $actual = $this->cI_Trackback->receive();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReceive3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_POST[$val])) == false (line 195)
    // if ($val !== 'url' && \MB_ENABLED === \TRUE) == true (line 203)
    // if (\MB_ENABLED === \TRUE) == false (line 205)
    // if (\ICONV_ENABLED === \TRUE) == false (line 209)
    // if ($val === 'excerpt') == false (line 217)

    $actual = $this->cI_Trackback->receive();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReceive4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_POST[$val])) == false (line 195)
    // if ($val !== 'url' && \MB_ENABLED === \TRUE) == true (line 203)
    // if (\MB_ENABLED === \TRUE) == false (line 205)
    // if (\ICONV_ENABLED === \TRUE) == false (line 209)
    // if ($val === 'excerpt') == true (line 217)

    $actual = $this->cI_Trackback->receive();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReceive5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_POST[$val])) == false (line 195)
    // if ($val !== 'url' && \MB_ENABLED === \TRUE) == true (line 203)
    // if (\MB_ENABLED === \TRUE) == false (line 205)
    // if (\ICONV_ENABLED === \TRUE) == true (line 209)
    // if ($val === 'excerpt') == false (line 217)

    $actual = $this->cI_Trackback->receive();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReceive6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_POST[$val])) == false (line 195)
    // if ($val !== 'url' && \MB_ENABLED === \TRUE) == true (line 203)
    // if (\MB_ENABLED === \TRUE) == false (line 205)
    // if (\ICONV_ENABLED === \TRUE) == true (line 209)
    // if ($val === 'excerpt') == true (line 217)

    $actual = $this->cI_Trackback->receive();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReceive7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_POST[$val])) == false (line 195)
    // if ($val !== 'url' && \MB_ENABLED === \TRUE) == true (line 203)
    // if (\MB_ENABLED === \TRUE) == true (line 205)
    // if ($val === 'excerpt') == false (line 217)

    $actual = $this->cI_Trackback->receive();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReceive8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_POST[$val])) == false (line 195)
    // if ($val !== 'url' && \MB_ENABLED === \TRUE) == true (line 203)
    // if (\MB_ENABLED === \TRUE) == true (line 205)
    // if ($val === 'excerpt') == true (line 217)

    $actual = $this->cI_Trackback->receive();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReceive9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($_POST[$val])) == true (line 195)

    $actual = $this->cI_Trackback->receive();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend_error0()
{
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Trackback->send_error($message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend_success0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Trackback->send_success();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData0()
{
    $item = m::mock('UntypedParameter_item_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Trackback->data($item);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess0()
{
    $url = m::mock('UntypedParameter_url_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\fsockopen($target['host'], 80))) == false (line 290)
    // if ($id = $this->get_id($url)) == false (line 301)
    // while (!\feof($fp)) == false (line 317)
    // if (\stripos($this->response, '[37;41m0[39;49m') === \FALSE) == false (line 323)

    $actual = $this->cI_Trackback->process($url, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess1()
{
    $url = m::mock('UntypedParameter_url_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\fsockopen($target['host'], 80))) == false (line 290)
    // if ($id = $this->get_id($url)) == false (line 301)
    // while (!\feof($fp)) == false (line 317)
    // if (\stripos($this->response, '[37;41m0[39;49m') === \FALSE) == true (line 323)

    $actual = $this->cI_Trackback->process($url, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess2()
{
    $url = m::mock('UntypedParameter_url_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\fsockopen($target['host'], 80))) == false (line 290)
    // if ($id = $this->get_id($url)) == false (line 301)
    // while (!\feof($fp)) == true (line 317)
    // while (!\feof($fp)) == false (line 317)
    // if (\stripos($this->response, '[37;41m0[39;49m') === \FALSE) == false (line 323)

    $actual = $this->cI_Trackback->process($url, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess3()
{
    $url = m::mock('UntypedParameter_url_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\fsockopen($target['host'], 80))) == false (line 290)
    // if ($id = $this->get_id($url)) == false (line 301)
    // while (!\feof($fp)) == true (line 317)
    // while (!\feof($fp)) == false (line 317)
    // if (\stripos($this->response, '[37;41m0[39;49m') === \FALSE) == true (line 323)

    $actual = $this->cI_Trackback->process($url, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess4()
{
    $url = m::mock('UntypedParameter_url_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\fsockopen($target['host'], 80))) == false (line 290)
    // if ($id = $this->get_id($url)) == true (line 301)
    // while (!\feof($fp)) == false (line 317)
    // if (\stripos($this->response, '[37;41m0[39;49m') === \FALSE) == false (line 323)

    $actual = $this->cI_Trackback->process($url, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess5()
{
    $url = m::mock('UntypedParameter_url_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\fsockopen($target['host'], 80))) == false (line 290)
    // if ($id = $this->get_id($url)) == true (line 301)
    // while (!\feof($fp)) == false (line 317)
    // if (\stripos($this->response, '[37;41m0[39;49m') === \FALSE) == true (line 323)

    $actual = $this->cI_Trackback->process($url, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess6()
{
    $url = m::mock('UntypedParameter_url_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\fsockopen($target['host'], 80))) == false (line 290)
    // if ($id = $this->get_id($url)) == true (line 301)
    // while (!\feof($fp)) == true (line 317)
    // while (!\feof($fp)) == false (line 317)
    // if (\stripos($this->response, '[37;41m0[39;49m') === \FALSE) == false (line 323)

    $actual = $this->cI_Trackback->process($url, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess7()
{
    $url = m::mock('UntypedParameter_url_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\fsockopen($target['host'], 80))) == false (line 290)
    // if ($id = $this->get_id($url)) == true (line 301)
    // while (!\feof($fp)) == true (line 317)
    // while (!\feof($fp)) == false (line 317)
    // if (\stripos($this->response, '[37;41m0[39;49m') === \FALSE) == true (line 323)

    $actual = $this->cI_Trackback->process($url, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess8()
{
    $url = m::mock('UntypedParameter_url_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\fsockopen($target['host'], 80))) == true (line 290)

    $actual = $this->cI_Trackback->process($url, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtract_urls0()
{
    $urls = m::mock('UntypedParameter_urls_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Trackback->extract_urls($urls);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate_url0()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\stripos($url, 'http') !== 0) == false (line 373)

    $actual = $this->cI_Trackback->validate_url($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate_url1()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\stripos($url, 'http') !== 0) == true (line 373)

    $actual = $this->cI_Trackback->validate_url($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_id0()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($url, '?') !== \FALSE) == false (line 391)
    // if (!\is_numeric($tb_id)) == false (line 411)

    $actual = $this->cI_Trackback->get_id($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_id1()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($url, '?') !== \FALSE) == false (line 391)
    // if (!\is_numeric($tb_id)) == true (line 411)

    $actual = $this->cI_Trackback->get_id($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_id2()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($url, '?') !== \FALSE) == true (line 391)
    // if (!\is_numeric($tb_end)) == false (line 396)

    $actual = $this->cI_Trackback->get_id($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_id3()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($url, '?') !== \FALSE) == true (line 391)
    // if (!\is_numeric($tb_end)) == true (line 396)

    $actual = $this->cI_Trackback->get_id($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConvert_xml0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Trackback->convert_xml($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLimit_characters0()
{
    $str = m::mock('UntypedParameter_str_');
    $n = m::mock('UntypedParameter_n_');
    $end_char = m::mock('UntypedParameter_end_char_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($str) < $n) == false (line 455)
    // if (\strlen($str) <= $n) == false (line 462)

    $actual = $this->cI_Trackback->limit_characters($str, $n, $end_char);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLimit_characters1()
{
    $str = m::mock('UntypedParameter_str_');
    $n = m::mock('UntypedParameter_n_');
    $end_char = m::mock('UntypedParameter_end_char_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($str) < $n) == false (line 455)
    // if (\strlen($str) <= $n) == false (line 462)
    // if (\strlen($out) >= $n) == false (line 471)

    $actual = $this->cI_Trackback->limit_characters($str, $n, $end_char);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLimit_characters2()
{
    $str = m::mock('UntypedParameter_str_');
    $n = m::mock('UntypedParameter_n_');
    $end_char = m::mock('UntypedParameter_end_char_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($str) < $n) == false (line 455)
    // if (\strlen($str) <= $n) == false (line 462)
    // if (\strlen($out) >= $n) == true (line 471)

    $actual = $this->cI_Trackback->limit_characters($str, $n, $end_char);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLimit_characters3()
{
    $str = m::mock('UntypedParameter_str_');
    $n = m::mock('UntypedParameter_n_');
    $end_char = m::mock('UntypedParameter_end_char_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($str) < $n) == false (line 455)
    // if (\strlen($str) <= $n) == true (line 462)

    $actual = $this->cI_Trackback->limit_characters($str, $n, $end_char);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLimit_characters4()
{
    $str = m::mock('UntypedParameter_str_');
    $n = m::mock('UntypedParameter_n_');
    $end_char = m::mock('UntypedParameter_end_char_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($str) < $n) == true (line 455)

    $actual = $this->cI_Trackback->limit_characters($str, $n, $end_char);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConvert_ascii0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 495)

    $actual = $this->cI_Trackback->convert_ascii($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConvert_ascii1()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 495)
    // if ($ordinal < 128) == false (line 499)
    // if (\count($temp) === 0) == false (line 505)
    // if (\count($temp) === $count) == false (line 512)
    // for (...) == false (line 495)

    $actual = $this->cI_Trackback->convert_ascii($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConvert_ascii2()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 495)
    // if ($ordinal < 128) == false (line 499)
    // if (\count($temp) === 0) == false (line 505)
    // if (\count($temp) === $count) == true (line 512)
    // for (...) == false (line 495)

    $actual = $this->cI_Trackback->convert_ascii($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConvert_ascii3()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 495)
    // if ($ordinal < 128) == false (line 499)
    // if (\count($temp) === 0) == true (line 505)
    // if (\count($temp) === $count) == false (line 512)
    // for (...) == false (line 495)

    $actual = $this->cI_Trackback->convert_ascii($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConvert_ascii4()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 495)
    // if ($ordinal < 128) == false (line 499)
    // if (\count($temp) === 0) == true (line 505)
    // if (\count($temp) === $count) == true (line 512)
    // for (...) == false (line 495)

    $actual = $this->cI_Trackback->convert_ascii($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConvert_ascii5()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 495)
    // if ($ordinal < 128) == true (line 499)
    // for (...) == false (line 495)

    $actual = $this->cI_Trackback->convert_ascii($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_error0()
{
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Trackback->set_error($msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay_errors0()
{
    $open = m::mock('UntypedParameter_open_');
    $close = m::mock('UntypedParameter_close_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Trackback->display_errors($open, $close);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
