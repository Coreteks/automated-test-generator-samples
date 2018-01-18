<?php

namespace tests\Illuminate\Contracts\Filesystem;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Mockery as m;

class FileNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Contracts\Filesystem\FileNotFoundException
*/
protected $fileNotFoundException;

public function setUp()
{
    parent::setUp();

    $this->fileNotFoundException = new \Illuminate\Contracts\Filesystem\FileNotFoundException();
}
}
