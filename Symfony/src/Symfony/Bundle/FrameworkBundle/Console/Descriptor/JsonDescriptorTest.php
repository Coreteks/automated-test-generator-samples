<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Console\Descriptor;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Console\Descriptor\JsonDescriptor;

class JsonDescriptorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Console\Descriptor\JsonDescriptor
*/
protected $jsonDescriptor;

public function setUp()
{
    parent::setUp();

    $this->jsonDescriptor = new \Symfony\Bundle\FrameworkBundle\Console\Descriptor\JsonDescriptor();
}
}
