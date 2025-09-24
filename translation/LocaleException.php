<?php

namespace Translation;

class LocaleException extends \Exception
{
    public function __construct($locale)
    {
        parent::__construct('Invalid locale: ' . $locale, 500, $this->getPrevious());
    }
}