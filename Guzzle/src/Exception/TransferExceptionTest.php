<?php

namespace tests\GuzzleHttp\Exception;

use GuzzleHttp\Exception\TransferException;
use Mockery as m;

class TransferExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \GuzzleHttp\Exception\TransferException
*/
protected $transferException;

public function setUp()
{
    parent::setUp();

    $this->transferException = new \GuzzleHttp\Exception\TransferException();
}
}
