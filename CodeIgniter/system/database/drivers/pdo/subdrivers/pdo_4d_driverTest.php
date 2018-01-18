<?php

namespace tests;

use CI_DB_pdo_4d_driver;
use Mockery as m;

class CI_DB_pdo_4d_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_DB_pdo_4d_driver
*/
protected $cI_DB_pdo_4d_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_DB_pdo_4d_driver = new \CI_DB_pdo_4d_driver($this->_params);
}
}
