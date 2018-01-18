<?php

namespace tests;

use CI_DB_pdo_ibm_forge;
use Mockery as m;

class CI_DB_pdo_ibm_forgeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_DB_pdo_ibm_forge
*/
protected $cI_DB_pdo_ibm_forge;

public function setUp()
{
    parent::setUp();

    $this->cI_DB_pdo_ibm_forge = new \CI_DB_pdo_ibm_forge();
}
}
