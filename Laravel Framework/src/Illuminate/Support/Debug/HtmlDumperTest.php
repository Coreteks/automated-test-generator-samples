<?php

namespace tests\Illuminate\Support\Debug;

use Illuminate\Support\Debug\HtmlDumper;
use Mockery as m;

class HtmlDumperTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Debug\HtmlDumper
*/
protected $htmlDumper;

public function setUp()
{
    parent::setUp();

    $this->htmlDumper = new \Illuminate\Support\Debug\HtmlDumper();
}
}
