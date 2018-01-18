<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Console\Helper;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Console\Helper\DescriptorHelper;

class DescriptorHelperTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Console\Helper\DescriptorHelper
*/
protected $descriptorHelper;

public function setUp()
{
    parent::setUp();

    $this->descriptorHelper = new \Symfony\Bundle\FrameworkBundle\Console\Helper\DescriptorHelper();
}
}
