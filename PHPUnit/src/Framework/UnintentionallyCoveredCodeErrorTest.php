<?php

namespace tests\PHPUnit\Framework;

use Mockery as m;
use PHPUnit\Framework\UnintentionallyCoveredCodeError;

class UnintentionallyCoveredCodeErrorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\UnintentionallyCoveredCodeError
*/
protected $unintentionallyCoveredCodeError;

public function setUp()
{
    parent::setUp();

    $this->unintentionallyCoveredCodeError = new \PHPUnit\Framework\UnintentionallyCoveredCodeError();
}
}
