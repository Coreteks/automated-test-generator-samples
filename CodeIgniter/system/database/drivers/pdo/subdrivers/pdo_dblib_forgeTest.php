<?php

namespace tests;

use CI_DB_pdo_dblib_forge;
use Mockery as m;

class CI_DB_pdo_dblib_forgeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_DB_pdo_dblib_forge
*/
protected $cI_DB_pdo_dblib_forge;

public function setUp()
{
    parent::setUp();

    $this->cI_DB_pdo_dblib_forge = new \CI_DB_pdo_dblib_forge();
}
}
