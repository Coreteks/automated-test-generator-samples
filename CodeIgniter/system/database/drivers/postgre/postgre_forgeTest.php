<?php

namespace tests;

use CI_DB_postgre_forge;
use Mockery as m;

class CI_DB_postgre_forgeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_db = null;
/**
* @var \CI_DB_postgre_forge
*/
protected $cI_DB_postgre_forge;

public function setUp()
{
    parent::setUp();

    $this->_db = null;
    $this->cI_DB_postgre_forge = new \CI_DB_postgre_forge($this->_db);
}
}
