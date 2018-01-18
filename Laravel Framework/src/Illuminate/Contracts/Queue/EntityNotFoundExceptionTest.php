<?php

namespace tests\Illuminate\Contracts\Queue;

use Illuminate\Contracts\Queue\EntityNotFoundException;
use Mockery as m;

class EntityNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_type = null;
/**
* @var mixed
*/
protected $_id = null;
/**
* @var \Illuminate\Contracts\Queue\EntityNotFoundException
*/
protected $entityNotFoundException;

public function setUp()
{
    parent::setUp();

    $this->_type = null;
    $this->_id = null;
    $this->entityNotFoundException = new \Illuminate\Contracts\Queue\EntityNotFoundException($this->_type, $this->_id);
}
}
