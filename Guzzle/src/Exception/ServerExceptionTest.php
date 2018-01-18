<?php

namespace tests\GuzzleHttp\Exception;

use GuzzleHttp\Exception\ServerException;
use Mockery as m;

class ServerExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \GuzzleHttp\Exception\ServerException
*/
protected $serverException;

public function setUp()
{
    parent::setUp();

    $this->serverException = new \GuzzleHttp\Exception\ServerException();
}
}
