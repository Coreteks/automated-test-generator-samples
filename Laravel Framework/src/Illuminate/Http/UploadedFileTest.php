<?php

namespace tests\Illuminate\Http;

use Illuminate\Http\UploadedFile;
use Mockery as m;

class UploadedFileTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Http\UploadedFile
*/
protected $uploadedFile;

public function setUp()
{
    parent::setUp();

    $this->uploadedFile = new \Illuminate\Http\UploadedFile();
}

public function testFake0()
{
    // TODO: Your mock expectations here

    $actual = $this->uploadedFile->fake();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStore0()
{
    $path = m::mock('UntypedParameter_path_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->uploadedFile->store($path, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStorePublicly0()
{
    $path = m::mock('UntypedParameter_path_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->uploadedFile->storePublicly($path, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStorePubliclyAs0()
{
    $path = m::mock('UntypedParameter_path_');
    $name = m::mock('UntypedParameter_name_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->uploadedFile->storePubliclyAs($path, $name, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStoreAs0()
{
    $path = m::mock('UntypedParameter_path_');
    $name = m::mock('UntypedParameter_name_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->uploadedFile->storeAs($path, $name, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateFromBase0()
{
    $file = m::mock(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
    $test = m::mock('UntypedParameter_test_');

    // TODO: Your mock expectations here

    $actual = $this->uploadedFile->createFromBase($file, $test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
