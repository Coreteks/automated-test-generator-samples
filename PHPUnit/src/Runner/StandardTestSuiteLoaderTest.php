<?php

namespace tests\PHPUnit\Runner;

use Mockery as m;
use PHPUnit\Runner\StandardTestSuiteLoader;

class StandardTestSuiteLoaderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Runner\StandardTestSuiteLoader
*/
protected $standardTestSuiteLoader;

public function setUp()
{
    parent::setUp();

    $this->standardTestSuiteLoader = new \PHPUnit\Runner\StandardTestSuiteLoader();
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad0()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad1()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad2()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad3()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad4()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad5()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad6()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad7()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad8()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad9()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad10()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad11()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad12()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad13()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad14()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad15()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad16()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad17()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad18()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad19()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad20()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad21()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad22()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad23()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad24()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad25()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad26()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad27()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad28()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad29()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad30()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad31()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad32()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad33()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad34()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad35()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad36()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad37()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad38()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad39()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad40()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad41()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad42()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad43()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad44()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad45()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad46()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad47()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad48()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad49()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad50()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad51()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad52()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad53()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad54()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad55()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad56()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad57()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad58()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad59()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad60()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad61()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad62()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad63()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad64()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad65()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad66()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad67()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad68()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad69()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad70()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad71()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad72()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad73()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad74()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad75()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad76()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad77()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad78()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad79()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad80()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad81()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad82()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad83()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad84()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad85()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad86()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad87()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad88()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad89()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad90()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad91()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad92()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad93()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad94()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad95()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad96()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad97()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad98()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad99()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad100()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad101()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad102()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad103()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad104()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad105()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad106()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad107()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad108()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad109()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad110()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad111()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad112()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad113()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad114()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad115()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad116()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad117()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad118()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad119()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad120()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad121()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad122()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad123()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad124()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad125()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad126()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad127()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad128()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad129()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad130()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad131()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad132()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad133()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad134()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad135()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad136()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad137()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad138()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad139()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad140()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad141()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad142()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad143()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad144()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad145()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad146()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad147()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad148()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad149()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad150()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad151()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad152()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad153()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad154()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad155()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad156()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad157()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad158()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad159()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad160()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad161()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad162()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad163()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad164()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad165()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad166()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad167()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad168()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad169()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad170()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad171()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad172()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad173()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad174()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad175()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad176()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad177()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad178()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad179()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad180()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad181()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad182()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad183()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad184()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad185()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad186()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad187()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad188()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad189()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad190()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad191()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad192()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad193()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad194()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad195()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad196()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad197()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad198()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad199()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad200()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad201()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad202()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad203()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad204()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad205()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad206()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad207()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad208()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad209()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad210()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad211()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad212()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad213()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad214()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad215()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad216()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad217()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad218()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad219()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad220()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad221()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad222()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad223()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad224()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad225()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad226()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad227()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad228()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad229()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad230()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad231()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad232()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad233()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad234()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad235()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad236()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad237()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad238()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad239()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad240()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad241()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad242()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad243()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad244()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad245()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad246()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad247()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad248()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad249()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad250()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad251()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad252()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad253()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad254()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad255()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad256()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad257()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad258()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad259()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad260()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad261()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad262()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad263()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == false (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad264()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad265()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad266()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad267()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad268()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad269()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad270()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad271()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad272()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad273()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad274()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad275()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad276()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad277()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad278()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad279()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad280()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad281()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad282()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad283()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad284()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad285()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad286()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad287()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad288()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad289()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad290()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad291()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad292()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad293()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad294()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad295()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad296()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad297()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad298()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad299()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad300()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad301()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad302()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad303()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad304()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad305()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad306()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad307()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad308()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad309()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad310()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad311()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad312()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad313()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad314()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad315()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad316()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad317()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad318()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad319()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad320()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad321()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad322()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad323()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad324()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad325()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad326()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad327()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad328()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad329()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad330()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad331()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad332()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad333()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad334()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad335()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad336()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad337()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad338()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad339()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad340()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad341()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad342()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad343()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad344()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad345()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad346()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad347()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad348()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad349()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad350()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad351()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad352()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad353()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad354()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad355()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad356()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad357()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad358()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad359()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad360()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad361()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad362()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad363()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad364()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad365()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad366()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad367()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad368()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad369()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad370()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad371()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad372()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad373()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad374()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad375()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad376()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad377()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad378()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad379()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad380()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad381()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad382()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad383()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad384()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad385()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad386()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad387()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad388()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad389()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad390()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad391()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad392()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad393()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad394()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad395()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == false (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad396()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad397()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad398()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad399()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad400()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad401()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad402()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad403()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad404()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad405()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad406()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad407()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad408()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad409()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad410()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad411()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad412()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad413()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad414()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad415()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad416()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad417()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad418()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad419()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad420()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad421()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad422()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad423()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad424()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad425()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad426()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad427()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad428()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad429()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad430()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad431()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad432()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad433()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad434()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad435()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad436()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad437()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad438()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad439()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad440()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad441()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad442()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad443()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad444()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad445()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad446()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad447()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad448()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad449()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad450()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad451()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad452()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad453()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad454()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad455()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad456()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad457()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad458()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad459()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad460()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad461()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad462()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad463()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad464()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad465()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad466()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad467()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad468()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad469()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad470()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad471()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad472()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad473()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad474()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad475()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad476()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad477()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad478()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad479()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad480()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad481()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad482()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad483()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad484()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad485()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad486()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad487()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad488()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad489()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad490()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad491()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad492()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad493()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad494()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == false (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad495()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad496()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad497()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == false (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad498()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad499()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad500()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad501()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad502()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad503()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad504()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad505()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad506()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad507()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad508()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad509()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad510()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad511()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad512()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == false (line 72)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad513()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad514()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad515()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == false (line 81)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad516()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad517()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad518()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == false (line 84)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad519()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad520()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad521()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad522()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad523()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad524()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == false (line 76)
    // if ($class->hasMethod('suite')) == true (line 81)
    // if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) == true (line 84)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 87)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad525()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == false (line 95)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Runner\Exception
 */
public function testLoad526()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == false (line 98)
    // throw new \PHPUnit\Runner\Exception(\sprintf("Class '%s' could not be found in '%s'.", $suiteClassName, $suiteClassFile)) -> exception (line 103)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad527()
{
    $suiteClassName = m::mock('UntypedParameter_suiteClassName_');
    $suiteClassFile = m::mock('UntypedParameter_suiteClassFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteClassFile)) == true (line 35)
    // if (!\class_exists($suiteClassName, false)) == true (line 41)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 51)
    // if (\substr($loadedClass, $offset) === $suiteClassName && $class->getFileName() == $filename) == true (line 56)
    // if (!\class_exists($suiteClassName, false) && !empty($loadedClasses)) == true (line 65)
    // if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) == true (line 72)
    // if ($classFile == \realpath($suiteClassFile)) == true (line 76)
    // if (\class_exists($suiteClassName, false)) == true (line 95)
    // if ($class->getFileName() == \realpath($suiteClassFile)) == true (line 98)

    $actual = $this->standardTestSuiteLoader->load($suiteClassName, $suiteClassFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReload0()
{
    $aClass = m::mock(\ReflectionClass::class);

    // TODO: Your mock expectations here

    $actual = $this->standardTestSuiteLoader->reload($aClass);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
