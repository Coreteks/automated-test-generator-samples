<?php

namespace tests\Faker\Provider\bg_BG;

use Faker\Provider\bg_BG\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\bg_BG\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\bg_BG\Internet();
}
}
