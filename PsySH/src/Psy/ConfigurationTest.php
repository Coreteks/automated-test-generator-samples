<?php

namespace tests\Psy;

use Mockery as m;
use Psy\Configuration;

class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_config = [];
/**
* @var \Psy\Configuration
*/
protected $configuration;

public function setUp()
{
    parent::setUp();

    $this->_config = [];
    $this->configuration = new \Psy\Configuration($this->_config);
}

public function testInit0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($configFile = $this->getConfigFile()) == false (line 156)
    // if (!$this->configFile && ($localConfig = $this->getLocalConfigFile())) == false (line 160)

    $actual = $this->configuration->init();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInit1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($configFile = $this->getConfigFile()) == false (line 156)
    // if (!$this->configFile && ($localConfig = $this->getLocalConfigFile())) == true (line 160)

    $actual = $this->configuration->init();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInit2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($configFile = $this->getConfigFile()) == true (line 156)
    // if (!$this->configFile && ($localConfig = $this->getLocalConfigFile())) == false (line 160)

    $actual = $this->configuration->init();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInit3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($configFile = $this->getConfigFile()) == true (line 156)
    // if (!$this->configFile && ($localConfig = $this->getLocalConfigFile())) == true (line 160)

    $actual = $this->configuration->init();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConfigFile0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->configFile)) == false (line 181)
    // if (!empty($files)) == false (line 187)

    $actual = $this->configuration->getConfigFile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConfigFile1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->configFile)) == false (line 181)
    // if (!empty($files)) == true (line 187)
    // if ($this->warnOnMultipleConfigs && count($files) > 1) == false (line 188)

    $actual = $this->configuration->getConfigFile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConfigFile2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->configFile)) == false (line 181)
    // if (!empty($files)) == true (line 187)
    // if ($this->warnOnMultipleConfigs && count($files) > 1) == true (line 188)

    $actual = $this->configuration->getConfigFile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConfigFile3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->configFile)) == true (line 181)

    $actual = $this->configuration->getConfigFile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLocalConfigFile0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (@is_file($localConfig)) == false (line 209)

    $actual = $this->configuration->getLocalConfigFile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLocalConfigFile1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (@is_file($localConfig)) == true (line 209)

    $actual = $this->configuration->getLocalConfigFile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadConfig0()
{
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->configuration->loadConfig($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadConfig1()
{
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options[$option])) == false (line 229)

    $actual = $this->configuration->loadConfig($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadConfig2()
{
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options[$option])) == true (line 229)

    $actual = $this->configuration->loadConfig($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadConfig3()
{
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options[$option])) == false (line 222)

    $actual = $this->configuration->loadConfig($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadConfig4()
{
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options[$option])) == false (line 222)
    // if (isset($options[$option])) == false (line 229)

    $actual = $this->configuration->loadConfig($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadConfig5()
{
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options[$option])) == false (line 222)
    // if (isset($options[$option])) == true (line 229)

    $actual = $this->configuration->loadConfig($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadConfig6()
{
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options[$option])) == true (line 222)

    $actual = $this->configuration->loadConfig($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadConfig7()
{
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options[$option])) == true (line 222)
    // if (isset($options[$option])) == false (line 229)

    $actual = $this->configuration->loadConfig($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadConfig8()
{
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options[$option])) == true (line 222)
    // if (isset($options[$option])) == true (line 229)

    $actual = $this->configuration->loadConfig($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadConfigFile0()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($result)) == false (line 258)

    $actual = $this->configuration->loadConfigFile($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testLoadConfigFile1()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($result)) == true (line 258)
    // if (is_array($result)) == false (line 259)
    // throw new \InvalidArgumentException('Psy Shell configuration must return an array of options') -> exception (line 262)

    $actual = $this->configuration->loadConfigFile($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadConfigFile2()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($result)) == true (line 258)
    // if (is_array($result)) == true (line 259)

    $actual = $this->configuration->loadConfigFile($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDefaultIncludes0()
{
    $includes = [];

    // TODO: Your mock expectations here

    $actual = $this->configuration->setDefaultIncludes($includes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultIncludes0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->getDefaultIncludes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetConfigDir0()
{
    $dir = m::mock('UntypedParameter_dir_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->setConfigDir($dir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConfigDir0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->getConfigDir();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDataDir0()
{
    $dir = m::mock('UntypedParameter_dir_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->setDataDir($dir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDataDir0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->getDataDir();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRuntimeDir0()
{
    $dir = m::mock('UntypedParameter_dir_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->setRuntimeDir($dir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRuntimeDir0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->runtimeDir)) == false (line 347)
    // if (!is_dir($this->runtimeDir)) == false (line 351)

    $actual = $this->configuration->getRuntimeDir();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRuntimeDir1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->runtimeDir)) == false (line 347)
    // if (!is_dir($this->runtimeDir)) == true (line 351)

    $actual = $this->configuration->getRuntimeDir();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRuntimeDir2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->runtimeDir)) == true (line 347)
    // if (!is_dir($this->runtimeDir)) == false (line 351)

    $actual = $this->configuration->getRuntimeDir();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRuntimeDir3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->runtimeDir)) == true (line 347)
    // if (!is_dir($this->runtimeDir)) == true (line 351)

    $actual = $this->configuration->getRuntimeDir();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetHistoryFile0()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->setHistoryFile($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHistoryFile0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->historyFile)) == false (line 378)
    // if (@is_file($oldHistory)) == false (line 386)
    // if (!empty($files)) == false (line 403)

    $actual = $this->configuration->getHistoryFile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHistoryFile1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->historyFile)) == false (line 378)
    // if (@is_file($oldHistory)) == false (line 386)
    // if (!empty($files)) == true (line 403)
    // if ($this->warnOnMultipleConfigs && count($files) > 1) == false (line 404)

    $actual = $this->configuration->getHistoryFile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHistoryFile2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->historyFile)) == false (line 378)
    // if (@is_file($oldHistory)) == false (line 386)
    // if (!empty($files)) == true (line 403)
    // if ($this->warnOnMultipleConfigs && count($files) > 1) == true (line 404)

    $actual = $this->configuration->getHistoryFile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHistoryFile3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->historyFile)) == false (line 378)
    // if (@is_file($oldHistory)) == true (line 386)

    $actual = $this->configuration->getHistoryFile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHistoryFile4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->historyFile)) == true (line 378)

    $actual = $this->configuration->getHistoryFile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetHistorySize0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->setHistorySize($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHistorySize0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->getHistorySize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetEraseDuplicates0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->setEraseDuplicates($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEraseDuplicates0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->getEraseDuplicates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTempFile0()
{
    $type = m::mock('UntypedParameter_type_');
    $pid = m::mock('UntypedParameter_pid_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->getTempFile($type, $pid);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPipe0()
{
    $type = m::mock('UntypedParameter_type_');
    $pid = m::mock('UntypedParameter_pid_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->getPipe($type, $pid);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasReadline0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->hasReadline();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetUseReadline0()
{
    $useReadline = m::mock('UntypedParameter_useReadline_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->setUseReadline($useReadline);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUseReadline0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->useReadline();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetReadline0()
{
    $readline = m::mock(\Psy\Readline\Readline::class);

    // TODO: Your mock expectations here

    $actual = $this->configuration->setReadline($readline);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReadline0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->readline)) == false (line 547)

    $actual = $this->configuration->getReadline();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReadline1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->readline)) == true (line 547)

    $actual = $this->configuration->getReadline();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetUseBracketedPaste0()
{
    $useBracketedPaste = m::mock('UntypedParameter_useBracketedPaste_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->setUseBracketedPaste($useBracketedPaste);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUseBracketedPaste0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->useBracketedPaste();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasPcntl0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->hasPcntl();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetUsePcntl0()
{
    $usePcntl = m::mock('UntypedParameter_usePcntl_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->setUsePcntl($usePcntl);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUsePcntl0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->usePcntl();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRequireSemicolons0()
{
    $requireSemicolons = m::mock('UntypedParameter_requireSemicolons_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->setRequireSemicolons($requireSemicolons);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequireSemicolons0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->requireSemicolons();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetUseUnicode0()
{
    $useUnicode = m::mock('UntypedParameter_useUnicode_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->setUseUnicode($useUnicode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUseUnicode0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->useUnicode)) == false (line 701)

    $actual = $this->configuration->useUnicode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUseUnicode1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->useUnicode)) == true (line 701)

    $actual = $this->configuration->useUnicode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetErrorLoggingLevel0()
{
    $errorLoggingLevel = m::mock('UntypedParameter_errorLoggingLevel_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->setErrorLoggingLevel($errorLoggingLevel);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testErrorLoggingLevel0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->errorLoggingLevel();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetCodeCleaner0()
{
    $cleaner = m::mock(\Psy\CodeCleaner::class);

    // TODO: Your mock expectations here

    $actual = $this->configuration->setCodeCleaner($cleaner);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCodeCleaner0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->cleaner)) == false (line 760)

    $actual = $this->configuration->getCodeCleaner();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCodeCleaner1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->cleaner)) == true (line 760)

    $actual = $this->configuration->getCodeCleaner();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetTabCompletion0()
{
    $tabCompletion = m::mock('UntypedParameter_tabCompletion_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->setTabCompletion($tabCompletion);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTabCompletion0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->getTabCompletion();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetOutput0()
{
    $output = m::mock(\Psy\Output\ShellOutput::class);

    // TODO: Your mock expectations here

    $actual = $this->configuration->setOutput($output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetOutput0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->output)) == false (line 812)

    $actual = $this->configuration->getOutput();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetOutput1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->output)) == true (line 812)

    $actual = $this->configuration->getOutput();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetOutputDecorated0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->colorMode() === self::COLOR_MODE_AUTO) == false (line 831)
    // if ($this->colorMode() === self::COLOR_MODE_FORCED) == false (line 833)
    // if ($this->colorMode() === self::COLOR_MODE_DISABLED) == false (line 835)

    $actual = $this->configuration->getOutputDecorated();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetOutputDecorated1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->colorMode() === self::COLOR_MODE_AUTO) == false (line 831)
    // if ($this->colorMode() === self::COLOR_MODE_FORCED) == false (line 833)
    // if ($this->colorMode() === self::COLOR_MODE_DISABLED) == true (line 835)

    $actual = $this->configuration->getOutputDecorated();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetOutputDecorated2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->colorMode() === self::COLOR_MODE_AUTO) == false (line 831)
    // if ($this->colorMode() === self::COLOR_MODE_FORCED) == true (line 833)

    $actual = $this->configuration->getOutputDecorated();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetOutputDecorated3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->colorMode() === self::COLOR_MODE_AUTO) == true (line 831)

    $actual = $this->configuration->getOutputDecorated();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetPager0()
{
    $pager = m::mock('UntypedParameter_pager_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($pager && !is_string($pager) && !$pager instanceof \Psy\Output\OutputPager) == false (line 852)

    $actual = $this->configuration->setPager($pager);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testSetPager1()
{
    $pager = m::mock('UntypedParameter_pager_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($pager && !is_string($pager) && !$pager instanceof \Psy\Output\OutputPager) == true (line 852)
    // throw new \InvalidArgumentException('Unexpected pager instance.') -> exception (line 853)

    $actual = $this->configuration->setPager($pager);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPager0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->pager) && $this->usePcntl()) == false (line 869)

    $actual = $this->configuration->getPager();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPager1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->pager) && $this->usePcntl()) == true (line 869)
    // if ($pager = ini_get('cli.pager')) == false (line 870)
    // if ($less = exec('which less 2>/dev/null')) == false (line 873)

    $actual = $this->configuration->getPager();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPager2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->pager) && $this->usePcntl()) == true (line 869)
    // if ($pager = ini_get('cli.pager')) == false (line 870)
    // if ($less = exec('which less 2>/dev/null')) == true (line 873)

    $actual = $this->configuration->getPager();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPager3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->pager) && $this->usePcntl()) == true (line 869)
    // if ($pager = ini_get('cli.pager')) == true (line 870)

    $actual = $this->configuration->getPager();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetLoop0()
{
    $loop = m::mock(\Psy\ExecutionLoop\Loop::class);

    // TODO: Your mock expectations here

    $actual = $this->configuration->setLoop($loop);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLoop0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->loop)) == false (line 902)

    $actual = $this->configuration->getLoop();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLoop1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->loop)) == true (line 902)
    // if ($this->usePcntl()) == false (line 903)

    $actual = $this->configuration->getLoop();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLoop2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->loop)) == true (line 902)
    // if ($this->usePcntl()) == true (line 903)

    $actual = $this->configuration->getLoop();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetAutoCompleter0()
{
    $completer = m::mock(\Psy\TabCompletion\AutoCompleter::class);

    // TODO: Your mock expectations here

    $actual = $this->configuration->setAutoCompleter($completer);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAutoCompleter0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->completer)) == false (line 930)

    $actual = $this->configuration->getAutoCompleter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAutoCompleter1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->completer)) == true (line 930)

    $actual = $this->configuration->getAutoCompleter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTabCompletionMatchers0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->getTabCompletionMatchers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddTabCompletionMatchers0()
{
    $matchers = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->shell)) == false (line 955)

    $actual = $this->configuration->addTabCompletionMatchers($matchers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddTabCompletionMatchers1()
{
    $matchers = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->shell)) == true (line 955)

    $actual = $this->configuration->addTabCompletionMatchers($matchers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddCommands0()
{
    $commands = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->shell)) == false (line 973)

    $actual = $this->configuration->addCommands($commands);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddCommands1()
{
    $commands = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->shell)) == true (line 973)

    $actual = $this->configuration->addCommands($commands);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetShell0()
{
    $shell = m::mock(\Psy\Shell::class);

    // TODO: Your mock expectations here

    $actual = $this->configuration->setShell($shell);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetManualDbFile0()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->setManualDbFile($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetManualDbFile0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->manualDbFile)) == false (line 1021)
    // if (!empty($files)) == false (line 1026)

    $actual = $this->configuration->getManualDbFile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetManualDbFile1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->manualDbFile)) == false (line 1021)
    // if (!empty($files)) == true (line 1026)
    // if ($this->warnOnMultipleConfigs && count($files) > 1) == false (line 1027)

    $actual = $this->configuration->getManualDbFile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetManualDbFile2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->manualDbFile)) == false (line 1021)
    // if (!empty($files)) == true (line 1026)
    // if ($this->warnOnMultipleConfigs && count($files) > 1) == true (line 1027)

    $actual = $this->configuration->getManualDbFile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetManualDbFile3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->manualDbFile)) == true (line 1021)

    $actual = $this->configuration->getManualDbFile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetManualDb0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->manualDb)) == false (line 1043)

    $actual = $this->configuration->getManualDb();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetManualDb1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->manualDb)) == true (line 1043)
    // if (is_file($dbFile)) == false (line 1045)

    $actual = $this->configuration->getManualDb();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testGetManualDb2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->manualDb)) == true (line 1043)
    // if (is_file($dbFile)) == true (line 1045)

    $actual = $this->configuration->getManualDb();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testGetManualDb3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->manualDb)) == true (line 1043)
    // if (is_file($dbFile)) == true (line 1045)
    // if ($e->getMessage() === 'could not find driver') == false (line 1049)
    // throw $e -> exception (line 1052)

    $actual = $this->configuration->getManualDb();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\RuntimeException
 */
public function testGetManualDb4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->manualDb)) == true (line 1043)
    // if (is_file($dbFile)) == true (line 1045)
    // if ($e->getMessage() === 'could not find driver') == true (line 1049)
    // throw new \Psy\Exception\RuntimeException('SQLite PDO driver not found', 0, $e) -> exception (line 1050)

    $actual = $this->configuration->getManualDb();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetManualDb5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->manualDb)) == true (line 1043)
    // if (is_file($dbFile)) == true (line 1045)

    $actual = $this->configuration->getManualDb();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddCasters0()
{
    $casters = [];

    // TODO: Your mock expectations here

    $actual = $this->configuration->addCasters($casters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPresenter0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->presenter)) == false (line 1078)

    $actual = $this->configuration->getPresenter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPresenter1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->presenter)) == true (line 1078)

    $actual = $this->configuration->getPresenter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetWarnOnMultipleConfigs0()
{
    $warnOnMultipleConfigs = m::mock('UntypedParameter_warnOnMultipleConfigs_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->setWarnOnMultipleConfigs($warnOnMultipleConfigs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWarnOnMultipleConfigs0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->warnOnMultipleConfigs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testSetColorMode0()
{
    $colorMode = m::mock('UntypedParameter_colorMode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($colorMode, $validColorModes)) == false (line 1127)
    // throw new \InvalidArgumentException('invalid color mode: ' . $colorMode) -> exception (line 1130)

    $actual = $this->configuration->setColorMode($colorMode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetColorMode1()
{
    $colorMode = m::mock('UntypedParameter_colorMode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($colorMode, $validColorModes)) == true (line 1127)

    $actual = $this->configuration->setColorMode($colorMode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testColorMode0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->colorMode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetChecker0()
{
    $checker = m::mock(\Psy\VersionUpdater\Checker::class);

    // TODO: Your mock expectations here

    $actual = $this->configuration->setChecker($checker);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetChecker0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->checker)) == false (line 1163)

    $actual = $this->configuration->getChecker();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetChecker1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->checker)) == true (line 1163)
    // switch ($interval) (line 1165)
    // Case \Psy\VersionUpdater\Checker::ALWAYS == false (line 1166)
    // Case \Psy\VersionUpdater\Checker::DAILY == false (line 1170)
    // Case \Psy\VersionUpdater\Checker::WEEKLY == false (line 1171)
    // Case \Psy\VersionUpdater\Checker::MONTHLY == false (line 1172)
    // Case \Psy\VersionUpdater\Checker::NEVER == false (line 1181)

    $actual = $this->configuration->getChecker();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetChecker2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->checker)) == true (line 1163)
    // switch ($interval) (line 1165)
    // Case \Psy\VersionUpdater\Checker::ALWAYS == false (line 1166)
    // Case \Psy\VersionUpdater\Checker::DAILY == false (line 1170)
    // Case \Psy\VersionUpdater\Checker::WEEKLY == false (line 1171)
    // Case \Psy\VersionUpdater\Checker::MONTHLY == false (line 1172)
    // Case \Psy\VersionUpdater\Checker::NEVER == true (line 1181)

    $actual = $this->configuration->getChecker();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetChecker3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->checker)) == true (line 1163)
    // switch ($interval) (line 1165)
    // Case \Psy\VersionUpdater\Checker::ALWAYS == false (line 1166)
    // Case \Psy\VersionUpdater\Checker::DAILY == false (line 1170)
    // Case \Psy\VersionUpdater\Checker::WEEKLY == false (line 1171)
    // Case \Psy\VersionUpdater\Checker::MONTHLY == true (line 1172)
    // if ($checkFile === false) == false (line 1174)

    $actual = $this->configuration->getChecker();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetChecker4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->checker)) == true (line 1163)
    // switch ($interval) (line 1165)
    // Case \Psy\VersionUpdater\Checker::ALWAYS == false (line 1166)
    // Case \Psy\VersionUpdater\Checker::DAILY == false (line 1170)
    // Case \Psy\VersionUpdater\Checker::WEEKLY == false (line 1171)
    // Case \Psy\VersionUpdater\Checker::MONTHLY == true (line 1172)
    // if ($checkFile === false) == true (line 1174)

    $actual = $this->configuration->getChecker();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetChecker5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->checker)) == true (line 1163)
    // switch ($interval) (line 1165)
    // Case \Psy\VersionUpdater\Checker::ALWAYS == false (line 1166)
    // Case \Psy\VersionUpdater\Checker::DAILY == false (line 1170)
    // Case \Psy\VersionUpdater\Checker::WEEKLY == true (line 1171)
    // if ($checkFile === false) == false (line 1174)

    $actual = $this->configuration->getChecker();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetChecker6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->checker)) == true (line 1163)
    // switch ($interval) (line 1165)
    // Case \Psy\VersionUpdater\Checker::ALWAYS == false (line 1166)
    // Case \Psy\VersionUpdater\Checker::DAILY == false (line 1170)
    // Case \Psy\VersionUpdater\Checker::WEEKLY == true (line 1171)
    // if ($checkFile === false) == true (line 1174)

    $actual = $this->configuration->getChecker();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetChecker7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->checker)) == true (line 1163)
    // switch ($interval) (line 1165)
    // Case \Psy\VersionUpdater\Checker::ALWAYS == false (line 1166)
    // Case \Psy\VersionUpdater\Checker::DAILY == true (line 1170)
    // if ($checkFile === false) == false (line 1174)

    $actual = $this->configuration->getChecker();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetChecker8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->checker)) == true (line 1163)
    // switch ($interval) (line 1165)
    // Case \Psy\VersionUpdater\Checker::ALWAYS == false (line 1166)
    // Case \Psy\VersionUpdater\Checker::DAILY == true (line 1170)
    // if ($checkFile === false) == true (line 1174)

    $actual = $this->configuration->getChecker();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetChecker9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->checker)) == true (line 1163)
    // switch ($interval) (line 1165)
    // Case \Psy\VersionUpdater\Checker::ALWAYS == true (line 1166)

    $actual = $this->configuration->getChecker();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUpdateCheck0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->getUpdateCheck();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetUpdateCheck0()
{
    $interval = m::mock('UntypedParameter_interval_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!in_array($interval, $validIntervals)) == false (line 1220)

    $actual = $this->configuration->setUpdateCheck($interval);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testSetUpdateCheck1()
{
    $interval = m::mock('UntypedParameter_interval_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!in_array($interval, $validIntervals)) == true (line 1220)
    // throw new \InvalidArgumentException('invalid update check interval: ' . $interval) -> exception (line 1221)

    $actual = $this->configuration->setUpdateCheck($interval);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUpdateCheckCacheFile0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->getUpdateCheckCacheFile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetStartupMessage0()
{
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->setStartupMessage($message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetStartupMessage0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->getStartupMessage();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetPrompt0()
{
    $prompt = m::mock('UntypedParameter_prompt_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->setPrompt($prompt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPrompt0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->getPrompt();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForceArrayIndexes0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->forceArrayIndexes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetForceArrayIndexes0()
{
    $forceArrayIndexes = m::mock('UntypedParameter_forceArrayIndexes_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->setForceArrayIndexes($forceArrayIndexes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
