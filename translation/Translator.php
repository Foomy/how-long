<?php

namespace Translation;

use Translation\LocaleException;

class Translator
{
    const string LOCALE_DE = 'de_DE';
    const string LOCALE_CH = 'de_CH';
    const string LOCALE_AT = 'de_AT';
    const string LOCALE_EN = 'en_US';

    private array $validLocales;
    private string $locale;

    public function __construct() {
        $this->validLocales = [
            'de_DE',
            'de_AT',
            'de_CH',
            'en_US',
        ];
    }

    public function translate(string $text): string
    {
        $translations = $this->getTranslations();

        if (!array_key_exists($text, $translations)) {
            return $text;
        }

        return $translations[$text];
    }

    public function getLocale(): string
    {
        return $this->locale;
    }

    public function setLocale(string $locale): void {
        if (!in_array($locale, $this->validLocales, true)) {
            throw new LocaleException($locale);
        }

        $this->locale = $locale;
    }

    private function getTranslations(): array
    {
        return match ($this->locale) {
            'de_DE', 'de_AT', 'de_CH' => include PROJECT_ROOT . 'translation/messages/german.php',
            'en_US' => include PROJECT_ROOT . 'translation/messages/english.php',
            default => throw new LocaleException($this->locale)
        };
    }
}