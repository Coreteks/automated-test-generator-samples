<?php

namespace tests\PHPUnit\Util\TestDox;

use Mockery as m;
use PHPUnit\Util\TestDox\TextResultPrinter;

class TextResultPrinterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Util\TestDox\TextResultPrinter
*/
protected $textResultPrinter;

public function setUp()
{
    parent::setUp();

    $this->textResultPrinter = new \PHPUnit\Util\TestDox\TextResultPrinter();
}
}
