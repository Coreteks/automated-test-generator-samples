<?php

namespace tests\GuzzleHttp\Exception;

use GuzzleHttp\Exception\ClientException;
use Mockery as m;

class ClientExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \GuzzleHttp\Exception\ClientException
*/
protected $clientException;

public function setUp()
{
    parent::setUp();

    $this->clientException = new \GuzzleHttp\Exception\ClientException();
}
}
