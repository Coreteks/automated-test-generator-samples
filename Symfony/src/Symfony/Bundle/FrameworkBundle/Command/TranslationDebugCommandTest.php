<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Command;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand;
use Symfony\Component\Translation\Extractor\ExtractorInterface;
use Symfony\Component\Translation\Reader\TranslationReaderInterface;
use Symfony\Component\Translation\TranslatorInterface;

class TranslationDebugCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_translator;
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
protected $_defaultTransPath = null;
/**
* @var mixed
*/
protected $_defaultViewsPath = null;
/**
* @var \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
*/
protected $translationDebugCommand;

public function setUp()
{
    parent::setUp();

    $this->_translator = m::mock(\Symfony\Component\Translation\TranslatorInterface::class);
    $this->_reader = m::mock(\Symfony\Component\Translation\Reader\TranslationReaderInterface::class);
    $this->_extractor = m::mock(\Symfony\Component\Translation\Extractor\ExtractorInterface::class);
    $this->_defaultTransPath = null;
    $this->_defaultViewsPath = null;
    $this->translationDebugCommand = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand($this->_translator, $this->_reader, $this->_extractor, $this->_defaultTransPath, $this->_defaultViewsPath);
}
}
