<?php

namespace tests;

use CI_DB_pdo_pgsql_forge;
use Mockery as m;

class CI_DB_pdo_pgsql_forgeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_db = null;
/**
* @var \CI_DB_pdo_pgsql_forge
*/
protected $cI_DB_pdo_pgsql_forge;

public function setUp()
{
    parent::setUp();

    $this->_db = null;
    $this->cI_DB_pdo_pgsql_forge = new \CI_DB_pdo_pgsql_forge($this->_db);
}
}
