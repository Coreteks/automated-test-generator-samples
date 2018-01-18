<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Console\Descriptor;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Console\Descriptor\TextDescriptor;

class TextDescriptorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Console\Descriptor\TextDescriptor
*/
protected $textDescriptor;

public function setUp()
{
    parent::setUp();

    $this->textDescriptor = new \Symfony\Bundle\FrameworkBundle\Console\Descriptor\TextDescriptor();
}
}
