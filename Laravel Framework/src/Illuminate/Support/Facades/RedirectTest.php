<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Redirect;
use Mockery as m;

class RedirectTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Redirect
*/
protected $redirect;

public function setUp()
{
    parent::setUp();

    $this->redirect = new \Illuminate\Support\Facades\Redirect();
}
}
