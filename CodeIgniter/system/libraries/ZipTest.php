<?php

namespace tests;

use CI_Zip;
use Mockery as m;

class CI_ZipTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_Zip
*/
protected $cI_Zip;

public function setUp()
{
    parent::setUp();

    $this->cI_Zip = new \CI_Zip();
}

public function testAdd_dir0()
{
    $directory = m::mock('UntypedParameter_directory_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Zip->add_dir($directory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_dir1()
{
    $directory = m::mock('UntypedParameter_directory_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match('|.+/$|', $dir)) == false (line 142)

    $actual = $this->cI_Zip->add_dir($directory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_dir2()
{
    $directory = m::mock('UntypedParameter_directory_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match('|.+/$|', $dir)) == true (line 142)

    $actual = $this->cI_Zip->add_dir($directory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_data0()
{
    $filepath = m::mock('UntypedParameter_filepath_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($filepath)) == false (line 237)

    $actual = $this->cI_Zip->add_data($filepath, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_data1()
{
    $filepath = m::mock('UntypedParameter_filepath_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($filepath)) == true (line 237)

    $actual = $this->cI_Zip->add_data($filepath, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_data2()
{
    $filepath = m::mock('UntypedParameter_filepath_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($filepath)) == true (line 237)

    $actual = $this->cI_Zip->add_data($filepath, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_file0()
{
    $path = m::mock('UntypedParameter_path_');
    $archive_filepath = m::mock('UntypedParameter_archive_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\file_exists($path) && \FALSE !== ($data = \file_get_contents($path))) == false (line 316)

    $actual = $this->cI_Zip->read_file($path, $archive_filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_file1()
{
    $path = m::mock('UntypedParameter_path_');
    $archive_filepath = m::mock('UntypedParameter_archive_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\file_exists($path) && \FALSE !== ($data = \file_get_contents($path))) == true (line 316)
    // if (\is_string($archive_filepath)) == false (line 318)
    // if ($archive_filepath === \FALSE) == false (line 326)

    $actual = $this->cI_Zip->read_file($path, $archive_filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_file2()
{
    $path = m::mock('UntypedParameter_path_');
    $archive_filepath = m::mock('UntypedParameter_archive_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\file_exists($path) && \FALSE !== ($data = \file_get_contents($path))) == true (line 316)
    // if (\is_string($archive_filepath)) == false (line 318)
    // if ($archive_filepath === \FALSE) == true (line 326)

    $actual = $this->cI_Zip->read_file($path, $archive_filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_file3()
{
    $path = m::mock('UntypedParameter_path_');
    $archive_filepath = m::mock('UntypedParameter_archive_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\file_exists($path) && \FALSE !== ($data = \file_get_contents($path))) == true (line 316)
    // if (\is_string($archive_filepath)) == true (line 318)

    $actual = $this->cI_Zip->read_file($path, $archive_filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_dir0()
{
    $path = m::mock('UntypedParameter_path_');
    $preserve_filepath = m::mock('UntypedParameter_preserve_filepath_');
    $root_path = m::mock('UntypedParameter_root_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\opendir($path))) == false (line 356)
    // if ($root_path === \NULL) == false (line 362)
    // while (\FALSE !== ($file = \readdir($fp))) == false (line 367)

    $actual = $this->cI_Zip->read_dir($path, $preserve_filepath, $root_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_dir1()
{
    $path = m::mock('UntypedParameter_path_');
    $preserve_filepath = m::mock('UntypedParameter_preserve_filepath_');
    $root_path = m::mock('UntypedParameter_root_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\opendir($path))) == false (line 356)
    // if ($root_path === \NULL) == false (line 362)
    // while (\FALSE !== ($file = \readdir($fp))) == true (line 367)
    // if ($file[0] === '.') == false (line 369)
    // if (\is_dir($path . $file)) == false (line 374)
    // if (\FALSE !== ($data = \file_get_contents($path . $file))) == false (line 378)
    // while (\FALSE !== ($file = \readdir($fp))) == false (line 367)

    $actual = $this->cI_Zip->read_dir($path, $preserve_filepath, $root_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_dir2()
{
    $path = m::mock('UntypedParameter_path_');
    $preserve_filepath = m::mock('UntypedParameter_preserve_filepath_');
    $root_path = m::mock('UntypedParameter_root_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\opendir($path))) == false (line 356)
    // if ($root_path === \NULL) == false (line 362)
    // while (\FALSE !== ($file = \readdir($fp))) == true (line 367)
    // if ($file[0] === '.') == false (line 369)
    // if (\is_dir($path . $file)) == false (line 374)
    // if (\FALSE !== ($data = \file_get_contents($path . $file))) == true (line 378)
    // if ($preserve_filepath === \FALSE) == false (line 381)
    // while (\FALSE !== ($file = \readdir($fp))) == false (line 367)

    $actual = $this->cI_Zip->read_dir($path, $preserve_filepath, $root_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_dir3()
{
    $path = m::mock('UntypedParameter_path_');
    $preserve_filepath = m::mock('UntypedParameter_preserve_filepath_');
    $root_path = m::mock('UntypedParameter_root_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\opendir($path))) == false (line 356)
    // if ($root_path === \NULL) == false (line 362)
    // while (\FALSE !== ($file = \readdir($fp))) == true (line 367)
    // if ($file[0] === '.') == false (line 369)
    // if (\is_dir($path . $file)) == false (line 374)
    // if (\FALSE !== ($data = \file_get_contents($path . $file))) == true (line 378)
    // if ($preserve_filepath === \FALSE) == true (line 381)
    // while (\FALSE !== ($file = \readdir($fp))) == false (line 367)

    $actual = $this->cI_Zip->read_dir($path, $preserve_filepath, $root_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_dir4()
{
    $path = m::mock('UntypedParameter_path_');
    $preserve_filepath = m::mock('UntypedParameter_preserve_filepath_');
    $root_path = m::mock('UntypedParameter_root_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\opendir($path))) == false (line 356)
    // if ($root_path === \NULL) == false (line 362)
    // while (\FALSE !== ($file = \readdir($fp))) == true (line 367)
    // if ($file[0] === '.') == false (line 369)
    // if (\is_dir($path . $file)) == true (line 374)
    // while (\FALSE !== ($file = \readdir($fp))) == false (line 367)

    $actual = $this->cI_Zip->read_dir($path, $preserve_filepath, $root_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_dir5()
{
    $path = m::mock('UntypedParameter_path_');
    $preserve_filepath = m::mock('UntypedParameter_preserve_filepath_');
    $root_path = m::mock('UntypedParameter_root_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\opendir($path))) == false (line 356)
    // if ($root_path === \NULL) == false (line 362)
    // while (\FALSE !== ($file = \readdir($fp))) == true (line 367)
    // if ($file[0] === '.') == true (line 369)
    // while (\FALSE !== ($file = \readdir($fp))) == false (line 367)

    $actual = $this->cI_Zip->read_dir($path, $preserve_filepath, $root_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_dir6()
{
    $path = m::mock('UntypedParameter_path_');
    $preserve_filepath = m::mock('UntypedParameter_preserve_filepath_');
    $root_path = m::mock('UntypedParameter_root_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\opendir($path))) == false (line 356)
    // if ($root_path === \NULL) == true (line 362)
    // while (\FALSE !== ($file = \readdir($fp))) == false (line 367)

    $actual = $this->cI_Zip->read_dir($path, $preserve_filepath, $root_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_dir7()
{
    $path = m::mock('UntypedParameter_path_');
    $preserve_filepath = m::mock('UntypedParameter_preserve_filepath_');
    $root_path = m::mock('UntypedParameter_root_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\opendir($path))) == false (line 356)
    // if ($root_path === \NULL) == true (line 362)
    // while (\FALSE !== ($file = \readdir($fp))) == true (line 367)
    // if ($file[0] === '.') == false (line 369)
    // if (\is_dir($path . $file)) == false (line 374)
    // if (\FALSE !== ($data = \file_get_contents($path . $file))) == false (line 378)
    // while (\FALSE !== ($file = \readdir($fp))) == false (line 367)

    $actual = $this->cI_Zip->read_dir($path, $preserve_filepath, $root_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_dir8()
{
    $path = m::mock('UntypedParameter_path_');
    $preserve_filepath = m::mock('UntypedParameter_preserve_filepath_');
    $root_path = m::mock('UntypedParameter_root_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\opendir($path))) == false (line 356)
    // if ($root_path === \NULL) == true (line 362)
    // while (\FALSE !== ($file = \readdir($fp))) == true (line 367)
    // if ($file[0] === '.') == false (line 369)
    // if (\is_dir($path . $file)) == false (line 374)
    // if (\FALSE !== ($data = \file_get_contents($path . $file))) == true (line 378)
    // if ($preserve_filepath === \FALSE) == false (line 381)
    // while (\FALSE !== ($file = \readdir($fp))) == false (line 367)

    $actual = $this->cI_Zip->read_dir($path, $preserve_filepath, $root_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_dir9()
{
    $path = m::mock('UntypedParameter_path_');
    $preserve_filepath = m::mock('UntypedParameter_preserve_filepath_');
    $root_path = m::mock('UntypedParameter_root_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\opendir($path))) == false (line 356)
    // if ($root_path === \NULL) == true (line 362)
    // while (\FALSE !== ($file = \readdir($fp))) == true (line 367)
    // if ($file[0] === '.') == false (line 369)
    // if (\is_dir($path . $file)) == false (line 374)
    // if (\FALSE !== ($data = \file_get_contents($path . $file))) == true (line 378)
    // if ($preserve_filepath === \FALSE) == true (line 381)
    // while (\FALSE !== ($file = \readdir($fp))) == false (line 367)

    $actual = $this->cI_Zip->read_dir($path, $preserve_filepath, $root_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_dir10()
{
    $path = m::mock('UntypedParameter_path_');
    $preserve_filepath = m::mock('UntypedParameter_preserve_filepath_');
    $root_path = m::mock('UntypedParameter_root_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\opendir($path))) == false (line 356)
    // if ($root_path === \NULL) == true (line 362)
    // while (\FALSE !== ($file = \readdir($fp))) == true (line 367)
    // if ($file[0] === '.') == false (line 369)
    // if (\is_dir($path . $file)) == true (line 374)
    // while (\FALSE !== ($file = \readdir($fp))) == false (line 367)

    $actual = $this->cI_Zip->read_dir($path, $preserve_filepath, $root_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_dir11()
{
    $path = m::mock('UntypedParameter_path_');
    $preserve_filepath = m::mock('UntypedParameter_preserve_filepath_');
    $root_path = m::mock('UntypedParameter_root_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\opendir($path))) == false (line 356)
    // if ($root_path === \NULL) == true (line 362)
    // while (\FALSE !== ($file = \readdir($fp))) == true (line 367)
    // if ($file[0] === '.') == true (line 369)
    // while (\FALSE !== ($file = \readdir($fp))) == false (line 367)

    $actual = $this->cI_Zip->read_dir($path, $preserve_filepath, $root_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_dir12()
{
    $path = m::mock('UntypedParameter_path_');
    $preserve_filepath = m::mock('UntypedParameter_preserve_filepath_');
    $root_path = m::mock('UntypedParameter_root_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\opendir($path))) == true (line 356)

    $actual = $this->cI_Zip->read_dir($path, $preserve_filepath, $root_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_zip0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->entries === 0) == false (line 404)

    $actual = $this->cI_Zip->get_zip();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_zip1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->entries === 0) == true (line 404)

    $actual = $this->cI_Zip->get_zip();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testArchive0()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\fopen($filepath, 'w+b'))) == false (line 430)
    // for (...) == false (line 437)

    $actual = $this->cI_Zip->archive($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testArchive1()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\fopen($filepath, 'w+b'))) == false (line 430)
    // for (...) == true (line 437)
    // if (($result = \fwrite($fp, self::substr($data, $written))) === \FALSE) == false (line 439)
    // for (...) == false (line 437)

    $actual = $this->cI_Zip->archive($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testArchive2()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\fopen($filepath, 'w+b'))) == false (line 430)
    // for (...) == true (line 437)
    // if (($result = \fwrite($fp, self::substr($data, $written))) === \FALSE) == true (line 439)

    $actual = $this->cI_Zip->archive($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testArchive3()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($fp = @\fopen($filepath, 'w+b'))) == true (line 430)

    $actual = $this->cI_Zip->archive($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDownload0()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match('|.+?\\.zip$|', $filename)) == false (line 461)

    $actual = $this->cI_Zip->download($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDownload1()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match('|.+?\\.zip$|', $filename)) == true (line 461)

    $actual = $this->cI_Zip->download($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClear_data0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Zip->clear_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
