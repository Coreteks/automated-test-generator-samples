<?php

namespace tests\GuzzleHttp\Exception;

use GuzzleHttp\Exception\TooManyRedirectsException;
use Mockery as m;

class TooManyRedirectsExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \GuzzleHttp\Exception\TooManyRedirectsException
*/
protected $tooManyRedirectsException;

public function setUp()
{
    parent::setUp();

    $this->tooManyRedirectsException = new \GuzzleHttp\Exception\TooManyRedirectsException();
}
}
