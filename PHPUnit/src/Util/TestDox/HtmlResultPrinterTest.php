<?php

namespace tests\PHPUnit\Util\TestDox;

use Mockery as m;
use PHPUnit\Util\TestDox\HtmlResultPrinter;

class HtmlResultPrinterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Util\TestDox\HtmlResultPrinter
*/
protected $htmlResultPrinter;

public function setUp()
{
    parent::setUp();

    $this->htmlResultPrinter = new \PHPUnit\Util\TestDox\HtmlResultPrinter();
}
}
