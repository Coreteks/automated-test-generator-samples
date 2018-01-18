<?php

namespace tests\PHPUnit\Util;

use Mockery as m;
use PHPUnit\Util\GlobalState;

class GlobalStateTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Util\GlobalState
*/
protected $globalState;

public function setUp()
{
    parent::setUp();

    $this->globalState = new \PHPUnit\Util\GlobalState();
}

public function testGetIncludedFilesAsString0()
{
    // TODO: Your mock expectations here

    $actual = $this->globalState->getIncludedFilesAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessIncludedFilesAsString0()
{
    $files = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR__')) == false (line 45)
    // for (...) == false (line 49)

    $actual = $this->globalState->processIncludedFilesAsString($files);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessIncludedFilesAsString1()
{
    $files = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR__')) == false (line 45)
    // for (...) == true (line 49)
    // if (!empty($GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST']) && \in_array($file, $GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST'])) == false (line 52)
    // if ($prefix !== false && \strpos($file, $prefix) === 0) == false (line 57)
    // if (\preg_match('/^(vfs|phpvfs[a-z0-9]+):/', $file)) == false (line 62)
    // if (!$blacklist->isBlacklisted($file) && \is_file($file)) == false (line 66)
    // for (...) == false (line 49)

    $actual = $this->globalState->processIncludedFilesAsString($files);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessIncludedFilesAsString2()
{
    $files = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR__')) == false (line 45)
    // for (...) == true (line 49)
    // if (!empty($GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST']) && \in_array($file, $GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST'])) == false (line 52)
    // if ($prefix !== false && \strpos($file, $prefix) === 0) == false (line 57)
    // if (\preg_match('/^(vfs|phpvfs[a-z0-9]+):/', $file)) == false (line 62)
    // if (!$blacklist->isBlacklisted($file) && \is_file($file)) == true (line 66)
    // for (...) == false (line 49)

    $actual = $this->globalState->processIncludedFilesAsString($files);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessIncludedFilesAsString3()
{
    $files = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR__')) == false (line 45)
    // for (...) == true (line 49)
    // if (!empty($GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST']) && \in_array($file, $GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST'])) == false (line 52)
    // if ($prefix !== false && \strpos($file, $prefix) === 0) == false (line 57)
    // if (\preg_match('/^(vfs|phpvfs[a-z0-9]+):/', $file)) == true (line 62)
    // for (...) == false (line 49)

    $actual = $this->globalState->processIncludedFilesAsString($files);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessIncludedFilesAsString4()
{
    $files = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR__')) == false (line 45)
    // for (...) == true (line 49)
    // if (!empty($GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST']) && \in_array($file, $GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST'])) == false (line 52)
    // if ($prefix !== false && \strpos($file, $prefix) === 0) == true (line 57)
    // for (...) == false (line 49)

    $actual = $this->globalState->processIncludedFilesAsString($files);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessIncludedFilesAsString5()
{
    $files = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR__')) == false (line 45)
    // for (...) == true (line 49)
    // if (!empty($GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST']) && \in_array($file, $GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST'])) == true (line 52)
    // for (...) == false (line 49)

    $actual = $this->globalState->processIncludedFilesAsString($files);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessIncludedFilesAsString6()
{
    $files = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR__')) == true (line 45)
    // for (...) == false (line 49)

    $actual = $this->globalState->processIncludedFilesAsString($files);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessIncludedFilesAsString7()
{
    $files = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR__')) == true (line 45)
    // for (...) == true (line 49)
    // if (!empty($GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST']) && \in_array($file, $GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST'])) == false (line 52)
    // if ($prefix !== false && \strpos($file, $prefix) === 0) == false (line 57)
    // if (\preg_match('/^(vfs|phpvfs[a-z0-9]+):/', $file)) == false (line 62)
    // if (!$blacklist->isBlacklisted($file) && \is_file($file)) == false (line 66)
    // for (...) == false (line 49)

    $actual = $this->globalState->processIncludedFilesAsString($files);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessIncludedFilesAsString8()
{
    $files = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR__')) == true (line 45)
    // for (...) == true (line 49)
    // if (!empty($GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST']) && \in_array($file, $GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST'])) == false (line 52)
    // if ($prefix !== false && \strpos($file, $prefix) === 0) == false (line 57)
    // if (\preg_match('/^(vfs|phpvfs[a-z0-9]+):/', $file)) == false (line 62)
    // if (!$blacklist->isBlacklisted($file) && \is_file($file)) == true (line 66)
    // for (...) == false (line 49)

    $actual = $this->globalState->processIncludedFilesAsString($files);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessIncludedFilesAsString9()
{
    $files = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR__')) == true (line 45)
    // for (...) == true (line 49)
    // if (!empty($GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST']) && \in_array($file, $GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST'])) == false (line 52)
    // if ($prefix !== false && \strpos($file, $prefix) === 0) == false (line 57)
    // if (\preg_match('/^(vfs|phpvfs[a-z0-9]+):/', $file)) == true (line 62)
    // for (...) == false (line 49)

    $actual = $this->globalState->processIncludedFilesAsString($files);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessIncludedFilesAsString10()
{
    $files = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR__')) == true (line 45)
    // for (...) == true (line 49)
    // if (!empty($GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST']) && \in_array($file, $GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST'])) == false (line 52)
    // if ($prefix !== false && \strpos($file, $prefix) === 0) == true (line 57)
    // for (...) == false (line 49)

    $actual = $this->globalState->processIncludedFilesAsString($files);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessIncludedFilesAsString11()
{
    $files = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('__PHPUNIT_PHAR__')) == true (line 45)
    // for (...) == true (line 49)
    // if (!empty($GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST']) && \in_array($file, $GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST'])) == true (line 52)
    // for (...) == false (line 49)

    $actual = $this->globalState->processIncludedFilesAsString($files);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetIniSettingsAsString0()
{
    // TODO: Your mock expectations here

    $actual = $this->globalState->getIniSettingsAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetIniSettingsAsString1()
{
    // TODO: Your mock expectations here

    $actual = $this->globalState->getIniSettingsAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConstantsAsString0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($constants['user'])) == false (line 95)

    $actual = $this->globalState->getConstantsAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConstantsAsString1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($constants['user'])) == true (line 95)

    $actual = $this->globalState->getConstantsAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConstantsAsString2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($constants['user'])) == true (line 95)

    $actual = $this->globalState->getConstantsAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetGlobalsAsString0()
{
    // TODO: Your mock expectations here

    $actual = $this->globalState->getGlobalsAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetGlobalsAsString1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$GLOBALS[$key] instanceof \Closure && !\in_array($key, $blacklist)) == false (line 134)

    $actual = $this->globalState->getGlobalsAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetGlobalsAsString2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$GLOBALS[$key] instanceof \Closure && !\in_array($key, $blacklist)) == true (line 134)

    $actual = $this->globalState->getGlobalsAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetGlobalsAsString3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($GLOBALS[$superGlobalArray]) && \is_array($GLOBALS[$superGlobalArray])) == false (line 114)

    $actual = $this->globalState->getGlobalsAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetGlobalsAsString4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($GLOBALS[$superGlobalArray]) && \is_array($GLOBALS[$superGlobalArray])) == false (line 114)
    // if (!$GLOBALS[$key] instanceof \Closure && !\in_array($key, $blacklist)) == false (line 134)

    $actual = $this->globalState->getGlobalsAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetGlobalsAsString5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($GLOBALS[$superGlobalArray]) && \is_array($GLOBALS[$superGlobalArray])) == false (line 114)
    // if (!$GLOBALS[$key] instanceof \Closure && !\in_array($key, $blacklist)) == true (line 134)

    $actual = $this->globalState->getGlobalsAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetGlobalsAsString6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($GLOBALS[$superGlobalArray]) && \is_array($GLOBALS[$superGlobalArray])) == true (line 114)

    $actual = $this->globalState->getGlobalsAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetGlobalsAsString7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($GLOBALS[$superGlobalArray]) && \is_array($GLOBALS[$superGlobalArray])) == true (line 114)
    // if (!$GLOBALS[$key] instanceof \Closure && !\in_array($key, $blacklist)) == false (line 134)

    $actual = $this->globalState->getGlobalsAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetGlobalsAsString8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($GLOBALS[$superGlobalArray]) && \is_array($GLOBALS[$superGlobalArray])) == true (line 114)
    // if (!$GLOBALS[$key] instanceof \Closure && !\in_array($key, $blacklist)) == true (line 134)

    $actual = $this->globalState->getGlobalsAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetGlobalsAsString9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($GLOBALS[$superGlobalArray]) && \is_array($GLOBALS[$superGlobalArray])) == true (line 114)
    // if ($GLOBALS[$superGlobalArray][$key] instanceof \Closure) == false (line 116)

    $actual = $this->globalState->getGlobalsAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetGlobalsAsString10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($GLOBALS[$superGlobalArray]) && \is_array($GLOBALS[$superGlobalArray])) == true (line 114)
    // if ($GLOBALS[$superGlobalArray][$key] instanceof \Closure) == false (line 116)
    // if (!$GLOBALS[$key] instanceof \Closure && !\in_array($key, $blacklist)) == false (line 134)

    $actual = $this->globalState->getGlobalsAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetGlobalsAsString11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($GLOBALS[$superGlobalArray]) && \is_array($GLOBALS[$superGlobalArray])) == true (line 114)
    // if ($GLOBALS[$superGlobalArray][$key] instanceof \Closure) == false (line 116)
    // if (!$GLOBALS[$key] instanceof \Closure && !\in_array($key, $blacklist)) == true (line 134)

    $actual = $this->globalState->getGlobalsAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetGlobalsAsString12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($GLOBALS[$superGlobalArray]) && \is_array($GLOBALS[$superGlobalArray])) == true (line 114)
    // if ($GLOBALS[$superGlobalArray][$key] instanceof \Closure) == true (line 116)

    $actual = $this->globalState->getGlobalsAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetGlobalsAsString13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($GLOBALS[$superGlobalArray]) && \is_array($GLOBALS[$superGlobalArray])) == true (line 114)
    // if ($GLOBALS[$superGlobalArray][$key] instanceof \Closure) == true (line 116)
    // if (!$GLOBALS[$key] instanceof \Closure && !\in_array($key, $blacklist)) == false (line 134)

    $actual = $this->globalState->getGlobalsAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetGlobalsAsString14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($GLOBALS[$superGlobalArray]) && \is_array($GLOBALS[$superGlobalArray])) == true (line 114)
    // if ($GLOBALS[$superGlobalArray][$key] instanceof \Closure) == true (line 116)
    // if (!$GLOBALS[$key] instanceof \Closure && !\in_array($key, $blacklist)) == true (line 134)

    $actual = $this->globalState->getGlobalsAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
