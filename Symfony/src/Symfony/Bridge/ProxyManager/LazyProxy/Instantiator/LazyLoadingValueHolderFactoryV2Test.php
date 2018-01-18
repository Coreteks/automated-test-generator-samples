<?php

namespace tests\Symfony\Bridge\ProxyManager\LazyProxy\Instantiator;

use Mockery as m;
use Symfony\Bridge\ProxyManager\LazyProxy\Instantiator\LazyLoadingValueHolderFactoryV2;

class LazyLoadingValueHolderFactoryV2Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\ProxyManager\LazyProxy\Instantiator\LazyLoadingValueHolderFactoryV2
*/
protected $lazyLoadingValueHolderFactoryV2;

public function setUp()
{
    parent::setUp();

    $this->lazyLoadingValueHolderFactoryV2 = new \Symfony\Bridge\ProxyManager\LazyProxy\Instantiator\LazyLoadingValueHolderFactoryV2();
}
}
