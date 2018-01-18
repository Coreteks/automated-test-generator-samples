<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Command;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Command\AboutCommand;

class AboutCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Command\AboutCommand
*/
protected $aboutCommand;

public function setUp()
{
    parent::setUp();

    $this->aboutCommand = new \Symfony\Bundle\FrameworkBundle\Command\AboutCommand();
}
}
