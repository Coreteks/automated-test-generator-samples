<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Console\Descriptor;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Console\Descriptor\XmlDescriptor;

class XmlDescriptorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Console\Descriptor\XmlDescriptor
*/
protected $xmlDescriptor;

public function setUp()
{
    parent::setUp();

    $this->xmlDescriptor = new \Symfony\Bundle\FrameworkBundle\Console\Descriptor\XmlDescriptor();
}
}
