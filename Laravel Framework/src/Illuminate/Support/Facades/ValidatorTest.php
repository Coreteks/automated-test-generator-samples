<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Validator;
use Mockery as m;

class ValidatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Validator
*/
protected $validator;

public function setUp()
{
    parent::setUp();

    $this->validator = new \Illuminate\Support\Facades\Validator();
}
}
