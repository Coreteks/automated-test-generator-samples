<?php

namespace tests\PHPUnit\Framework;

use Mockery as m;
use PHPUnit\Framework\MissingCoversAnnotationException;

class MissingCoversAnnotationExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\MissingCoversAnnotationException
*/
protected $missingCoversAnnotationException;

public function setUp()
{
    parent::setUp();

    $this->missingCoversAnnotationException = new \PHPUnit\Framework\MissingCoversAnnotationException();
}
}
