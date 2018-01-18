<?php

namespace tests\Illuminate\Filesystem;

use Illuminate\Filesystem\FilesystemAdapter;
use League\Flysystem\FilesystemInterface;
use Mockery as m;

class FilesystemAdapterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_driver;
/**
* @var \Illuminate\Filesystem\FilesystemAdapter
*/
protected $filesystemAdapter;

public function setUp()
{
    parent::setUp();

    $this->_driver = m::mock(\League\Flysystem\FilesystemInterface::class);
    $this->filesystemAdapter = new \Illuminate\Filesystem\FilesystemAdapter($this->_driver);
}

public function testAssertExists0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->assertExists($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertMissing0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->assertMissing($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExists0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->exists($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPath0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->path($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testGet0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->get($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Illuminate\Contracts\Filesystem\FileNotFoundException
 */
public function testGet1()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // throw new \Illuminate\Contracts\Filesystem\FileNotFoundException($path, $e->getCode(), $e) -> exception (line 109)

    $actual = $this->filesystemAdapter->get($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet2()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->get($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResponse0()
{
    $path = m::mock('UntypedParameter_path_');
    $name = m::mock('UntypedParameter_name_');
    $headers = [];
    $disposition = m::mock('UntypedParameter_disposition_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->response($path, $name, $headers, $disposition);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDownload0()
{
    $path = m::mock('UntypedParameter_path_');
    $name = m::mock('UntypedParameter_name_');
    $headers = [];

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->download($path, $name, $headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPut0()
{
    $path = m::mock('UntypedParameter_path_');
    $contents = m::mock('UntypedParameter_contents_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($contents instanceof \Illuminate\Http\File || $contents instanceof \Illuminate\Http\UploadedFile) == false (line 173)

    $actual = $this->filesystemAdapter->put($path, $contents, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPut1()
{
    $path = m::mock('UntypedParameter_path_');
    $contents = m::mock('UntypedParameter_contents_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($contents instanceof \Illuminate\Http\File || $contents instanceof \Illuminate\Http\UploadedFile) == true (line 173)

    $actual = $this->filesystemAdapter->put($path, $contents, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPutFile0()
{
    $path = m::mock('UntypedParameter_path_');
    $file = m::mock('UntypedParameter_file_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->putFile($path, $file, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPutFileAs0()
{
    $path = m::mock('UntypedParameter_path_');
    $file = m::mock('UntypedParameter_file_');
    $name = m::mock('UntypedParameter_name_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_resource($stream)) == false (line 216)

    $actual = $this->filesystemAdapter->putFileAs($path, $file, $name, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPutFileAs1()
{
    $path = m::mock('UntypedParameter_path_');
    $file = m::mock('UntypedParameter_file_');
    $name = m::mock('UntypedParameter_name_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_resource($stream)) == true (line 216)

    $actual = $this->filesystemAdapter->putFileAs($path, $file, $name, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetVisibility0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->driver->getVisibility($path) == \League\Flysystem\AdapterInterface::VISIBILITY_PUBLIC) == false (line 231)

    $actual = $this->filesystemAdapter->getVisibility($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetVisibility1()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->driver->getVisibility($path) == \League\Flysystem\AdapterInterface::VISIBILITY_PUBLIC) == true (line 231)

    $actual = $this->filesystemAdapter->getVisibility($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetVisibility0()
{
    $path = m::mock('UntypedParameter_path_');
    $visibility = m::mock('UntypedParameter_visibility_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->setVisibility($path, $visibility);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepend0()
{
    $path = m::mock('UntypedParameter_path_');
    $data = m::mock('UntypedParameter_data_');
    $separator = m::mock('UntypedParameter_separator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->exists($path)) == false (line 260)

    $actual = $this->filesystemAdapter->prepend($path, $data, $separator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepend1()
{
    $path = m::mock('UntypedParameter_path_');
    $data = m::mock('UntypedParameter_data_');
    $separator = m::mock('UntypedParameter_separator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->exists($path)) == true (line 260)

    $actual = $this->filesystemAdapter->prepend($path, $data, $separator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAppend0()
{
    $path = m::mock('UntypedParameter_path_');
    $data = m::mock('UntypedParameter_data_');
    $separator = m::mock('UntypedParameter_separator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->exists($path)) == false (line 277)

    $actual = $this->filesystemAdapter->append($path, $data, $separator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAppend1()
{
    $path = m::mock('UntypedParameter_path_');
    $data = m::mock('UntypedParameter_data_');
    $separator = m::mock('UntypedParameter_separator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->exists($path)) == true (line 277)

    $actual = $this->filesystemAdapter->append($path, $data, $separator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    $paths = m::mock('UntypedParameter_paths_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->delete($paths);
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
    // if (!$this->driver->delete($path)) -> exception (line 298)

    $actual = $this->filesystemAdapter->delete($paths);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete2()
{
    $paths = m::mock('UntypedParameter_paths_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->driver->delete($path)) -> exception (line 298)

    $actual = $this->filesystemAdapter->delete($paths);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete3()
{
    $paths = m::mock('UntypedParameter_paths_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->driver->delete($path)) == false (line 298)

    $actual = $this->filesystemAdapter->delete($paths);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete4()
{
    $paths = m::mock('UntypedParameter_paths_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->driver->delete($path)) == true (line 298)

    $actual = $this->filesystemAdapter->delete($paths);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCopy0()
{
    $from = m::mock('UntypedParameter_from_');
    $to = m::mock('UntypedParameter_to_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->copy($from, $to);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMove0()
{
    $from = m::mock('UntypedParameter_from_');
    $to = m::mock('UntypedParameter_to_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->move($from, $to);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSize0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->size($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMimeType0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->mimeType($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastModified0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->lastModified($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testUrl0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($adapter instanceof \League\Flysystem\Cached\CachedAdapter) == false (line 376)
    // if (method_exists($adapter, 'getUrl')) == false (line 380)
    // if ($adapter instanceof \League\Flysystem\AwsS3v3\AwsS3Adapter) == false (line 382)
    // if ($adapter instanceof \League\Flysystem\Rackspace\RackspaceAdapter) == false (line 384)
    // if ($adapter instanceof \League\Flysystem\Adapter\Local) == false (line 386)
    // throw new \RuntimeException('This driver does not support retrieving URLs.') -> exception (line 389)

    $actual = $this->filesystemAdapter->url($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrl1()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($adapter instanceof \League\Flysystem\Cached\CachedAdapter) == false (line 376)
    // if (method_exists($adapter, 'getUrl')) == false (line 380)
    // if ($adapter instanceof \League\Flysystem\AwsS3v3\AwsS3Adapter) == false (line 382)
    // if ($adapter instanceof \League\Flysystem\Rackspace\RackspaceAdapter) == false (line 384)
    // if ($adapter instanceof \League\Flysystem\Adapter\Local) == true (line 386)

    $actual = $this->filesystemAdapter->url($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrl2()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($adapter instanceof \League\Flysystem\Cached\CachedAdapter) == false (line 376)
    // if (method_exists($adapter, 'getUrl')) == false (line 380)
    // if ($adapter instanceof \League\Flysystem\AwsS3v3\AwsS3Adapter) == false (line 382)
    // if ($adapter instanceof \League\Flysystem\Rackspace\RackspaceAdapter) == true (line 384)

    $actual = $this->filesystemAdapter->url($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrl3()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($adapter instanceof \League\Flysystem\Cached\CachedAdapter) == false (line 376)
    // if (method_exists($adapter, 'getUrl')) == false (line 380)
    // if ($adapter instanceof \League\Flysystem\AwsS3v3\AwsS3Adapter) == true (line 382)

    $actual = $this->filesystemAdapter->url($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrl4()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($adapter instanceof \League\Flysystem\Cached\CachedAdapter) == false (line 376)
    // if (method_exists($adapter, 'getUrl')) == true (line 380)

    $actual = $this->filesystemAdapter->url($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testUrl5()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($adapter instanceof \League\Flysystem\Cached\CachedAdapter) == true (line 376)
    // if (method_exists($adapter, 'getUrl')) == false (line 380)
    // if ($adapter instanceof \League\Flysystem\AwsS3v3\AwsS3Adapter) == false (line 382)
    // if ($adapter instanceof \League\Flysystem\Rackspace\RackspaceAdapter) == false (line 384)
    // if ($adapter instanceof \League\Flysystem\Adapter\Local) == false (line 386)
    // throw new \RuntimeException('This driver does not support retrieving URLs.') -> exception (line 389)

    $actual = $this->filesystemAdapter->url($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrl6()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($adapter instanceof \League\Flysystem\Cached\CachedAdapter) == true (line 376)
    // if (method_exists($adapter, 'getUrl')) == false (line 380)
    // if ($adapter instanceof \League\Flysystem\AwsS3v3\AwsS3Adapter) == false (line 382)
    // if ($adapter instanceof \League\Flysystem\Rackspace\RackspaceAdapter) == false (line 384)
    // if ($adapter instanceof \League\Flysystem\Adapter\Local) == true (line 386)

    $actual = $this->filesystemAdapter->url($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrl7()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($adapter instanceof \League\Flysystem\Cached\CachedAdapter) == true (line 376)
    // if (method_exists($adapter, 'getUrl')) == false (line 380)
    // if ($adapter instanceof \League\Flysystem\AwsS3v3\AwsS3Adapter) == false (line 382)
    // if ($adapter instanceof \League\Flysystem\Rackspace\RackspaceAdapter) == true (line 384)

    $actual = $this->filesystemAdapter->url($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrl8()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($adapter instanceof \League\Flysystem\Cached\CachedAdapter) == true (line 376)
    // if (method_exists($adapter, 'getUrl')) == false (line 380)
    // if ($adapter instanceof \League\Flysystem\AwsS3v3\AwsS3Adapter) == true (line 382)

    $actual = $this->filesystemAdapter->url($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrl9()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($adapter instanceof \League\Flysystem\Cached\CachedAdapter) == true (line 376)
    // if (method_exists($adapter, 'getUrl')) == true (line 380)

    $actual = $this->filesystemAdapter->url($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testTemporaryUrl0()
{
    $path = m::mock('UntypedParameter_path_');
    $expiration = m::mock('UntypedParameter_expiration_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($adapter instanceof \League\Flysystem\Cached\CachedAdapter) == false (line 467)
    // if (method_exists($adapter, 'getTemporaryUrl')) == false (line 471)
    // if ($adapter instanceof \League\Flysystem\AwsS3v3\AwsS3Adapter) == false (line 473)
    // if ($adapter instanceof \League\Flysystem\Rackspace\RackspaceAdapter) == false (line 475)
    // throw new \RuntimeException('This driver does not support creating temporary URLs.') -> exception (line 478)

    $actual = $this->filesystemAdapter->temporaryUrl($path, $expiration, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemporaryUrl1()
{
    $path = m::mock('UntypedParameter_path_');
    $expiration = m::mock('UntypedParameter_expiration_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($adapter instanceof \League\Flysystem\Cached\CachedAdapter) == false (line 467)
    // if (method_exists($adapter, 'getTemporaryUrl')) == false (line 471)
    // if ($adapter instanceof \League\Flysystem\AwsS3v3\AwsS3Adapter) == false (line 473)
    // if ($adapter instanceof \League\Flysystem\Rackspace\RackspaceAdapter) == true (line 475)

    $actual = $this->filesystemAdapter->temporaryUrl($path, $expiration, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemporaryUrl2()
{
    $path = m::mock('UntypedParameter_path_');
    $expiration = m::mock('UntypedParameter_expiration_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($adapter instanceof \League\Flysystem\Cached\CachedAdapter) == false (line 467)
    // if (method_exists($adapter, 'getTemporaryUrl')) == false (line 471)
    // if ($adapter instanceof \League\Flysystem\AwsS3v3\AwsS3Adapter) == true (line 473)

    $actual = $this->filesystemAdapter->temporaryUrl($path, $expiration, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemporaryUrl3()
{
    $path = m::mock('UntypedParameter_path_');
    $expiration = m::mock('UntypedParameter_expiration_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($adapter instanceof \League\Flysystem\Cached\CachedAdapter) == false (line 467)
    // if (method_exists($adapter, 'getTemporaryUrl')) == true (line 471)

    $actual = $this->filesystemAdapter->temporaryUrl($path, $expiration, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testTemporaryUrl4()
{
    $path = m::mock('UntypedParameter_path_');
    $expiration = m::mock('UntypedParameter_expiration_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($adapter instanceof \League\Flysystem\Cached\CachedAdapter) == true (line 467)
    // if (method_exists($adapter, 'getTemporaryUrl')) == false (line 471)
    // if ($adapter instanceof \League\Flysystem\AwsS3v3\AwsS3Adapter) == false (line 473)
    // if ($adapter instanceof \League\Flysystem\Rackspace\RackspaceAdapter) == false (line 475)
    // throw new \RuntimeException('This driver does not support creating temporary URLs.') -> exception (line 478)

    $actual = $this->filesystemAdapter->temporaryUrl($path, $expiration, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemporaryUrl5()
{
    $path = m::mock('UntypedParameter_path_');
    $expiration = m::mock('UntypedParameter_expiration_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($adapter instanceof \League\Flysystem\Cached\CachedAdapter) == true (line 467)
    // if (method_exists($adapter, 'getTemporaryUrl')) == false (line 471)
    // if ($adapter instanceof \League\Flysystem\AwsS3v3\AwsS3Adapter) == false (line 473)
    // if ($adapter instanceof \League\Flysystem\Rackspace\RackspaceAdapter) == true (line 475)

    $actual = $this->filesystemAdapter->temporaryUrl($path, $expiration, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemporaryUrl6()
{
    $path = m::mock('UntypedParameter_path_');
    $expiration = m::mock('UntypedParameter_expiration_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($adapter instanceof \League\Flysystem\Cached\CachedAdapter) == true (line 467)
    // if (method_exists($adapter, 'getTemporaryUrl')) == false (line 471)
    // if ($adapter instanceof \League\Flysystem\AwsS3v3\AwsS3Adapter) == true (line 473)

    $actual = $this->filesystemAdapter->temporaryUrl($path, $expiration, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemporaryUrl7()
{
    $path = m::mock('UntypedParameter_path_');
    $expiration = m::mock('UntypedParameter_expiration_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($adapter instanceof \League\Flysystem\Cached\CachedAdapter) == true (line 467)
    // if (method_exists($adapter, 'getTemporaryUrl')) == true (line 471)

    $actual = $this->filesystemAdapter->temporaryUrl($path, $expiration, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAwsTemporaryUrl0()
{
    $adapter = m::mock('UntypedParameter_adapter_');
    $path = m::mock('UntypedParameter_path_');
    $expiration = m::mock('UntypedParameter_expiration_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->getAwsTemporaryUrl($adapter, $path, $expiration, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRackspaceTemporaryUrl0()
{
    $adapter = m::mock('UntypedParameter_adapter_');
    $path = m::mock('UntypedParameter_path_');
    $expiration = m::mock('UntypedParameter_expiration_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->getRackspaceTemporaryUrl($adapter, $path, $expiration, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFiles0()
{
    $directory = m::mock('UntypedParameter_directory_');
    $recursive = m::mock('UntypedParameter_recursive_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->files($directory, $recursive);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAllFiles0()
{
    $directory = m::mock('UntypedParameter_directory_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->allFiles($directory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDirectories0()
{
    $directory = m::mock('UntypedParameter_directory_');
    $recursive = m::mock('UntypedParameter_recursive_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->directories($directory, $recursive);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAllDirectories0()
{
    $directory = m::mock('UntypedParameter_directory_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->allDirectories($directory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeDirectory0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->makeDirectory($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeleteDirectory0()
{
    $directory = m::mock('UntypedParameter_directory_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->deleteDirectory($directory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlushCache0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($adapter instanceof \League\Flysystem\Cached\CachedAdapter) == false (line 616)

    $actual = $this->filesystemAdapter->flushCache();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlushCache1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($adapter instanceof \League\Flysystem\Cached\CachedAdapter) == true (line 616)

    $actual = $this->filesystemAdapter->flushCache();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDriver0()
{
    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->getDriver();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = [];

    // TODO: Your mock expectations here

    $actual = $this->filesystemAdapter->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
