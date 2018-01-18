<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\View;
use Mockery as m;

class ViewTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\View
*/
protected $view;

public function setUp()
{
    parent::setUp();

    $this->view = new \Illuminate\Support\Facades\View();
}
}
