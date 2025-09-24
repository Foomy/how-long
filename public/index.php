<?php

use Translation\Translator;

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../include/common.php';

$translator = new Translator();
$translator->setLocale(Translator::LOCALE_DE);

$title    = $translator->translate('title.main');
$subtitle = $translator->translate('title.sub');

page_header($title, $subtitle);

?>

<?php

page_footer();

