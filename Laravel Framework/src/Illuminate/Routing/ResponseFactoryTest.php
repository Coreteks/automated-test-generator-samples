<?php

namespace tests\Illuminate\Routing;

use Illuminate\Contracts\View\Factory;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\ResponseFactory;
use Mockery as m;

class ResponseFactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_view;
/**
* @var \Mockery\MockInterface
*/
protected $_redirector;
/**
* @var \Illuminate\Routing\ResponseFactory
*/
protected $responseFactory;

public function setUp()
{
    parent::setUp();

    $this->_view = m::mock(\Illuminate\Contracts\View\Factory::class);
    $this->_redirector = m::mock(\Illuminate\Routing\Redirector::class);
    $this->responseFactory = new \Illuminate\Routing\ResponseFactory($this->_view, $this->_redirector);
}

public function testMake0()
{
    $content = m::mock('UntypedParameter_content_');
    $status = m::mock('UntypedParameter_status_');
    $headers = [];

    // TODO: Your mock expectations here

    $actual = $this->responseFactory->make($content, $status, $headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testView0()
{
    $view = m::mock('UntypedParameter_view_');
    $data = m::mock('UntypedParameter_data_');
    $status = m::mock('UntypedParameter_status_');
    $headers = [];

    // TODO: Your mock expectations here

    $actual = $this->responseFactory->view($view, $data, $status, $headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJson0()
{
    $data = m::mock('UntypedParameter_data_');
    $status = m::mock('UntypedParameter_status_');
    $headers = [];
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->responseFactory->json($data, $status, $headers, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJsonp0()
{
    $callback = m::mock('UntypedParameter_callback_');
    $data = m::mock('UntypedParameter_data_');
    $status = m::mock('UntypedParameter_status_');
    $headers = [];
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->responseFactory->jsonp($callback, $data, $status, $headers, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream0()
{
    $callback = m::mock('UntypedParameter_callback_');
    $status = m::mock('UntypedParameter_status_');
    $headers = [];

    // TODO: Your mock expectations here

    $actual = $this->responseFactory->stream($callback, $status, $headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDownload0()
{
    $file = m::mock('UntypedParameter_file_');
    $name = m::mock('UntypedParameter_name_');
    $headers = [];
    $disposition = m::mock('UntypedParameter_disposition_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($name)) == false (line 127)

    $actual = $this->responseFactory->download($file, $name, $headers, $disposition);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDownload1()
{
    $file = m::mock('UntypedParameter_file_');
    $name = m::mock('UntypedParameter_name_');
    $headers = [];
    $disposition = m::mock('UntypedParameter_disposition_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($name)) == true (line 127)

    $actual = $this->responseFactory->download($file, $name, $headers, $disposition);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFile0()
{
    $file = m::mock('UntypedParameter_file_');
    $headers = [];

    // TODO: Your mock expectations here

    $actual = $this->responseFactory->file($file, $headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRedirectTo0()
{
    $path = m::mock('UntypedParameter_path_');
    $status = m::mock('UntypedParameter_status_');
    $headers = m::mock('UntypedParameter_headers_');
    $secure = m::mock('UntypedParameter_secure_');

    // TODO: Your mock expectations here

    $actual = $this->responseFactory->redirectTo($path, $status, $headers, $secure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRedirectToRoute0()
{
    $route = m::mock('UntypedParameter_route_');
    $parameters = m::mock('UntypedParameter_parameters_');
    $status = m::mock('UntypedParameter_status_');
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    $actual = $this->responseFactory->redirectToRoute($route, $parameters, $status, $headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRedirectToAction0()
{
    $action = m::mock('UntypedParameter_action_');
    $parameters = m::mock('UntypedParameter_parameters_');
    $status = m::mock('UntypedParameter_status_');
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    $actual = $this->responseFactory->redirectToAction($action, $parameters, $status, $headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRedirectGuest0()
{
    $path = m::mock('UntypedParameter_path_');
    $status = m::mock('UntypedParameter_status_');
    $headers = m::mock('UntypedParameter_headers_');
    $secure = m::mock('UntypedParameter_secure_');

    // TODO: Your mock expectations here

    $actual = $this->responseFactory->redirectGuest($path, $status, $headers, $secure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRedirectToIntended0()
{
    $default = m::mock('UntypedParameter_default_');
    $status = m::mock('UntypedParameter_status_');
    $headers = m::mock('UntypedParameter_headers_');
    $secure = m::mock('UntypedParameter_secure_');

    // TODO: Your mock expectations here

    $actual = $this->responseFactory->redirectToIntended($default, $status, $headers, $secure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
