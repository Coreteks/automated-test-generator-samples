<?php

namespace tests\GuzzleHttp;

use GuzzleHttp\RequestOptions;
use Mockery as m;

class RequestOptionsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \GuzzleHttp\RequestOptions
*/
protected $requestOptions;

public function setUp()
{
    parent::setUp();

    $this->requestOptions = new \GuzzleHttp\RequestOptions();
}
}
