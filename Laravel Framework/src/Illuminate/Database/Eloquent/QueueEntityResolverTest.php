<?php

namespace tests\Illuminate\Database\Eloquent;

use Illuminate\Database\Eloquent\QueueEntityResolver;
use Mockery as m;

class QueueEntityResolverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Eloquent\QueueEntityResolver
*/
protected $queueEntityResolver;

public function setUp()
{
    parent::setUp();

    $this->queueEntityResolver = new \Illuminate\Database\Eloquent\QueueEntityResolver();
}

/**
 * @expectedException \Illuminate\Contracts\Queue\EntityNotFoundException
 */
public function testResolve0()
{
    $type = m::mock('UntypedParameter_type_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($instance) == false (line 23)
    // throw new \Illuminate\Contracts\Queue\EntityNotFoundException($type, $id) -> exception (line 27)

    $actual = $this->queueEntityResolver->resolve($type, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve1()
{
    $type = m::mock('UntypedParameter_type_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($instance) == true (line 23)

    $actual = $this->queueEntityResolver->resolve($type, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
