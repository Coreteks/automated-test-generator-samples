<?php

namespace tests\PHPUnit\Framework\Error;

use Mockery as m;
use PHPUnit\Framework\Error\Notice;

class NoticeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Error\Notice
*/
protected $notice;

public function setUp()
{
    parent::setUp();

    $this->notice = new \PHPUnit\Framework\Error\Notice();
}
}
