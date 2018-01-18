<?php

namespace tests\PHPUnit\Util;

use Mockery as m;
use PHPUnit\Util\ConfigurationGenerator;

class ConfigurationGeneratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Util\ConfigurationGenerator
*/
protected $configurationGenerator;

public function setUp()
{
    parent::setUp();

    $this->configurationGenerator = new \PHPUnit\Util\ConfigurationGenerator();
}

public function testGenerateDefaultConfiguration0()
{
    $phpunitVersion = m::mock('UntypedParameter_phpunitVersion_');
    $bootstrapScript = m::mock('UntypedParameter_bootstrapScript_');
    $testsDirectory = m::mock('UntypedParameter_testsDirectory_');
    $srcDirectory = m::mock('UntypedParameter_srcDirectory_');

    // TODO: Your mock expectations here

    $actual = $this->configurationGenerator->generateDefaultConfiguration($phpunitVersion, $bootstrapScript, $testsDirectory, $srcDirectory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
