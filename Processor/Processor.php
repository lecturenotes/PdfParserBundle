<?php

namespace Kasifi\PdfParserBundle\Processor;

/**
 * Class Processor
 * @package Kasifi\PdfParserBundle\Processor
 */
abstract class Processor
{
    /**
     * @var array
     */
    protected $configuration;

    /**
     * @return array
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    public function __toString()
    {
        return (string)$this->configuration['name'];
    }
}
