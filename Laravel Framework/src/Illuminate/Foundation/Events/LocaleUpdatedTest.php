<?php

namespace tests\Illuminate\Foundation\Events;

use Illuminate\Foundation\Events\LocaleUpdated;
use Mockery as m;

class LocaleUpdatedTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_locale = null;
/**
* @var \Illuminate\Foundation\Events\LocaleUpdated
*/
protected $localeUpdated;

public function setUp()
{
    parent::setUp();

    $this->_locale = null;
    $this->localeUpdated = new \Illuminate\Foundation\Events\LocaleUpdated($this->_locale);
}
}
