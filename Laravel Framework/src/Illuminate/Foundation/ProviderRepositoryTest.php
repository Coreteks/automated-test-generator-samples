<?php

namespace tests\Illuminate\Foundation;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\ProviderRepository;
use Mockery as m;

class ProviderRepositoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_app;
/**
* @var \Mockery\MockInterface
*/
protected $_files;
/**
* @var mixed
*/
protected $_manifestPath = null;
/**
* @var \Illuminate\Foundation\ProviderRepository
*/
protected $providerRepository;

public function setUp()
{
    parent::setUp();

    $this->_app = m::mock(\Illuminate\Contracts\Foundation\Application::class);
    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->_manifestPath = null;
    $this->providerRepository = new \Illuminate\Foundation\ProviderRepository($this->_app, $this->_files, $this->_manifestPath);
}

public function testLoad0()
{
    $providers = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldRecompile($manifest, $providers)) == false (line 60)

    $actual = $this->providerRepository->load($providers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    $providers = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldRecompile($manifest, $providers)) == false (line 60)

    $actual = $this->providerRepository->load($providers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad2()
{
    $providers = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldRecompile($manifest, $providers)) == false (line 60)

    $actual = $this->providerRepository->load($providers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad3()
{
    $providers = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldRecompile($manifest, $providers)) == false (line 60)

    $actual = $this->providerRepository->load($providers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad4()
{
    $providers = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldRecompile($manifest, $providers)) == true (line 60)

    $actual = $this->providerRepository->load($providers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad5()
{
    $providers = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldRecompile($manifest, $providers)) == true (line 60)

    $actual = $this->providerRepository->load($providers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad6()
{
    $providers = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldRecompile($manifest, $providers)) == true (line 60)

    $actual = $this->providerRepository->load($providers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad7()
{
    $providers = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldRecompile($manifest, $providers)) == true (line 60)

    $actual = $this->providerRepository->load($providers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadManifest0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->files->exists($this->manifestPath)) == false (line 91)

    $actual = $this->providerRepository->loadManifest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadManifest1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->files->exists($this->manifestPath)) == true (line 91)
    // if ($manifest) == false (line 94)

    $actual = $this->providerRepository->loadManifest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadManifest2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->files->exists($this->manifestPath)) == true (line 91)
    // if ($manifest) == true (line 94)

    $actual = $this->providerRepository->loadManifest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldRecompile0()
{
    $manifest = m::mock('UntypedParameter_manifest_');
    $providers = m::mock('UntypedParameter_providers_');

    // TODO: Your mock expectations here

    $actual = $this->providerRepository->shouldRecompile($manifest, $providers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteManifest0()
{
    $manifest = m::mock('UntypedParameter_manifest_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_writable(dirname($this->manifestPath))) == false (line 189)

    $actual = $this->providerRepository->writeManifest($manifest);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testWriteManifest1()
{
    $manifest = m::mock('UntypedParameter_manifest_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_writable(dirname($this->manifestPath))) == true (line 189)
    // throw new \Exception('The bootstrap/cache directory must be present and writable.') -> exception (line 190)

    $actual = $this->providerRepository->writeManifest($manifest);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateProvider0()
{
    $provider = m::mock('UntypedParameter_provider_');

    // TODO: Your mock expectations here

    $actual = $this->providerRepository->createProvider($provider);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
