<?php

namespace tests;

use Mockery as m;
use WP_HTTP_Fsockopen;

class WP_HTTP_FsockopenTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_HTTP_Fsockopen
*/
protected $wP_HTTP_Fsockopen;

public function setUp()
{
    parent::setUp();

    $this->wP_HTTP_Fsockopen = new \WP_HTTP_Fsockopen();
}
}
