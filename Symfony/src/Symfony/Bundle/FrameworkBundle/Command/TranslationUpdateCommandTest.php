<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Command;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand;
use Symfony\Component\Translation\Extractor\ExtractorInterface;
use Symfony\Component\Translation\Reader\TranslationReaderInterface;
use Symfony\Component\Translation\Writer\TranslationWriterInterface;

class TranslationUpdateCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_writer;
/**
* @var \Mockery\MockInterface
*/
protected $_reader;
/**
* @var \Mockery\MockInterface
*/
protected $_extractor;
/**
* @var mixed
*/
protected $_defaultLocale = null;
/**
* @var mixed
*/
protected $_defaultTransPath = null;
/**
* @var mixed
*/
protected $_defaultViewsPath = null;
/**
* @var \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
*/
protected $translationUpdateCommand;

public function setUp()
{
    parent::setUp();

    $this->_writer = m::mock(\Symfony\Component\Translation\Writer\TranslationWriterInterface::class);
    $this->_reader = m::mock(\Symfony\Component\Translation\Reader\TranslationReaderInterface::class);
    $this->_extractor = m::mock(\Symfony\Component\Translation\Extractor\ExtractorInterface::class);
    $this->_defaultLocale = null;
    $this->_defaultTransPath = null;
    $this->_defaultViewsPath = null;
    $this->translationUpdateCommand = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand($this->_writer, $this->_reader, $this->_extractor, $this->_defaultLocale, $this->_defaultTransPath, $this->_defaultViewsPath);
}
}
