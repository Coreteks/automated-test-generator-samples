<?php

namespace tests\Illuminate\Http;

use Illuminate\Http\File;
use Mockery as m;

class FileTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Http\File
*/
protected $file;

public function setUp()
{
    parent::setUp();

    $this->file = new \Illuminate\Http\File();
}
}
