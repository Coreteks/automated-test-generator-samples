<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\File;
use Mockery as m;

class FileTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\File
*/
protected $file;

public function setUp()
{
    parent::setUp();

    $this->file = new \Illuminate\Support\Facades\File();
}
}
