<?php

namespace tests\Ramsey\Uuid;

use Mockery as m;
use Ramsey\Uuid\BinaryUtils;

class BinaryUtilsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\BinaryUtils
*/
protected $binaryUtils;

public function setUp()
{
    parent::setUp();

    $this->binaryUtils = new \Ramsey\Uuid\BinaryUtils();
}

public function testApplyVariant0()
{
    $clockSeqHi = m::mock('UntypedParameter_clockSeqHi_');

    // TODO: Your mock expectations here

    $actual = $this->binaryUtils->applyVariant($clockSeqHi);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApplyVersion0()
{
    $timeHi = m::mock('UntypedParameter_timeHi_');
    $version = m::mock('UntypedParameter_version_');

    // TODO: Your mock expectations here

    $actual = $this->binaryUtils->applyVersion($timeHi, $version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
