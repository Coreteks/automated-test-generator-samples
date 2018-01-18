<?php

namespace tests;

use CI_FTP;
use Mockery as m;

class CI_FTPTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_config = null;
/**
* @var \CI_FTP
*/
protected $cI_FTP;

public function setUp()
{
    parent::setUp();

    $this->_config = null;
    $this->cI_FTP = new \CI_FTP($this->_config);
}

public function testInitialize0()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    $actual = $this->cI_FTP->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize1()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->{$key})) == false (line 130)

    $actual = $this->cI_FTP->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize2()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->{$key})) == true (line 130)

    $actual = $this->cI_FTP->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect0()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($config) > 0) == false (line 150)
    // if (\FALSE === ($this->conn_id = @\ftp_connect($this->hostname, $this->port))) == false (line 155)
    // if (!$this->_login()) == false (line 165)
    // if ($this->passive === \TRUE) == false (line 176)

    $actual = $this->cI_FTP->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect1()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($config) > 0) == false (line 150)
    // if (\FALSE === ($this->conn_id = @\ftp_connect($this->hostname, $this->port))) == false (line 155)
    // if (!$this->_login()) == false (line 165)
    // if ($this->passive === \TRUE) == true (line 176)

    $actual = $this->cI_FTP->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect2()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($config) > 0) == false (line 150)
    // if (\FALSE === ($this->conn_id = @\ftp_connect($this->hostname, $this->port))) == false (line 155)
    // if (!$this->_login()) == true (line 165)
    // if ($this->debug === \TRUE) == false (line 167)

    $actual = $this->cI_FTP->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect3()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($config) > 0) == false (line 150)
    // if (\FALSE === ($this->conn_id = @\ftp_connect($this->hostname, $this->port))) == false (line 155)
    // if (!$this->_login()) == true (line 165)
    // if ($this->debug === \TRUE) == true (line 167)

    $actual = $this->cI_FTP->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect4()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($config) > 0) == false (line 150)
    // if (\FALSE === ($this->conn_id = @\ftp_connect($this->hostname, $this->port))) == true (line 155)
    // if ($this->debug === \TRUE) == false (line 157)

    $actual = $this->cI_FTP->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect5()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($config) > 0) == false (line 150)
    // if (\FALSE === ($this->conn_id = @\ftp_connect($this->hostname, $this->port))) == true (line 155)
    // if ($this->debug === \TRUE) == true (line 157)

    $actual = $this->cI_FTP->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect6()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($config) > 0) == true (line 150)
    // if (\FALSE === ($this->conn_id = @\ftp_connect($this->hostname, $this->port))) == false (line 155)
    // if (!$this->_login()) == false (line 165)
    // if ($this->passive === \TRUE) == false (line 176)

    $actual = $this->cI_FTP->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect7()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($config) > 0) == true (line 150)
    // if (\FALSE === ($this->conn_id = @\ftp_connect($this->hostname, $this->port))) == false (line 155)
    // if (!$this->_login()) == false (line 165)
    // if ($this->passive === \TRUE) == true (line 176)

    $actual = $this->cI_FTP->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect8()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($config) > 0) == true (line 150)
    // if (\FALSE === ($this->conn_id = @\ftp_connect($this->hostname, $this->port))) == false (line 155)
    // if (!$this->_login()) == true (line 165)
    // if ($this->debug === \TRUE) == false (line 167)

    $actual = $this->cI_FTP->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect9()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($config) > 0) == true (line 150)
    // if (\FALSE === ($this->conn_id = @\ftp_connect($this->hostname, $this->port))) == false (line 155)
    // if (!$this->_login()) == true (line 165)
    // if ($this->debug === \TRUE) == true (line 167)

    $actual = $this->cI_FTP->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect10()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($config) > 0) == true (line 150)
    // if (\FALSE === ($this->conn_id = @\ftp_connect($this->hostname, $this->port))) == true (line 155)
    // if ($this->debug === \TRUE) == false (line 157)

    $actual = $this->cI_FTP->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect11()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($config) > 0) == true (line 150)
    // if (\FALSE === ($this->conn_id = @\ftp_connect($this->hostname, $this->port))) == true (line 155)
    // if ($this->debug === \TRUE) == true (line 157)

    $actual = $this->cI_FTP->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChangedir0()
{
    $path = m::mock('UntypedParameter_path_');
    $suppress_debug = m::mock('UntypedParameter_suppress_debug_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 235)
    // if ($result === \FALSE) == false (line 242)

    $actual = $this->cI_FTP->changedir($path, $suppress_debug);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChangedir1()
{
    $path = m::mock('UntypedParameter_path_');
    $suppress_debug = m::mock('UntypedParameter_suppress_debug_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 235)
    // if ($result === \FALSE) == true (line 242)
    // if ($this->debug === \TRUE && $suppress_debug === \FALSE) == false (line 244)

    $actual = $this->cI_FTP->changedir($path, $suppress_debug);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChangedir2()
{
    $path = m::mock('UntypedParameter_path_');
    $suppress_debug = m::mock('UntypedParameter_suppress_debug_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 235)
    // if ($result === \FALSE) == true (line 242)
    // if ($this->debug === \TRUE && $suppress_debug === \FALSE) == true (line 244)

    $actual = $this->cI_FTP->changedir($path, $suppress_debug);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChangedir3()
{
    $path = m::mock('UntypedParameter_path_');
    $suppress_debug = m::mock('UntypedParameter_suppress_debug_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == true (line 235)

    $actual = $this->cI_FTP->changedir($path, $suppress_debug);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMkdir0()
{
    $path = m::mock('UntypedParameter_path_');
    $permissions = m::mock('UntypedParameter_permissions_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($path === '' or !$this->_is_conn()) == false (line 266)
    // if ($result === \FALSE) == false (line 273)
    // if ($permissions !== \NULL) == false (line 284)

    $actual = $this->cI_FTP->mkdir($path, $permissions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMkdir1()
{
    $path = m::mock('UntypedParameter_path_');
    $permissions = m::mock('UntypedParameter_permissions_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($path === '' or !$this->_is_conn()) == false (line 266)
    // if ($result === \FALSE) == false (line 273)
    // if ($permissions !== \NULL) == true (line 284)

    $actual = $this->cI_FTP->mkdir($path, $permissions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMkdir2()
{
    $path = m::mock('UntypedParameter_path_');
    $permissions = m::mock('UntypedParameter_permissions_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($path === '' or !$this->_is_conn()) == false (line 266)
    // if ($result === \FALSE) == true (line 273)
    // if ($this->debug === \TRUE) == false (line 275)

    $actual = $this->cI_FTP->mkdir($path, $permissions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMkdir3()
{
    $path = m::mock('UntypedParameter_path_');
    $permissions = m::mock('UntypedParameter_permissions_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($path === '' or !$this->_is_conn()) == false (line 266)
    // if ($result === \FALSE) == true (line 273)
    // if ($this->debug === \TRUE) == true (line 275)

    $actual = $this->cI_FTP->mkdir($path, $permissions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMkdir4()
{
    $path = m::mock('UntypedParameter_path_');
    $permissions = m::mock('UntypedParameter_permissions_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($path === '' or !$this->_is_conn()) == true (line 266)

    $actual = $this->cI_FTP->mkdir($path, $permissions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpload0()
{
    $locpath = m::mock('UntypedParameter_locpath_');
    $rempath = m::mock('UntypedParameter_rempath_');
    $mode = m::mock('UntypedParameter_mode_');
    $permissions = m::mock('UntypedParameter_permissions_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 305)
    // if (!\file_exists($locpath)) == false (line 310)
    // if ($mode === 'auto') == false (line 317)
    // if ($result === \FALSE) == false (line 328)
    // if ($permissions !== \NULL) == false (line 339)

    $actual = $this->cI_FTP->upload($locpath, $rempath, $mode, $permissions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpload1()
{
    $locpath = m::mock('UntypedParameter_locpath_');
    $rempath = m::mock('UntypedParameter_rempath_');
    $mode = m::mock('UntypedParameter_mode_');
    $permissions = m::mock('UntypedParameter_permissions_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 305)
    // if (!\file_exists($locpath)) == false (line 310)
    // if ($mode === 'auto') == false (line 317)
    // if ($result === \FALSE) == false (line 328)
    // if ($permissions !== \NULL) == true (line 339)

    $actual = $this->cI_FTP->upload($locpath, $rempath, $mode, $permissions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpload2()
{
    $locpath = m::mock('UntypedParameter_locpath_');
    $rempath = m::mock('UntypedParameter_rempath_');
    $mode = m::mock('UntypedParameter_mode_');
    $permissions = m::mock('UntypedParameter_permissions_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 305)
    // if (!\file_exists($locpath)) == false (line 310)
    // if ($mode === 'auto') == false (line 317)
    // if ($result === \FALSE) == true (line 328)
    // if ($this->debug === \TRUE) == false (line 330)

    $actual = $this->cI_FTP->upload($locpath, $rempath, $mode, $permissions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpload3()
{
    $locpath = m::mock('UntypedParameter_locpath_');
    $rempath = m::mock('UntypedParameter_rempath_');
    $mode = m::mock('UntypedParameter_mode_');
    $permissions = m::mock('UntypedParameter_permissions_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 305)
    // if (!\file_exists($locpath)) == false (line 310)
    // if ($mode === 'auto') == false (line 317)
    // if ($result === \FALSE) == true (line 328)
    // if ($this->debug === \TRUE) == true (line 330)

    $actual = $this->cI_FTP->upload($locpath, $rempath, $mode, $permissions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpload4()
{
    $locpath = m::mock('UntypedParameter_locpath_');
    $rempath = m::mock('UntypedParameter_rempath_');
    $mode = m::mock('UntypedParameter_mode_');
    $permissions = m::mock('UntypedParameter_permissions_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 305)
    // if (!\file_exists($locpath)) == false (line 310)
    // if ($mode === 'auto') == true (line 317)
    // if ($result === \FALSE) == false (line 328)
    // if ($permissions !== \NULL) == false (line 339)

    $actual = $this->cI_FTP->upload($locpath, $rempath, $mode, $permissions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpload5()
{
    $locpath = m::mock('UntypedParameter_locpath_');
    $rempath = m::mock('UntypedParameter_rempath_');
    $mode = m::mock('UntypedParameter_mode_');
    $permissions = m::mock('UntypedParameter_permissions_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 305)
    // if (!\file_exists($locpath)) == false (line 310)
    // if ($mode === 'auto') == true (line 317)
    // if ($result === \FALSE) == false (line 328)
    // if ($permissions !== \NULL) == true (line 339)

    $actual = $this->cI_FTP->upload($locpath, $rempath, $mode, $permissions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpload6()
{
    $locpath = m::mock('UntypedParameter_locpath_');
    $rempath = m::mock('UntypedParameter_rempath_');
    $mode = m::mock('UntypedParameter_mode_');
    $permissions = m::mock('UntypedParameter_permissions_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 305)
    // if (!\file_exists($locpath)) == false (line 310)
    // if ($mode === 'auto') == true (line 317)
    // if ($result === \FALSE) == true (line 328)
    // if ($this->debug === \TRUE) == false (line 330)

    $actual = $this->cI_FTP->upload($locpath, $rempath, $mode, $permissions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpload7()
{
    $locpath = m::mock('UntypedParameter_locpath_');
    $rempath = m::mock('UntypedParameter_rempath_');
    $mode = m::mock('UntypedParameter_mode_');
    $permissions = m::mock('UntypedParameter_permissions_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 305)
    // if (!\file_exists($locpath)) == false (line 310)
    // if ($mode === 'auto') == true (line 317)
    // if ($result === \FALSE) == true (line 328)
    // if ($this->debug === \TRUE) == true (line 330)

    $actual = $this->cI_FTP->upload($locpath, $rempath, $mode, $permissions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpload8()
{
    $locpath = m::mock('UntypedParameter_locpath_');
    $rempath = m::mock('UntypedParameter_rempath_');
    $mode = m::mock('UntypedParameter_mode_');
    $permissions = m::mock('UntypedParameter_permissions_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 305)
    // if (!\file_exists($locpath)) == true (line 310)

    $actual = $this->cI_FTP->upload($locpath, $rempath, $mode, $permissions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpload9()
{
    $locpath = m::mock('UntypedParameter_locpath_');
    $rempath = m::mock('UntypedParameter_rempath_');
    $mode = m::mock('UntypedParameter_mode_');
    $permissions = m::mock('UntypedParameter_permissions_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == true (line 305)

    $actual = $this->cI_FTP->upload($locpath, $rempath, $mode, $permissions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDownload0()
{
    $rempath = m::mock('UntypedParameter_rempath_');
    $locpath = m::mock('UntypedParameter_locpath_');
    $mode = m::mock('UntypedParameter_mode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 359)
    // if ($mode === 'auto') == false (line 365)
    // if ($result === \FALSE) == false (line 376)

    $actual = $this->cI_FTP->download($rempath, $locpath, $mode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDownload1()
{
    $rempath = m::mock('UntypedParameter_rempath_');
    $locpath = m::mock('UntypedParameter_locpath_');
    $mode = m::mock('UntypedParameter_mode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 359)
    // if ($mode === 'auto') == false (line 365)
    // if ($result === \FALSE) == true (line 376)
    // if ($this->debug === \TRUE) == false (line 378)

    $actual = $this->cI_FTP->download($rempath, $locpath, $mode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDownload2()
{
    $rempath = m::mock('UntypedParameter_rempath_');
    $locpath = m::mock('UntypedParameter_locpath_');
    $mode = m::mock('UntypedParameter_mode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 359)
    // if ($mode === 'auto') == false (line 365)
    // if ($result === \FALSE) == true (line 376)
    // if ($this->debug === \TRUE) == true (line 378)

    $actual = $this->cI_FTP->download($rempath, $locpath, $mode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDownload3()
{
    $rempath = m::mock('UntypedParameter_rempath_');
    $locpath = m::mock('UntypedParameter_locpath_');
    $mode = m::mock('UntypedParameter_mode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 359)
    // if ($mode === 'auto') == true (line 365)
    // if ($result === \FALSE) == false (line 376)

    $actual = $this->cI_FTP->download($rempath, $locpath, $mode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDownload4()
{
    $rempath = m::mock('UntypedParameter_rempath_');
    $locpath = m::mock('UntypedParameter_locpath_');
    $mode = m::mock('UntypedParameter_mode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 359)
    // if ($mode === 'auto') == true (line 365)
    // if ($result === \FALSE) == true (line 376)
    // if ($this->debug === \TRUE) == false (line 378)

    $actual = $this->cI_FTP->download($rempath, $locpath, $mode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDownload5()
{
    $rempath = m::mock('UntypedParameter_rempath_');
    $locpath = m::mock('UntypedParameter_locpath_');
    $mode = m::mock('UntypedParameter_mode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 359)
    // if ($mode === 'auto') == true (line 365)
    // if ($result === \FALSE) == true (line 376)
    // if ($this->debug === \TRUE) == true (line 378)

    $actual = $this->cI_FTP->download($rempath, $locpath, $mode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDownload6()
{
    $rempath = m::mock('UntypedParameter_rempath_');
    $locpath = m::mock('UntypedParameter_locpath_');
    $mode = m::mock('UntypedParameter_mode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == true (line 359)

    $actual = $this->cI_FTP->download($rempath, $locpath, $mode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename0()
{
    $old_file = m::mock('UntypedParameter_old_file_');
    $new_file = m::mock('UntypedParameter_new_file_');
    $move = m::mock('UntypedParameter_move_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 401)
    // if ($result === \FALSE) == false (line 408)

    $actual = $this->cI_FTP->rename($old_file, $new_file, $move);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename1()
{
    $old_file = m::mock('UntypedParameter_old_file_');
    $new_file = m::mock('UntypedParameter_new_file_');
    $move = m::mock('UntypedParameter_move_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 401)
    // if ($result === \FALSE) == true (line 408)
    // if ($this->debug === \TRUE) == false (line 410)

    $actual = $this->cI_FTP->rename($old_file, $new_file, $move);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename2()
{
    $old_file = m::mock('UntypedParameter_old_file_');
    $new_file = m::mock('UntypedParameter_new_file_');
    $move = m::mock('UntypedParameter_move_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 401)
    // if ($result === \FALSE) == true (line 408)
    // if ($this->debug === \TRUE) == true (line 410)

    $actual = $this->cI_FTP->rename($old_file, $new_file, $move);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename3()
{
    $old_file = m::mock('UntypedParameter_old_file_');
    $new_file = m::mock('UntypedParameter_new_file_');
    $move = m::mock('UntypedParameter_move_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == true (line 401)

    $actual = $this->cI_FTP->rename($old_file, $new_file, $move);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMove0()
{
    $old_file = m::mock('UntypedParameter_old_file_');
    $new_file = m::mock('UntypedParameter_new_file_');

    // TODO: Your mock expectations here

    $actual = $this->cI_FTP->move($old_file, $new_file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete_file0()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 445)
    // if ($result === \FALSE) == false (line 452)

    $actual = $this->cI_FTP->delete_file($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete_file1()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 445)
    // if ($result === \FALSE) == true (line 452)
    // if ($this->debug === \TRUE) == false (line 454)

    $actual = $this->cI_FTP->delete_file($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete_file2()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 445)
    // if ($result === \FALSE) == true (line 452)
    // if ($this->debug === \TRUE) == true (line 454)

    $actual = $this->cI_FTP->delete_file($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete_file3()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == true (line 445)

    $actual = $this->cI_FTP->delete_file($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete_dir0()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 476)
    // if (!empty($list)) == false (line 485)
    // if (@\ftp_rmdir($this->conn_id, $filepath) === \FALSE) == false (line 498)

    $actual = $this->cI_FTP->delete_dir($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete_dir1()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 476)
    // if (!empty($list)) == false (line 485)
    // if (@\ftp_rmdir($this->conn_id, $filepath) === \FALSE) == true (line 498)
    // if ($this->debug === \TRUE) == false (line 500)

    $actual = $this->cI_FTP->delete_dir($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete_dir2()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 476)
    // if (!empty($list)) == false (line 485)
    // if (@\ftp_rmdir($this->conn_id, $filepath) === \FALSE) == true (line 498)
    // if ($this->debug === \TRUE) == true (line 500)

    $actual = $this->cI_FTP->delete_dir($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete_dir3()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 476)
    // if (!empty($list)) == true (line 485)
    // for (...) == false (line 487)
    // if (@\ftp_rmdir($this->conn_id, $filepath) === \FALSE) == false (line 498)

    $actual = $this->cI_FTP->delete_dir($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete_dir4()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 476)
    // if (!empty($list)) == true (line 485)
    // for (...) == false (line 487)
    // if (@\ftp_rmdir($this->conn_id, $filepath) === \FALSE) == true (line 498)
    // if ($this->debug === \TRUE) == false (line 500)

    $actual = $this->cI_FTP->delete_dir($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete_dir5()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 476)
    // if (!empty($list)) == true (line 485)
    // for (...) == false (line 487)
    // if (@\ftp_rmdir($this->conn_id, $filepath) === \FALSE) == true (line 498)
    // if ($this->debug === \TRUE) == true (line 500)

    $actual = $this->cI_FTP->delete_dir($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete_dir6()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 476)
    // if (!empty($list)) == true (line 485)
    // for (...) == true (line 487)
    // if (!\preg_match('#/\\.\\.?$#', $list[$i]) && !@\ftp_delete($this->conn_id, $list[$i])) == false (line 491)
    // for (...) == false (line 487)
    // if (@\ftp_rmdir($this->conn_id, $filepath) === \FALSE) == false (line 498)

    $actual = $this->cI_FTP->delete_dir($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete_dir7()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 476)
    // if (!empty($list)) == true (line 485)
    // for (...) == true (line 487)
    // if (!\preg_match('#/\\.\\.?$#', $list[$i]) && !@\ftp_delete($this->conn_id, $list[$i])) == false (line 491)
    // for (...) == false (line 487)
    // if (@\ftp_rmdir($this->conn_id, $filepath) === \FALSE) == true (line 498)
    // if ($this->debug === \TRUE) == false (line 500)

    $actual = $this->cI_FTP->delete_dir($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete_dir8()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 476)
    // if (!empty($list)) == true (line 485)
    // for (...) == true (line 487)
    // if (!\preg_match('#/\\.\\.?$#', $list[$i]) && !@\ftp_delete($this->conn_id, $list[$i])) == false (line 491)
    // for (...) == false (line 487)
    // if (@\ftp_rmdir($this->conn_id, $filepath) === \FALSE) == true (line 498)
    // if ($this->debug === \TRUE) == true (line 500)

    $actual = $this->cI_FTP->delete_dir($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete_dir9()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 476)
    // if (!empty($list)) == true (line 485)
    // for (...) == true (line 487)
    // if (!\preg_match('#/\\.\\.?$#', $list[$i]) && !@\ftp_delete($this->conn_id, $list[$i])) == true (line 491)
    // for (...) == false (line 487)
    // if (@\ftp_rmdir($this->conn_id, $filepath) === \FALSE) == false (line 498)

    $actual = $this->cI_FTP->delete_dir($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete_dir10()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 476)
    // if (!empty($list)) == true (line 485)
    // for (...) == true (line 487)
    // if (!\preg_match('#/\\.\\.?$#', $list[$i]) && !@\ftp_delete($this->conn_id, $list[$i])) == true (line 491)
    // for (...) == false (line 487)
    // if (@\ftp_rmdir($this->conn_id, $filepath) === \FALSE) == true (line 498)
    // if ($this->debug === \TRUE) == false (line 500)

    $actual = $this->cI_FTP->delete_dir($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete_dir11()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 476)
    // if (!empty($list)) == true (line 485)
    // for (...) == true (line 487)
    // if (!\preg_match('#/\\.\\.?$#', $list[$i]) && !@\ftp_delete($this->conn_id, $list[$i])) == true (line 491)
    // for (...) == false (line 487)
    // if (@\ftp_rmdir($this->conn_id, $filepath) === \FALSE) == true (line 498)
    // if ($this->debug === \TRUE) == true (line 500)

    $actual = $this->cI_FTP->delete_dir($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete_dir12()
{
    $filepath = m::mock('UntypedParameter_filepath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == true (line 476)

    $actual = $this->cI_FTP->delete_dir($filepath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChmod0()
{
    $path = m::mock('UntypedParameter_path_');
    $perm = m::mock('UntypedParameter_perm_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 522)
    // if (@\ftp_chmod($this->conn_id, $perm, $path) === \FALSE) == false (line 527)

    $actual = $this->cI_FTP->chmod($path, $perm);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChmod1()
{
    $path = m::mock('UntypedParameter_path_');
    $perm = m::mock('UntypedParameter_perm_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 522)
    // if (@\ftp_chmod($this->conn_id, $perm, $path) === \FALSE) == true (line 527)
    // if ($this->debug === \TRUE) == false (line 529)

    $actual = $this->cI_FTP->chmod($path, $perm);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChmod2()
{
    $path = m::mock('UntypedParameter_path_');
    $perm = m::mock('UntypedParameter_perm_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 522)
    // if (@\ftp_chmod($this->conn_id, $perm, $path) === \FALSE) == true (line 527)
    // if ($this->debug === \TRUE) == true (line 529)

    $actual = $this->cI_FTP->chmod($path, $perm);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChmod3()
{
    $path = m::mock('UntypedParameter_path_');
    $perm = m::mock('UntypedParameter_perm_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == true (line 522)

    $actual = $this->cI_FTP->chmod($path, $perm);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_files0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->cI_FTP->list_files($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMirror0()
{
    $locpath = m::mock('UntypedParameter_locpath_');
    $rempath = m::mock('UntypedParameter_rempath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 571)
    // if ($fp = @\opendir($locpath)) == false (line 577)

    $actual = $this->cI_FTP->mirror($locpath, $rempath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMirror1()
{
    $locpath = m::mock('UntypedParameter_locpath_');
    $rempath = m::mock('UntypedParameter_rempath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 571)
    // if ($fp = @\opendir($locpath)) == true (line 577)
    // if (!$this->changedir($rempath, \TRUE) && (!$this->mkdir($rempath) or !$this->changedir($rempath))) == false (line 580)
    // while (\FALSE !== ($file = \readdir($fp))) == false (line 586)

    $actual = $this->cI_FTP->mirror($locpath, $rempath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMirror2()
{
    $locpath = m::mock('UntypedParameter_locpath_');
    $rempath = m::mock('UntypedParameter_rempath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 571)
    // if ($fp = @\opendir($locpath)) == true (line 577)
    // if (!$this->changedir($rempath, \TRUE) && (!$this->mkdir($rempath) or !$this->changedir($rempath))) == false (line 580)
    // while (\FALSE !== ($file = \readdir($fp))) == true (line 586)
    // if (\is_dir($locpath . $file) && $file[0] !== '.') == false (line 588)
    // if ($file[0] !== '.') == false (line 592)
    // while (\FALSE !== ($file = \readdir($fp))) == false (line 586)

    $actual = $this->cI_FTP->mirror($locpath, $rempath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMirror3()
{
    $locpath = m::mock('UntypedParameter_locpath_');
    $rempath = m::mock('UntypedParameter_rempath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 571)
    // if ($fp = @\opendir($locpath)) == true (line 577)
    // if (!$this->changedir($rempath, \TRUE) && (!$this->mkdir($rempath) or !$this->changedir($rempath))) == false (line 580)
    // while (\FALSE !== ($file = \readdir($fp))) == true (line 586)
    // if (\is_dir($locpath . $file) && $file[0] !== '.') == false (line 588)
    // if ($file[0] !== '.') == true (line 592)
    // while (\FALSE !== ($file = \readdir($fp))) == false (line 586)

    $actual = $this->cI_FTP->mirror($locpath, $rempath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMirror4()
{
    $locpath = m::mock('UntypedParameter_locpath_');
    $rempath = m::mock('UntypedParameter_rempath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 571)
    // if ($fp = @\opendir($locpath)) == true (line 577)
    // if (!$this->changedir($rempath, \TRUE) && (!$this->mkdir($rempath) or !$this->changedir($rempath))) == false (line 580)
    // while (\FALSE !== ($file = \readdir($fp))) == true (line 586)
    // if (\is_dir($locpath . $file) && $file[0] !== '.') == true (line 588)
    // while (\FALSE !== ($file = \readdir($fp))) == false (line 586)

    $actual = $this->cI_FTP->mirror($locpath, $rempath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMirror5()
{
    $locpath = m::mock('UntypedParameter_locpath_');
    $rempath = m::mock('UntypedParameter_rempath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == false (line 571)
    // if ($fp = @\opendir($locpath)) == true (line 577)
    // if (!$this->changedir($rempath, \TRUE) && (!$this->mkdir($rempath) or !$this->changedir($rempath))) == true (line 580)

    $actual = $this->cI_FTP->mirror($locpath, $rempath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMirror6()
{
    $locpath = m::mock('UntypedParameter_locpath_');
    $rempath = m::mock('UntypedParameter_rempath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->_is_conn()) == true (line 571)

    $actual = $this->cI_FTP->mirror($locpath, $rempath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_FTP->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
