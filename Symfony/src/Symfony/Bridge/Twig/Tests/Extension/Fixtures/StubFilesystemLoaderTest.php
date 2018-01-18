<?php

namespace tests\Symfony\Bridge\Twig\Tests\Extension\Fixtures;

use Mockery as m;
use Symfony\Bridge\Twig\Tests\Extension\Fixtures\StubFilesystemLoader;

class StubFilesystemLoaderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Twig\Tests\Extension\Fixtures\StubFilesystemLoader
*/
protected $stubFilesystemLoader;

public function setUp()
{
    parent::setUp();

    $this->stubFilesystemLoader = new \Symfony\Bridge\Twig\Tests\Extension\Fixtures\StubFilesystemLoader();
}
}
