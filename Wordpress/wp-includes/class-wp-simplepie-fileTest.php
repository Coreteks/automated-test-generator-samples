<?php

namespace tests;

use Mockery as m;
use WP_SimplePie_File;

class WP_SimplePie_FileTest extends \PHPUnit_Framework_TestCase
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
* @var \WP_SimplePie_File
*/
protected $wP_SimplePie_File;

public function setUp()
{
    parent::setUp();

    $this->_url = null;
    $this->_timeout = null;
    $this->_redirects = null;
    $this->_headers = null;
    $this->_useragent = null;
    $this->_force_fsockopen = null;
    $this->wP_SimplePie_File = new \WP_SimplePie_File($this->_url, $this->_timeout, $this->_redirects, $this->_headers, $this->_useragent, $this->_force_fsockopen);
}
}
