<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Lang;
use Mockery as m;

class LangTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Lang
*/
protected $lang;

public function setUp()
{
    parent::setUp();

    $this->lang = new \Illuminate\Support\Facades\Lang();
}
}
