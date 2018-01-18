<?php

namespace tests;

use Mockery as m;
use RSSCache;

class RSSCacheTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_base = null;
/**
* @var mixed
*/
protected $_age = null;
/**
* @var \RSSCache
*/
protected $rSSCache;

public function setUp()
{
    parent::setUp();

    $this->_base = null;
    $this->_age = null;
    $this->rSSCache = new \RSSCache($this->_base, $this->_age);
}

public function testRSSCache0()
{
    $base = m::mock('UntypedParameter_base_');
    $age = m::mock('UntypedParameter_age_');

    // TODO: Your mock expectations here

    $actual = $this->rSSCache->RSSCache($base, $age);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet0()
{
    $url = m::mock('UntypedParameter_url_');
    $rss = m::mock('UntypedParameter_rss_');

    // TODO: Your mock expectations here

    $actual = $this->rSSCache->set($url, $rss);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($rss = \get_transient($cache_option))) == false (line 765)

    $actual = $this->rSSCache->get($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($rss = \get_transient($cache_option))) == true (line 765)

    $actual = $this->rSSCache->get($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_cache0()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_transient($cache_option)) == false (line 786)

    $actual = $this->rSSCache->check_cache($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_cache1()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_transient($cache_option)) == true (line 786)

    $actual = $this->rSSCache->check_cache($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSerialize0()
{
    $rss = m::mock('UntypedParameter_rss_');

    // TODO: Your mock expectations here

    $actual = $this->rSSCache->serialize($rss);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnserialize0()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    $actual = $this->rSSCache->unserialize($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFile_name0()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    $actual = $this->rSSCache->file_name($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError0()
{
    $errormsg = m::mock('UntypedParameter_errormsg_');
    $lvl = m::mock('UntypedParameter_lvl_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($php_errormsg)) == false (line 825)
    // if (\MAGPIE_DEBUG) == false (line 829)

    $actual = $this->rSSCache->error($errormsg, $lvl);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError1()
{
    $errormsg = m::mock('UntypedParameter_errormsg_');
    $lvl = m::mock('UntypedParameter_lvl_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($php_errormsg)) == false (line 825)
    // if (\MAGPIE_DEBUG) == true (line 829)

    $actual = $this->rSSCache->error($errormsg, $lvl);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError2()
{
    $errormsg = m::mock('UntypedParameter_errormsg_');
    $lvl = m::mock('UntypedParameter_lvl_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($php_errormsg)) == true (line 825)
    // if (\MAGPIE_DEBUG) == false (line 829)

    $actual = $this->rSSCache->error($errormsg, $lvl);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError3()
{
    $errormsg = m::mock('UntypedParameter_errormsg_');
    $lvl = m::mock('UntypedParameter_lvl_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($php_errormsg)) == true (line 825)
    // if (\MAGPIE_DEBUG) == true (line 829)

    $actual = $this->rSSCache->error($errormsg, $lvl);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDebug0()
{
    $debugmsg = m::mock('UntypedParameter_debugmsg_');
    $lvl = m::mock('UntypedParameter_lvl_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\MAGPIE_DEBUG) == false (line 837)

    $actual = $this->rSSCache->debug($debugmsg, $lvl);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDebug1()
{
    $debugmsg = m::mock('UntypedParameter_debugmsg_');
    $lvl = m::mock('UntypedParameter_lvl_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\MAGPIE_DEBUG) == true (line 837)

    $actual = $this->rSSCache->debug($debugmsg, $lvl);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
