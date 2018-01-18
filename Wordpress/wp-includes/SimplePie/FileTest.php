<?php

namespace tests;

use Mockery as m;
use SimplePie_File;

class SimplePie_FileTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_url = null;
/**
* @var mixed
*/
protected $_timeout = null;
/**
* @var mixed
*/
protected $_redirects = null;
/**
* @var mixed
*/
protected $_headers = null;
/**
* @var mixed
*/
protected $_useragent = null;
/**
* @var mixed
*/
protected $_force_fsockopen = null;
/**
* @var \SimplePie_File
*/
protected $simplePie_File;

public function setUp()
{
    parent::setUp();

    $this->_url = null;
    $this->_timeout = null;
    $this->_redirects = null;
    $this->_headers = null;
    $this->_useragent = null;
    $this->_force_fsockopen = null;
    $this->simplePie_File = new \SimplePie_File($this->_url, $this->_timeout, $this->_redirects, $this->_headers, $this->_useragent, $this->_force_fsockopen);
}
}
