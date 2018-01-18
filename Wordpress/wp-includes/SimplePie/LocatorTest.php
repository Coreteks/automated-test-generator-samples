<?php

namespace tests;

use Mockery as m;
use SimplePie_File;
use SimplePie_Locator;

class SimplePie_LocatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_file;
/**
* @var mixed
*/
protected $_timeout = null;
/**
* @var mixed
*/
protected $_useragent = null;
/**
* @var mixed
*/
protected $_max_checked_feeds = null;
/**
* @var \SimplePie_Locator
*/
protected $simplePie_Locator;

public function setUp()
{
    parent::setUp();

    $this->_file = m::mock(\SimplePie_File::class);
    $this->_timeout = null;
    $this->_useragent = null;
    $this->_max_checked_feeds = null;
    $this->simplePie_Locator = new \SimplePie_Locator($this->_file, $this->_timeout, $this->_useragent, $this->_max_checked_feeds);
}

public function testSet_registry0()
{
    $registry = m::mock(\SimplePie_Registry::class);

    // TODO: Your mock expectations here

    $actual = $this->simplePie_Locator->set_registry($registry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind0()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == false (line 101)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == false (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == false (line 120)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind1()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == false (line 101)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == false (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == true (line 120)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_EXTENSION && ($working = $this->extension($this->local))) == false (line 122)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_BODY && ($working = $this->body($this->local))) == false (line 127)
    // if ($type & \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION && ($working = $this->extension($this->elsewhere))) == false (line 132)
    // if ($type & \SIMPLEPIE_LOCATOR_REMOTE_BODY && ($working = $this->body($this->elsewhere))) == false (line 137)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind2()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == false (line 101)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == false (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == true (line 120)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_EXTENSION && ($working = $this->extension($this->local))) == false (line 122)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_BODY && ($working = $this->body($this->local))) == false (line 127)
    // if ($type & \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION && ($working = $this->extension($this->elsewhere))) == false (line 132)
    // if ($type & \SIMPLEPIE_LOCATOR_REMOTE_BODY && ($working = $this->body($this->elsewhere))) == true (line 137)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind3()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == false (line 101)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == false (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == true (line 120)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_EXTENSION && ($working = $this->extension($this->local))) == false (line 122)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_BODY && ($working = $this->body($this->local))) == false (line 127)
    // if ($type & \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION && ($working = $this->extension($this->elsewhere))) == true (line 132)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind4()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == false (line 101)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == false (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == true (line 120)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_EXTENSION && ($working = $this->extension($this->local))) == false (line 122)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_BODY && ($working = $this->body($this->local))) == true (line 127)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind5()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == false (line 101)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == false (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == true (line 120)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_EXTENSION && ($working = $this->extension($this->local))) == true (line 122)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind6()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == false (line 101)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == false (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == true (line 115)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind7()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == false (line 101)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == true (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == false (line 120)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind8()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == false (line 101)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == true (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == true (line 120)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_EXTENSION && ($working = $this->extension($this->local))) == false (line 122)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_BODY && ($working = $this->body($this->local))) == false (line 127)
    // if ($type & \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION && ($working = $this->extension($this->elsewhere))) == false (line 132)
    // if ($type & \SIMPLEPIE_LOCATOR_REMOTE_BODY && ($working = $this->body($this->elsewhere))) == false (line 137)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind9()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == false (line 101)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == true (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == true (line 120)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_EXTENSION && ($working = $this->extension($this->local))) == false (line 122)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_BODY && ($working = $this->body($this->local))) == false (line 127)
    // if ($type & \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION && ($working = $this->extension($this->elsewhere))) == false (line 132)
    // if ($type & \SIMPLEPIE_LOCATOR_REMOTE_BODY && ($working = $this->body($this->elsewhere))) == true (line 137)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind10()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == false (line 101)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == true (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == true (line 120)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_EXTENSION && ($working = $this->extension($this->local))) == false (line 122)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_BODY && ($working = $this->body($this->local))) == false (line 127)
    // if ($type & \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION && ($working = $this->extension($this->elsewhere))) == true (line 132)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind11()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == false (line 101)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == true (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == true (line 120)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_EXTENSION && ($working = $this->extension($this->local))) == false (line 122)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_BODY && ($working = $this->body($this->local))) == true (line 127)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind12()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == false (line 101)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == true (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == true (line 120)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_EXTENSION && ($working = $this->extension($this->local))) == true (line 122)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind13()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == false (line 101)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == true (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == true (line 115)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind14()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == true (line 101)
    // if ($sniffer->get_type() !== 'text/html') == false (line 104)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == false (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == false (line 120)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind15()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == true (line 101)
    // if ($sniffer->get_type() !== 'text/html') == false (line 104)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == false (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == true (line 120)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_EXTENSION && ($working = $this->extension($this->local))) == false (line 122)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_BODY && ($working = $this->body($this->local))) == false (line 127)
    // if ($type & \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION && ($working = $this->extension($this->elsewhere))) == false (line 132)
    // if ($type & \SIMPLEPIE_LOCATOR_REMOTE_BODY && ($working = $this->body($this->elsewhere))) == false (line 137)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind16()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == true (line 101)
    // if ($sniffer->get_type() !== 'text/html') == false (line 104)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == false (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == true (line 120)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_EXTENSION && ($working = $this->extension($this->local))) == false (line 122)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_BODY && ($working = $this->body($this->local))) == false (line 127)
    // if ($type & \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION && ($working = $this->extension($this->elsewhere))) == false (line 132)
    // if ($type & \SIMPLEPIE_LOCATOR_REMOTE_BODY && ($working = $this->body($this->elsewhere))) == true (line 137)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind17()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == true (line 101)
    // if ($sniffer->get_type() !== 'text/html') == false (line 104)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == false (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == true (line 120)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_EXTENSION && ($working = $this->extension($this->local))) == false (line 122)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_BODY && ($working = $this->body($this->local))) == false (line 127)
    // if ($type & \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION && ($working = $this->extension($this->elsewhere))) == true (line 132)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind18()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == true (line 101)
    // if ($sniffer->get_type() !== 'text/html') == false (line 104)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == false (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == true (line 120)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_EXTENSION && ($working = $this->extension($this->local))) == false (line 122)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_BODY && ($working = $this->body($this->local))) == true (line 127)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind19()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == true (line 101)
    // if ($sniffer->get_type() !== 'text/html') == false (line 104)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == false (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == true (line 120)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_EXTENSION && ($working = $this->extension($this->local))) == true (line 122)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind20()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == true (line 101)
    // if ($sniffer->get_type() !== 'text/html') == false (line 104)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == false (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == true (line 115)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind21()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == true (line 101)
    // if ($sniffer->get_type() !== 'text/html') == false (line 104)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == true (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == false (line 120)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind22()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == true (line 101)
    // if ($sniffer->get_type() !== 'text/html') == false (line 104)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == true (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == true (line 120)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_EXTENSION && ($working = $this->extension($this->local))) == false (line 122)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_BODY && ($working = $this->body($this->local))) == false (line 127)
    // if ($type & \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION && ($working = $this->extension($this->elsewhere))) == false (line 132)
    // if ($type & \SIMPLEPIE_LOCATOR_REMOTE_BODY && ($working = $this->body($this->elsewhere))) == false (line 137)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind23()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == true (line 101)
    // if ($sniffer->get_type() !== 'text/html') == false (line 104)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == true (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == true (line 120)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_EXTENSION && ($working = $this->extension($this->local))) == false (line 122)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_BODY && ($working = $this->body($this->local))) == false (line 127)
    // if ($type & \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION && ($working = $this->extension($this->elsewhere))) == false (line 132)
    // if ($type & \SIMPLEPIE_LOCATOR_REMOTE_BODY && ($working = $this->body($this->elsewhere))) == true (line 137)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind24()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == true (line 101)
    // if ($sniffer->get_type() !== 'text/html') == false (line 104)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == true (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == true (line 120)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_EXTENSION && ($working = $this->extension($this->local))) == false (line 122)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_BODY && ($working = $this->body($this->local))) == false (line 127)
    // if ($type & \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION && ($working = $this->extension($this->elsewhere))) == true (line 132)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind25()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == true (line 101)
    // if ($sniffer->get_type() !== 'text/html') == false (line 104)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == true (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == true (line 120)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_EXTENSION && ($working = $this->extension($this->local))) == false (line 122)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_BODY && ($working = $this->body($this->local))) == true (line 127)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind26()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == true (line 101)
    // if ($sniffer->get_type() !== 'text/html') == false (line 104)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == true (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == false (line 115)
    // if ($type & (\SIMPLEPIE_LOCATOR_LOCAL_EXTENSION | \SIMPLEPIE_LOCATOR_LOCAL_BODY | \SIMPLEPIE_LOCATOR_REMOTE_EXTENSION | \SIMPLEPIE_LOCATOR_REMOTE_BODY) && $this->get_links()) == true (line 120)
    // if ($type & \SIMPLEPIE_LOCATOR_LOCAL_EXTENSION && ($working = $this->extension($this->local))) == true (line 122)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind27()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == true (line 101)
    // if ($sniffer->get_type() !== 'text/html') == false (line 104)
    // if ($type & ~\SIMPLEPIE_LOCATOR_NONE) == true (line 110)
    // if ($type & \SIMPLEPIE_LOCATOR_AUTODISCOVERY && ($working = $this->autodiscovery())) == true (line 115)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind28()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == false (line 96)
    // if ($this->file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == true (line 101)
    // if ($sniffer->get_type() !== 'text/html') == true (line 104)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind29()
{
    $type = m::mock('UntypedParameter_type_');
    $working = m::mock('UntypedParameter_working_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_feed($this->file)) == true (line 96)

    $actual = $this->simplePie_Locator->find($type, $working);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_feed0()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == false (line 147)
    // if ($file->method & \SIMPLEPIE_FILE_SOURCE_LOCAL) == false (line 160)

    $actual = $this->simplePie_Locator->is_feed($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_feed1()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == false (line 147)
    // if ($file->method & \SIMPLEPIE_FILE_SOURCE_LOCAL) == true (line 160)

    $actual = $this->simplePie_Locator->is_feed($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_feed2()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == true (line 147)
    // if (\in_array($sniffed, array('application/rss+xml', 'application/rdf+xml', 'text/rdf', 'application/atom+xml', 'text/xml', 'application/xml'))) == false (line 151)

    $actual = $this->simplePie_Locator->is_feed($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_feed3()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($file->method & \SIMPLEPIE_FILE_SOURCE_REMOTE) == true (line 147)
    // if (\in_array($sniffed, array('application/rss+xml', 'application/rdf+xml', 'text/rdf', 'application/atom+xml', 'text/xml', 'application/xml'))) == true (line 151)

    $actual = $this->simplePie_Locator->is_feed($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_base0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 172)

    $actual = $this->simplePie_Locator->get_base();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_base1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 172)
    // if ($element->hasAttribute('href')) == false (line 181)

    $actual = $this->simplePie_Locator->get_base();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_base2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 172)
    // if ($element->hasAttribute('href')) == true (line 181)
    // if ($base === \false) == false (line 184)

    $actual = $this->simplePie_Locator->get_base();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_base3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 172)
    // if ($element->hasAttribute('href')) == true (line 181)
    // if ($base === \false) == true (line 184)

    $actual = $this->simplePie_Locator->get_base();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \SimplePie_Exception
 */
public function testGet_base4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == true (line 172)
    // throw new \SimplePie_Exception('DOMDocument not found, unable to use locator') -> exception (line 174)

    $actual = $this->simplePie_Locator->get_base();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAutodiscovery0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($feeds)) == false (line 203)

    $actual = $this->simplePie_Locator->autodiscovery();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAutodiscovery1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($feeds)) == true (line 203)

    $actual = $this->simplePie_Locator->autodiscovery();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_links0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 266)
    // if (!empty($this->local) || !empty($this->elsewhere)) == false (line 308)

    $actual = $this->simplePie_Locator->get_links();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_links1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 266)
    // if (!empty($this->local) || !empty($this->elsewhere)) == true (line 308)

    $actual = $this->simplePie_Locator->get_links();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_links2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 266)
    // if ($link->hasAttribute('href')) == false (line 274)
    // if (!empty($this->local) || !empty($this->elsewhere)) == false (line 308)

    $actual = $this->simplePie_Locator->get_links();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_links3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 266)
    // if ($link->hasAttribute('href')) == false (line 274)
    // if (!empty($this->local) || !empty($this->elsewhere)) == true (line 308)

    $actual = $this->simplePie_Locator->get_links();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_links4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 266)
    // if ($link->hasAttribute('href')) == true (line 274)
    // if ($parsed['scheme'] === '' || \preg_match('/^(http(s)|feed)?$/i', $parsed['scheme'])) == false (line 278)
    // if (!empty($this->local) || !empty($this->elsewhere)) == false (line 308)

    $actual = $this->simplePie_Locator->get_links();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_links5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 266)
    // if ($link->hasAttribute('href')) == true (line 274)
    // if ($parsed['scheme'] === '' || \preg_match('/^(http(s)|feed)?$/i', $parsed['scheme'])) == false (line 278)
    // if (!empty($this->local) || !empty($this->elsewhere)) == true (line 308)

    $actual = $this->simplePie_Locator->get_links();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_links6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 266)
    // if ($link->hasAttribute('href')) == true (line 274)
    // if ($parsed['scheme'] === '' || \preg_match('/^(http(s)|feed)?$/i', $parsed['scheme'])) == true (line 278)
    // if (\method_exists($link, 'getLineNo') && $this->base_location < $link->getLineNo()) == false (line 280)
    // if ($href === \false) == false (line 288)
    // if ($parsed['authority'] === '' || $parsed['authority'] === $current['authority']) == false (line 295)
    // if (!empty($this->local) || !empty($this->elsewhere)) == false (line 308)

    $actual = $this->simplePie_Locator->get_links();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_links7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 266)
    // if ($link->hasAttribute('href')) == true (line 274)
    // if ($parsed['scheme'] === '' || \preg_match('/^(http(s)|feed)?$/i', $parsed['scheme'])) == true (line 278)
    // if (\method_exists($link, 'getLineNo') && $this->base_location < $link->getLineNo()) == false (line 280)
    // if ($href === \false) == false (line 288)
    // if ($parsed['authority'] === '' || $parsed['authority'] === $current['authority']) == false (line 295)
    // if (!empty($this->local) || !empty($this->elsewhere)) == true (line 308)

    $actual = $this->simplePie_Locator->get_links();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_links8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 266)
    // if ($link->hasAttribute('href')) == true (line 274)
    // if ($parsed['scheme'] === '' || \preg_match('/^(http(s)|feed)?$/i', $parsed['scheme'])) == true (line 278)
    // if (\method_exists($link, 'getLineNo') && $this->base_location < $link->getLineNo()) == false (line 280)
    // if ($href === \false) == false (line 288)
    // if ($parsed['authority'] === '' || $parsed['authority'] === $current['authority']) == true (line 295)
    // if (!empty($this->local) || !empty($this->elsewhere)) == false (line 308)

    $actual = $this->simplePie_Locator->get_links();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_links9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 266)
    // if ($link->hasAttribute('href')) == true (line 274)
    // if ($parsed['scheme'] === '' || \preg_match('/^(http(s)|feed)?$/i', $parsed['scheme'])) == true (line 278)
    // if (\method_exists($link, 'getLineNo') && $this->base_location < $link->getLineNo()) == false (line 280)
    // if ($href === \false) == false (line 288)
    // if ($parsed['authority'] === '' || $parsed['authority'] === $current['authority']) == true (line 295)
    // if (!empty($this->local) || !empty($this->elsewhere)) == true (line 308)

    $actual = $this->simplePie_Locator->get_links();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_links10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 266)
    // if ($link->hasAttribute('href')) == true (line 274)
    // if ($parsed['scheme'] === '' || \preg_match('/^(http(s)|feed)?$/i', $parsed['scheme'])) == true (line 278)
    // if (\method_exists($link, 'getLineNo') && $this->base_location < $link->getLineNo()) == false (line 280)
    // if ($href === \false) == true (line 288)
    // if (!empty($this->local) || !empty($this->elsewhere)) == false (line 308)

    $actual = $this->simplePie_Locator->get_links();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_links11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 266)
    // if ($link->hasAttribute('href')) == true (line 274)
    // if ($parsed['scheme'] === '' || \preg_match('/^(http(s)|feed)?$/i', $parsed['scheme'])) == true (line 278)
    // if (\method_exists($link, 'getLineNo') && $this->base_location < $link->getLineNo()) == false (line 280)
    // if ($href === \false) == true (line 288)
    // if (!empty($this->local) || !empty($this->elsewhere)) == true (line 308)

    $actual = $this->simplePie_Locator->get_links();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_links12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 266)
    // if ($link->hasAttribute('href')) == true (line 274)
    // if ($parsed['scheme'] === '' || \preg_match('/^(http(s)|feed)?$/i', $parsed['scheme'])) == true (line 278)
    // if (\method_exists($link, 'getLineNo') && $this->base_location < $link->getLineNo()) == true (line 280)
    // if ($href === \false) == false (line 288)
    // if ($parsed['authority'] === '' || $parsed['authority'] === $current['authority']) == false (line 295)
    // if (!empty($this->local) || !empty($this->elsewhere)) == false (line 308)

    $actual = $this->simplePie_Locator->get_links();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_links13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 266)
    // if ($link->hasAttribute('href')) == true (line 274)
    // if ($parsed['scheme'] === '' || \preg_match('/^(http(s)|feed)?$/i', $parsed['scheme'])) == true (line 278)
    // if (\method_exists($link, 'getLineNo') && $this->base_location < $link->getLineNo()) == true (line 280)
    // if ($href === \false) == false (line 288)
    // if ($parsed['authority'] === '' || $parsed['authority'] === $current['authority']) == false (line 295)
    // if (!empty($this->local) || !empty($this->elsewhere)) == true (line 308)

    $actual = $this->simplePie_Locator->get_links();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_links14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 266)
    // if ($link->hasAttribute('href')) == true (line 274)
    // if ($parsed['scheme'] === '' || \preg_match('/^(http(s)|feed)?$/i', $parsed['scheme'])) == true (line 278)
    // if (\method_exists($link, 'getLineNo') && $this->base_location < $link->getLineNo()) == true (line 280)
    // if ($href === \false) == false (line 288)
    // if ($parsed['authority'] === '' || $parsed['authority'] === $current['authority']) == true (line 295)
    // if (!empty($this->local) || !empty($this->elsewhere)) == false (line 308)

    $actual = $this->simplePie_Locator->get_links();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_links15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 266)
    // if ($link->hasAttribute('href')) == true (line 274)
    // if ($parsed['scheme'] === '' || \preg_match('/^(http(s)|feed)?$/i', $parsed['scheme'])) == true (line 278)
    // if (\method_exists($link, 'getLineNo') && $this->base_location < $link->getLineNo()) == true (line 280)
    // if ($href === \false) == false (line 288)
    // if ($parsed['authority'] === '' || $parsed['authority'] === $current['authority']) == true (line 295)
    // if (!empty($this->local) || !empty($this->elsewhere)) == true (line 308)

    $actual = $this->simplePie_Locator->get_links();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_links16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 266)
    // if ($link->hasAttribute('href')) == true (line 274)
    // if ($parsed['scheme'] === '' || \preg_match('/^(http(s)|feed)?$/i', $parsed['scheme'])) == true (line 278)
    // if (\method_exists($link, 'getLineNo') && $this->base_location < $link->getLineNo()) == true (line 280)
    // if ($href === \false) == true (line 288)
    // if (!empty($this->local) || !empty($this->elsewhere)) == false (line 308)

    $actual = $this->simplePie_Locator->get_links();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_links17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == false (line 266)
    // if ($link->hasAttribute('href')) == true (line 274)
    // if ($parsed['scheme'] === '' || \preg_match('/^(http(s)|feed)?$/i', $parsed['scheme'])) == true (line 278)
    // if (\method_exists($link, 'getLineNo') && $this->base_location < $link->getLineNo()) == true (line 280)
    // if ($href === \false) == true (line 288)
    // if (!empty($this->local) || !empty($this->elsewhere)) == true (line 308)

    $actual = $this->simplePie_Locator->get_links();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \SimplePie_Exception
 */
public function testGet_links18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->dom === \null) == true (line 266)
    // throw new \SimplePie_Exception('DOMDocument not found, unable to use locator') -> exception (line 268)

    $actual = $this->simplePie_Locator->get_links();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtension0()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    $actual = $this->simplePie_Locator->extension($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtension1()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->checked_feeds === $this->max_checked_feeds) == false (line 319)
    // if (\in_array(\strtolower(\strrchr($value, '.')), array('.rss', '.rdf', '.atom', '.xml'))) == false (line 323)

    $actual = $this->simplePie_Locator->extension($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtension2()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->checked_feeds === $this->max_checked_feeds) == false (line 319)
    // if (\in_array(\strtolower(\strrchr($value, '.')), array('.rss', '.rdf', '.atom', '.xml'))) == true (line 323)
    // if ($feed->success && ($feed->method & \SIMPLEPIE_FILE_SOURCE_REMOTE === 0 || ($feed->status_code === 200 || $feed->status_code > 206 && $feed->status_code < 300)) && $this->is_feed($feed)) == false (line 331)

    $actual = $this->simplePie_Locator->extension($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtension3()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->checked_feeds === $this->max_checked_feeds) == false (line 319)
    // if (\in_array(\strtolower(\strrchr($value, '.')), array('.rss', '.rdf', '.atom', '.xml'))) == true (line 323)
    // if ($feed->success && ($feed->method & \SIMPLEPIE_FILE_SOURCE_REMOTE === 0 || ($feed->status_code === 200 || $feed->status_code > 206 && $feed->status_code < 300)) && $this->is_feed($feed)) == true (line 331)

    $actual = $this->simplePie_Locator->extension($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtension4()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->checked_feeds === $this->max_checked_feeds) == true (line 319)

    $actual = $this->simplePie_Locator->extension($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBody0()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    $actual = $this->simplePie_Locator->body($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBody1()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->checked_feeds === $this->max_checked_feeds) == false (line 348)
    // if (\preg_match('/(rss|rdf|atom|xml)/i', $value)) == false (line 352)

    $actual = $this->simplePie_Locator->body($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBody2()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->checked_feeds === $this->max_checked_feeds) == false (line 348)
    // if (\preg_match('/(rss|rdf|atom|xml)/i', $value)) == true (line 352)
    // if ($feed->success && ($feed->method & \SIMPLEPIE_FILE_SOURCE_REMOTE === 0 || ($feed->status_code === 200 || $feed->status_code > 206 && $feed->status_code < 300)) && $this->is_feed($feed)) == false (line 359)

    $actual = $this->simplePie_Locator->body($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBody3()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->checked_feeds === $this->max_checked_feeds) == false (line 348)
    // if (\preg_match('/(rss|rdf|atom|xml)/i', $value)) == true (line 352)
    // if ($feed->success && ($feed->method & \SIMPLEPIE_FILE_SOURCE_REMOTE === 0 || ($feed->status_code === 200 || $feed->status_code > 206 && $feed->status_code < 300)) && $this->is_feed($feed)) == true (line 359)

    $actual = $this->simplePie_Locator->body($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBody4()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->checked_feeds === $this->max_checked_feeds) == true (line 348)

    $actual = $this->simplePie_Locator->body($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
