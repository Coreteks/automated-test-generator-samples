<?php

namespace tests\Illuminate\Foundation;

use Illuminate\Foundation\Application;
use Mockery as m;

class ApplicationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_basePath = null;
/**
* @var \Illuminate\Foundation\Application
*/
protected $application;

public function setUp()
{
    parent::setUp();

    $this->_basePath = null;
    $this->application = new \Illuminate\Foundation\Application($this->_basePath);
}

public function testVersion0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBootstrapWith0()
{
    $bootstrappers = [];

    // TODO: Your mock expectations here

    $actual = $this->application->bootstrapWith($bootstrappers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBootstrapWith1()
{
    $bootstrappers = [];

    // TODO: Your mock expectations here

    $actual = $this->application->bootstrapWith($bootstrappers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAfterLoadingEnvironment0()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->application->afterLoadingEnvironment($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeBootstrapping0()
{
    $bootstrapper = m::mock('UntypedParameter_bootstrapper_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->application->beforeBootstrapping($bootstrapper, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAfterBootstrapping0()
{
    $bootstrapper = m::mock('UntypedParameter_bootstrapper_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->application->afterBootstrapping($bootstrapper, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasBeenBootstrapped0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->hasBeenBootstrapped();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetBasePath0()
{
    $basePath = m::mock('UntypedParameter_basePath_');

    // TODO: Your mock expectations here

    $actual = $this->application->setBasePath($basePath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPath0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->application->path($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBasePath0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->application->basePath($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBootstrapPath0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->application->bootstrapPath($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConfigPath0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->application->configPath($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDatabasePath0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->application->databasePath($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUseDatabasePath0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->application->useDatabasePath($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLangPath0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->langPath();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPublicPath0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->publicPath();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStoragePath0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->storagePath();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUseStoragePath0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->application->useStoragePath($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResourcePath0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->application->resourcePath($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnvironmentPath0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->environmentPath();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUseEnvironmentPath0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->application->useEnvironmentPath($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadEnvironmentFrom0()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    $actual = $this->application->loadEnvironmentFrom($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnvironmentFile0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->environmentFile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnvironmentFilePath0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->environmentFilePath();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnvironment0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (func_num_args() > 0) == false (line 488)

    $actual = $this->application->environment();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnvironment1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (func_num_args() > 0) == true (line 488)

    $actual = $this->application->environment();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnvironment2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (func_num_args() > 0) == true (line 488)
    // if (\Illuminate\Support\Str::is($pattern, $this['env'])) == false (line 492)

    $actual = $this->application->environment();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnvironment3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (func_num_args() > 0) == true (line 488)
    // if (\Illuminate\Support\Str::is($pattern, $this['env'])) == true (line 492)

    $actual = $this->application->environment();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsLocal0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->isLocal();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDetectEnvironment0()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->application->detectEnvironment($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRunningInConsole0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->runningInConsole();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRunningUnitTests0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->runningUnitTests();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterConfiguredProviders0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->registerConfiguredProviders();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister0()
{
    $provider = m::mock('UntypedParameter_provider_');
    $options = m::mock('UntypedParameter_options_');
    $force = m::mock('UntypedParameter_force_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($registered = $this->getProvider($provider)) && !$force) == false (line 574)
    // if (is_string($provider)) == false (line 581)
    // if (method_exists($provider, 'register')) == false (line 585)
    // if ($this->booted) == false (line 594)

    $actual = $this->application->register($provider, $options, $force);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister1()
{
    $provider = m::mock('UntypedParameter_provider_');
    $options = m::mock('UntypedParameter_options_');
    $force = m::mock('UntypedParameter_force_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($registered = $this->getProvider($provider)) && !$force) == false (line 574)
    // if (is_string($provider)) == false (line 581)
    // if (method_exists($provider, 'register')) == false (line 585)
    // if ($this->booted) == true (line 594)

    $actual = $this->application->register($provider, $options, $force);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister2()
{
    $provider = m::mock('UntypedParameter_provider_');
    $options = m::mock('UntypedParameter_options_');
    $force = m::mock('UntypedParameter_force_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($registered = $this->getProvider($provider)) && !$force) == false (line 574)
    // if (is_string($provider)) == false (line 581)
    // if (method_exists($provider, 'register')) == true (line 585)
    // if ($this->booted) == false (line 594)

    $actual = $this->application->register($provider, $options, $force);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister3()
{
    $provider = m::mock('UntypedParameter_provider_');
    $options = m::mock('UntypedParameter_options_');
    $force = m::mock('UntypedParameter_force_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($registered = $this->getProvider($provider)) && !$force) == false (line 574)
    // if (is_string($provider)) == false (line 581)
    // if (method_exists($provider, 'register')) == true (line 585)
    // if ($this->booted) == true (line 594)

    $actual = $this->application->register($provider, $options, $force);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister4()
{
    $provider = m::mock('UntypedParameter_provider_');
    $options = m::mock('UntypedParameter_options_');
    $force = m::mock('UntypedParameter_force_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($registered = $this->getProvider($provider)) && !$force) == false (line 574)
    // if (is_string($provider)) == true (line 581)
    // if (method_exists($provider, 'register')) == false (line 585)
    // if ($this->booted) == false (line 594)

    $actual = $this->application->register($provider, $options, $force);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister5()
{
    $provider = m::mock('UntypedParameter_provider_');
    $options = m::mock('UntypedParameter_options_');
    $force = m::mock('UntypedParameter_force_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($registered = $this->getProvider($provider)) && !$force) == false (line 574)
    // if (is_string($provider)) == true (line 581)
    // if (method_exists($provider, 'register')) == false (line 585)
    // if ($this->booted) == true (line 594)

    $actual = $this->application->register($provider, $options, $force);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister6()
{
    $provider = m::mock('UntypedParameter_provider_');
    $options = m::mock('UntypedParameter_options_');
    $force = m::mock('UntypedParameter_force_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($registered = $this->getProvider($provider)) && !$force) == false (line 574)
    // if (is_string($provider)) == true (line 581)
    // if (method_exists($provider, 'register')) == true (line 585)
    // if ($this->booted) == false (line 594)

    $actual = $this->application->register($provider, $options, $force);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister7()
{
    $provider = m::mock('UntypedParameter_provider_');
    $options = m::mock('UntypedParameter_options_');
    $force = m::mock('UntypedParameter_force_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($registered = $this->getProvider($provider)) && !$force) == false (line 574)
    // if (is_string($provider)) == true (line 581)
    // if (method_exists($provider, 'register')) == true (line 585)
    // if ($this->booted) == true (line 594)

    $actual = $this->application->register($provider, $options, $force);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister8()
{
    $provider = m::mock('UntypedParameter_provider_');
    $options = m::mock('UntypedParameter_options_');
    $force = m::mock('UntypedParameter_force_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($registered = $this->getProvider($provider)) && !$force) == true (line 574)

    $actual = $this->application->register($provider, $options, $force);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetProvider0()
{
    $provider = m::mock('UntypedParameter_provider_');

    // TODO: Your mock expectations here

    $actual = $this->application->getProvider($provider);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetProviders0()
{
    $provider = m::mock('UntypedParameter_provider_');

    // TODO: Your mock expectations here

    $actual = $this->application->getProviders($provider);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolveProvider0()
{
    $provider = m::mock('UntypedParameter_provider_');

    // TODO: Your mock expectations here

    $actual = $this->application->resolveProvider($provider);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadDeferredProviders0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->loadDeferredProviders();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadDeferredProviders1()
{
    // TODO: Your mock expectations here

    $actual = $this->application->loadDeferredProviders();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadDeferredProvider0()
{
    $service = m::mock('UntypedParameter_service_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->deferredServices[$service])) == false (line 676)
    // if (!isset($this->loadedProviders[$provider])) == false (line 685)

    $actual = $this->application->loadDeferredProvider($service);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadDeferredProvider1()
{
    $service = m::mock('UntypedParameter_service_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->deferredServices[$service])) == false (line 676)
    // if (!isset($this->loadedProviders[$provider])) == true (line 685)

    $actual = $this->application->loadDeferredProvider($service);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadDeferredProvider2()
{
    $service = m::mock('UntypedParameter_service_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->deferredServices[$service])) == true (line 676)

    $actual = $this->application->loadDeferredProvider($service);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterDeferredProvider0()
{
    $provider = m::mock('UntypedParameter_provider_');
    $service = m::mock('UntypedParameter_service_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($service) == false (line 702)
    // if (!$this->booted) == false (line 708)

    $actual = $this->application->registerDeferredProvider($provider, $service);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterDeferredProvider1()
{
    $provider = m::mock('UntypedParameter_provider_');
    $service = m::mock('UntypedParameter_service_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($service) == false (line 702)
    // if (!$this->booted) == true (line 708)

    $actual = $this->application->registerDeferredProvider($provider, $service);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterDeferredProvider2()
{
    $provider = m::mock('UntypedParameter_provider_');
    $service = m::mock('UntypedParameter_service_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($service) == true (line 702)
    // if (!$this->booted) == false (line 708)

    $actual = $this->application->registerDeferredProvider($provider, $service);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterDeferredProvider3()
{
    $provider = m::mock('UntypedParameter_provider_');
    $service = m::mock('UntypedParameter_service_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($service) == true (line 702)
    // if (!$this->booted) == true (line 708)

    $actual = $this->application->registerDeferredProvider($provider, $service);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake0()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $parameters = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->deferredServices[$abstract]) && !isset($this->instances[$abstract])) == false (line 728)

    $actual = $this->application->make($abstract, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake1()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $parameters = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->deferredServices[$abstract]) && !isset($this->instances[$abstract])) == true (line 728)

    $actual = $this->application->make($abstract, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBound0()
{
    $abstract = m::mock('UntypedParameter_abstract_');

    // TODO: Your mock expectations here

    $actual = $this->application->bound($abstract);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsBooted0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->isBooted();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBoot0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->booted) == false (line 765)

    $actual = $this->application->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBoot1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->booted) == true (line 765)

    $actual = $this->application->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBooting0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->application->booting($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBooted0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isBooted()) == false (line 817)

    $actual = $this->application->booted($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBooted1()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isBooted()) == true (line 817)

    $actual = $this->application->booted($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle0()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $type = m::mock('UntypedParameter_type_');
    $catch = m::mock('UntypedParameter_catch_');

    // TODO: Your mock expectations here

    $actual = $this->application->handle($request, $type, $catch);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldSkipMiddleware0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->shouldSkipMiddleware();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCachedServicesPath0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->getCachedServicesPath();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCachedPackagesPath0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->getCachedPackagesPath();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConfigurationIsCached0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->configurationIsCached();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCachedConfigPath0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->getCachedConfigPath();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRoutesAreCached0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->routesAreCached();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCachedRoutesPath0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->getCachedRoutesPath();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsDownForMaintenance0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->isDownForMaintenance();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\HttpKernel\Exception\HttpException
 */
public function testAbort0()
{
    $code = m::mock('UntypedParameter_code_');
    $message = m::mock('UntypedParameter_message_');
    $headers = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($code == 404) == false (line 936)
    // throw new \Symfony\Component\HttpKernel\Exception\HttpException($code, $message, null, $headers) -> exception (line 940)

    $actual = $this->application->abort($code, $message, $headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
 */
public function testAbort1()
{
    $code = m::mock('UntypedParameter_code_');
    $message = m::mock('UntypedParameter_message_');
    $headers = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($code == 404) == true (line 936)
    // throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException($message) -> exception (line 937)

    $actual = $this->application->abort($code, $message, $headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTerminating0()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->application->terminating($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTerminate0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->terminate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTerminate1()
{
    // TODO: Your mock expectations here

    $actual = $this->application->terminate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLoadedProviders0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->getLoadedProviders();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDeferredServices0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->getDeferredServices();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDeferredServices0()
{
    $services = [];

    // TODO: Your mock expectations here

    $actual = $this->application->setDeferredServices($services);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddDeferredServices0()
{
    $services = [];

    // TODO: Your mock expectations here

    $actual = $this->application->addDeferredServices($services);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsDeferredService0()
{
    $service = m::mock('UntypedParameter_service_');

    // TODO: Your mock expectations here

    $actual = $this->application->isDeferredService($service);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProvideFacades0()
{
    $namespace = m::mock('UntypedParameter_namespace_');

    // TODO: Your mock expectations here

    $actual = $this->application->provideFacades($namespace);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConfigureMonologUsing0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->application->configureMonologUsing($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMonologConfigurator0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->hasMonologConfigurator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMonologConfigurator0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->getMonologConfigurator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLocale0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->getLocale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetLocale0()
{
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    $actual = $this->application->setLocale($locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsLocale0()
{
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    $actual = $this->application->isLocale($locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterCoreContainerAliases0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->registerCoreContainerAliases();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterCoreContainerAliases1()
{
    // TODO: Your mock expectations here

    $actual = $this->application->registerCoreContainerAliases();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterCoreContainerAliases2()
{
    // TODO: Your mock expectations here

    $actual = $this->application->registerCoreContainerAliases();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNamespace0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->namespace)) == false (line 1180)
    // throw new \RuntimeException('Unable to detect application namespace.') -> exception (line 1194)

    $actual = $this->application->getNamespace();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNamespace1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->namespace)) == false (line 1180)
    // throw new \RuntimeException('Unable to detect application namespace.') -> exception (line 1194)

    $actual = $this->application->getNamespace();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNamespace2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->namespace)) == false (line 1180)
    // if (realpath(app_path()) == realpath(base_path() . '/' . $pathChoice)) == false (line 1188)
    // throw new \RuntimeException('Unable to detect application namespace.') -> exception (line 1194)

    $actual = $this->application->getNamespace();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNamespace3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->namespace)) == false (line 1180)
    // if (realpath(app_path()) == realpath(base_path() . '/' . $pathChoice)) == true (line 1188)

    $actual = $this->application->getNamespace();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNamespace4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->namespace)) == true (line 1180)

    $actual = $this->application->getNamespace();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
