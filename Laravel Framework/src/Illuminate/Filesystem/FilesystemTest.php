<?php

namespace tests\Illuminate\Filesystem;

use Illuminate\Filesystem\Filesystem;
use Mockery as m;

class FilesystemTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Filesystem\Filesystem
*/
protected $filesystem;

public function setUp()
{
    parent::setUp();

    $this->filesystem = new \Illuminate\Filesystem\Filesystem();
}

public function testExists0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->exists($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Illuminate\Contracts\Filesystem\FileNotFoundException
 */
public function testGet0()
{
    $path = m::mock('UntypedParameter_path_');
    $lock = m::mock('UntypedParameter_lock_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isFile($path)) == false (line 37)
    // throw new \Illuminate\Contracts\Filesystem\FileNotFoundException("File does not exist at path {$path}") -> exception (line 41)

    $actual = $this->filesystem->get($path, $lock);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $path = m::mock('UntypedParameter_path_');
    $lock = m::mock('UntypedParameter_lock_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isFile($path)) == true (line 37)

    $actual = $this->filesystem->get($path, $lock);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSharedGet0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handle) == false (line 56)

    $actual = $this->filesystem->sharedGet($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testSharedGet1()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handle) == true (line 56)
    // if (flock($handle, LOCK_SH)) -> exception (line 58)

    $actual = $this->filesystem->sharedGet($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSharedGet2()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handle) == true (line 56)
    // if (flock($handle, LOCK_SH)) -> exception (line 58)

    $actual = $this->filesystem->sharedGet($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testSharedGet3()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handle) == true (line 56)
    // if (flock($handle, LOCK_SH)) == false (line 58)

    $actual = $this->filesystem->sharedGet($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSharedGet4()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handle) == true (line 56)
    // if (flock($handle, LOCK_SH)) == false (line 58)

    $actual = $this->filesystem->sharedGet($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testSharedGet5()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handle) == true (line 56)
    // if (flock($handle, LOCK_SH)) == true (line 58)

    $actual = $this->filesystem->sharedGet($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSharedGet6()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handle) == true (line 56)
    // if (flock($handle, LOCK_SH)) == true (line 58)

    $actual = $this->filesystem->sharedGet($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testSharedGet7()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handle) == true (line 56)
    // if (flock($handle, LOCK_SH)) == true (line 58)

    $actual = $this->filesystem->sharedGet($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSharedGet8()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handle) == true (line 56)
    // if (flock($handle, LOCK_SH)) == true (line 58)

    $actual = $this->filesystem->sharedGet($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testSharedGet9()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handle) == true (line 56)
    // if (flock($handle, LOCK_SH)) == true (line 58)

    $actual = $this->filesystem->sharedGet($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSharedGet10()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handle) == true (line 56)
    // if (flock($handle, LOCK_SH)) == true (line 58)

    $actual = $this->filesystem->sharedGet($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testSharedGet11()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handle) == true (line 56)
    // if (flock($handle, LOCK_SH)) == true (line 58)

    $actual = $this->filesystem->sharedGet($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSharedGet12()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handle) == true (line 56)
    // if (flock($handle, LOCK_SH)) == true (line 58)

    $actual = $this->filesystem->sharedGet($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Illuminate\Contracts\Filesystem\FileNotFoundException
 */
public function testGetRequire0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isFile($path)) == false (line 83)
    // throw new \Illuminate\Contracts\Filesystem\FileNotFoundException("File does not exist at path {$path}") -> exception (line 87)

    $actual = $this->filesystem->getRequire($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRequire1()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isFile($path)) == true (line 83)

    $actual = $this->filesystem->getRequire($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequireOnce0()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->requireOnce($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHash0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->hash($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPut0()
{
    $path = m::mock('UntypedParameter_path_');
    $contents = m::mock('UntypedParameter_contents_');
    $lock = m::mock('UntypedParameter_lock_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->put($path, $contents, $lock);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepend0()
{
    $path = m::mock('UntypedParameter_path_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->exists($path)) == false (line 134)

    $actual = $this->filesystem->prepend($path, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepend1()
{
    $path = m::mock('UntypedParameter_path_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->exists($path)) == true (line 134)

    $actual = $this->filesystem->prepend($path, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAppend0()
{
    $path = m::mock('UntypedParameter_path_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->append($path, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChmod0()
{
    $path = m::mock('UntypedParameter_path_');
    $mode = m::mock('UntypedParameter_mode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($mode) == false (line 162)

    $actual = $this->filesystem->chmod($path, $mode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChmod1()
{
    $path = m::mock('UntypedParameter_path_');
    $mode = m::mock('UntypedParameter_mode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($mode) == true (line 162)

    $actual = $this->filesystem->chmod($path, $mode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    $paths = m::mock('UntypedParameter_paths_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->delete($paths);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testDelete1()
{
    $paths = m::mock('UntypedParameter_paths_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!@unlink($path)) -> exception (line 183)

    $actual = $this->filesystem->delete($paths);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete2()
{
    $paths = m::mock('UntypedParameter_paths_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!@unlink($path)) -> exception (line 183)

    $actual = $this->filesystem->delete($paths);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete3()
{
    $paths = m::mock('UntypedParameter_paths_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!@unlink($path)) == false (line 183)

    $actual = $this->filesystem->delete($paths);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete4()
{
    $paths = m::mock('UntypedParameter_paths_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!@unlink($path)) == true (line 183)

    $actual = $this->filesystem->delete($paths);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMove0()
{
    $path = m::mock('UntypedParameter_path_');
    $target = m::mock('UntypedParameter_target_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->move($path, $target);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCopy0()
{
    $path = m::mock('UntypedParameter_path_');
    $target = m::mock('UntypedParameter_target_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->copy($path, $target);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLink0()
{
    $target = m::mock('UntypedParameter_target_');
    $link = m::mock('UntypedParameter_link_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!windows_os()) == false (line 227)

    $actual = $this->filesystem->link($target, $link);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLink1()
{
    $target = m::mock('UntypedParameter_target_');
    $link = m::mock('UntypedParameter_link_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!windows_os()) == true (line 227)

    $actual = $this->filesystem->link($target, $link);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testName0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->name($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBasename0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->basename($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDirname0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->dirname($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtension0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->extension($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testType0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->type($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMimeType0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->mimeType($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSize0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->size($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastModified0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->lastModified($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsDirectory0()
{
    $directory = m::mock('UntypedParameter_directory_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->isDirectory($directory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsReadable0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->isReadable($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsWritable0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->isWritable($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsFile0()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->isFile($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGlob0()
{
    $pattern = m::mock('UntypedParameter_pattern_');
    $flags = m::mock('UntypedParameter_flags_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->glob($pattern, $flags);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFiles0()
{
    $directory = m::mock('UntypedParameter_directory_');
    $hidden = m::mock('UntypedParameter_hidden_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->files($directory, $hidden);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAllFiles0()
{
    $directory = m::mock('UntypedParameter_directory_');
    $hidden = m::mock('UntypedParameter_hidden_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->allFiles($directory, $hidden);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDirectories0()
{
    $directory = m::mock('UntypedParameter_directory_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->directories($directory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDirectories1()
{
    $directory = m::mock('UntypedParameter_directory_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->directories($directory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeDirectory0()
{
    $path = m::mock('UntypedParameter_path_');
    $mode = m::mock('UntypedParameter_mode_');
    $recursive = m::mock('UntypedParameter_recursive_');
    $force = m::mock('UntypedParameter_force_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($force) == false (line 438)

    $actual = $this->filesystem->makeDirectory($path, $mode, $recursive, $force);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeDirectory1()
{
    $path = m::mock('UntypedParameter_path_');
    $mode = m::mock('UntypedParameter_mode_');
    $recursive = m::mock('UntypedParameter_recursive_');
    $force = m::mock('UntypedParameter_force_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($force) == true (line 438)

    $actual = $this->filesystem->makeDirectory($path, $mode, $recursive, $force);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMoveDirectory0()
{
    $from = m::mock('UntypedParameter_from_');
    $to = m::mock('UntypedParameter_to_');
    $overwrite = m::mock('UntypedParameter_overwrite_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($overwrite && $this->isDirectory($to)) == false (line 455)

    $actual = $this->filesystem->moveDirectory($from, $to, $overwrite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMoveDirectory1()
{
    $from = m::mock('UntypedParameter_from_');
    $to = m::mock('UntypedParameter_to_');
    $overwrite = m::mock('UntypedParameter_overwrite_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($overwrite && $this->isDirectory($to)) == true (line 455)
    // if (!$this->deleteDirectory($to)) == false (line 456)

    $actual = $this->filesystem->moveDirectory($from, $to, $overwrite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMoveDirectory2()
{
    $from = m::mock('UntypedParameter_from_');
    $to = m::mock('UntypedParameter_to_');
    $overwrite = m::mock('UntypedParameter_overwrite_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($overwrite && $this->isDirectory($to)) == true (line 455)
    // if (!$this->deleteDirectory($to)) == true (line 456)

    $actual = $this->filesystem->moveDirectory($from, $to, $overwrite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCopyDirectory0()
{
    $directory = m::mock('UntypedParameter_directory_');
    $destination = m::mock('UntypedParameter_destination_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isDirectory($directory)) == false (line 474)
    // if (!$this->isDirectory($destination)) == false (line 483)

    $actual = $this->filesystem->copyDirectory($directory, $destination, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCopyDirectory1()
{
    $directory = m::mock('UntypedParameter_directory_');
    $destination = m::mock('UntypedParameter_destination_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isDirectory($directory)) == false (line 474)
    // if (!$this->isDirectory($destination)) == false (line 483)
    // if ($item->isDir()) == false (line 495)
    // if (!$this->copy($item->getPathname(), $target)) == false (line 507)

    $actual = $this->filesystem->copyDirectory($directory, $destination, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCopyDirectory2()
{
    $directory = m::mock('UntypedParameter_directory_');
    $destination = m::mock('UntypedParameter_destination_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isDirectory($directory)) == false (line 474)
    // if (!$this->isDirectory($destination)) == false (line 483)
    // if ($item->isDir()) == false (line 495)
    // if (!$this->copy($item->getPathname(), $target)) == true (line 507)

    $actual = $this->filesystem->copyDirectory($directory, $destination, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCopyDirectory3()
{
    $directory = m::mock('UntypedParameter_directory_');
    $destination = m::mock('UntypedParameter_destination_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isDirectory($directory)) == false (line 474)
    // if (!$this->isDirectory($destination)) == false (line 483)
    // if ($item->isDir()) == true (line 495)
    // if (!$this->copyDirectory($path, $target, $options)) == false (line 498)

    $actual = $this->filesystem->copyDirectory($directory, $destination, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCopyDirectory4()
{
    $directory = m::mock('UntypedParameter_directory_');
    $destination = m::mock('UntypedParameter_destination_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isDirectory($directory)) == false (line 474)
    // if (!$this->isDirectory($destination)) == false (line 483)
    // if ($item->isDir()) == true (line 495)
    // if (!$this->copyDirectory($path, $target, $options)) == true (line 498)

    $actual = $this->filesystem->copyDirectory($directory, $destination, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCopyDirectory5()
{
    $directory = m::mock('UntypedParameter_directory_');
    $destination = m::mock('UntypedParameter_destination_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isDirectory($directory)) == false (line 474)
    // if (!$this->isDirectory($destination)) == true (line 483)

    $actual = $this->filesystem->copyDirectory($directory, $destination, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCopyDirectory6()
{
    $directory = m::mock('UntypedParameter_directory_');
    $destination = m::mock('UntypedParameter_destination_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isDirectory($directory)) == false (line 474)
    // if (!$this->isDirectory($destination)) == true (line 483)
    // if ($item->isDir()) == false (line 495)
    // if (!$this->copy($item->getPathname(), $target)) == false (line 507)

    $actual = $this->filesystem->copyDirectory($directory, $destination, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCopyDirectory7()
{
    $directory = m::mock('UntypedParameter_directory_');
    $destination = m::mock('UntypedParameter_destination_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isDirectory($directory)) == false (line 474)
    // if (!$this->isDirectory($destination)) == true (line 483)
    // if ($item->isDir()) == false (line 495)
    // if (!$this->copy($item->getPathname(), $target)) == true (line 507)

    $actual = $this->filesystem->copyDirectory($directory, $destination, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCopyDirectory8()
{
    $directory = m::mock('UntypedParameter_directory_');
    $destination = m::mock('UntypedParameter_destination_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isDirectory($directory)) == false (line 474)
    // if (!$this->isDirectory($destination)) == true (line 483)
    // if ($item->isDir()) == true (line 495)
    // if (!$this->copyDirectory($path, $target, $options)) == false (line 498)

    $actual = $this->filesystem->copyDirectory($directory, $destination, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCopyDirectory9()
{
    $directory = m::mock('UntypedParameter_directory_');
    $destination = m::mock('UntypedParameter_destination_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isDirectory($directory)) == false (line 474)
    // if (!$this->isDirectory($destination)) == true (line 483)
    // if ($item->isDir()) == true (line 495)
    // if (!$this->copyDirectory($path, $target, $options)) == true (line 498)

    $actual = $this->filesystem->copyDirectory($directory, $destination, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCopyDirectory10()
{
    $directory = m::mock('UntypedParameter_directory_');
    $destination = m::mock('UntypedParameter_destination_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isDirectory($directory)) == true (line 474)

    $actual = $this->filesystem->copyDirectory($directory, $destination, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeleteDirectory0()
{
    $directory = m::mock('UntypedParameter_directory_');
    $preserve = m::mock('UntypedParameter_preserve_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isDirectory($directory)) == false (line 527)
    // if (!$preserve) == false (line 549)

    $actual = $this->filesystem->deleteDirectory($directory, $preserve);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeleteDirectory1()
{
    $directory = m::mock('UntypedParameter_directory_');
    $preserve = m::mock('UntypedParameter_preserve_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isDirectory($directory)) == false (line 527)
    // if (!$preserve) == true (line 549)

    $actual = $this->filesystem->deleteDirectory($directory, $preserve);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeleteDirectory2()
{
    $directory = m::mock('UntypedParameter_directory_');
    $preserve = m::mock('UntypedParameter_preserve_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isDirectory($directory)) == false (line 527)
    // if ($item->isDir() && !$item->isLink()) == false (line 537)
    // if (!$preserve) == false (line 549)

    $actual = $this->filesystem->deleteDirectory($directory, $preserve);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeleteDirectory3()
{
    $directory = m::mock('UntypedParameter_directory_');
    $preserve = m::mock('UntypedParameter_preserve_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isDirectory($directory)) == false (line 527)
    // if ($item->isDir() && !$item->isLink()) == false (line 537)
    // if (!$preserve) == true (line 549)

    $actual = $this->filesystem->deleteDirectory($directory, $preserve);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeleteDirectory4()
{
    $directory = m::mock('UntypedParameter_directory_');
    $preserve = m::mock('UntypedParameter_preserve_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isDirectory($directory)) == false (line 527)
    // if ($item->isDir() && !$item->isLink()) == true (line 537)
    // if (!$preserve) == false (line 549)

    $actual = $this->filesystem->deleteDirectory($directory, $preserve);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeleteDirectory5()
{
    $directory = m::mock('UntypedParameter_directory_');
    $preserve = m::mock('UntypedParameter_preserve_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isDirectory($directory)) == false (line 527)
    // if ($item->isDir() && !$item->isLink()) == true (line 537)
    // if (!$preserve) == true (line 549)

    $actual = $this->filesystem->deleteDirectory($directory, $preserve);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeleteDirectory6()
{
    $directory = m::mock('UntypedParameter_directory_');
    $preserve = m::mock('UntypedParameter_preserve_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isDirectory($directory)) == true (line 527)

    $actual = $this->filesystem->deleteDirectory($directory, $preserve);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCleanDirectory0()
{
    $directory = m::mock('UntypedParameter_directory_');

    // TODO: Your mock expectations here

    $actual = $this->filesystem->cleanDirectory($directory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
