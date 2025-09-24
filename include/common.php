<?php

defined('PROJECT_ROOT')
    || define('PROJECT_ROOT', dirname(__DIR__) . '/');

require_once PROJECT_ROOT . 'translation/LocaleException.php';
require_once PROJECT_ROOT . 'translation/Translator.php';

function page_header($title, $subTitle): void {
    include PROJECT_ROOT . 'templates/header.html.php';
}

function page_footer(): void {
    include PROJECT_ROOT . 'templates/footer.html.php';
}