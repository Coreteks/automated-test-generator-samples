<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Console\Descriptor;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Console\Descriptor\MarkdownDescriptor;

class MarkdownDescriptorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Console\Descriptor\MarkdownDescriptor
*/
protected $markdownDescriptor;

public function setUp()
{
    parent::setUp();

    $this->markdownDescriptor = new \Symfony\Bundle\FrameworkBundle\Console\Descriptor\MarkdownDescriptor();
}
}
