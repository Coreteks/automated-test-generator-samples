<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Command;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand;

class YamlLintCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand
*/
protected $yamlLintCommand;

public function setUp()
{
    parent::setUp();

    $this->yamlLintCommand = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();
}
}
