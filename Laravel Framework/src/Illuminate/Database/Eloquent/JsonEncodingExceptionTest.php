<?php

namespace tests\Illuminate\Database\Eloquent;

use Illuminate\Database\Eloquent\JsonEncodingException;
use Mockery as m;

class JsonEncodingExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Eloquent\JsonEncodingException
*/
protected $jsonEncodingException;

public function setUp()
{
    parent::setUp();

    $this->jsonEncodingException = new \Illuminate\Database\Eloquent\JsonEncodingException();
}

public function testForModel0()
{
    $model = m::mock('UntypedParameter_model_');
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    $actual = $this->jsonEncodingException->forModel($model, $message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForAttribute0()
{
    $model = m::mock('UntypedParameter_model_');
    $key = m::mock('UntypedParameter_key_');
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    $actual = $this->jsonEncodingException->forAttribute($model, $key, $message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
