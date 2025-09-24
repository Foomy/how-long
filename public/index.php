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
    <div class="row">
        <div id="time-tracking-controls" class="tt-ctrl">
            <button type="button"
                    class="btn btn-primary"
                    data-action="add-row"
                    data-type="work"><i class="fas fa-plus"></i> <?= $translator->translate('btn.add.work') ?></button>
            <button type="button"
                    class="btn btn-secondary"
                    data-action="add-row"
                    data-type="break"><i class="fas fa-plus"></i> <?= $translator->translate('btn.add.break') ?></button>
        </div>
        <form id="time-tracking-form" data-js="tt-form">
            <div class="form-group hidden" data-js="row-template">
                <label></label>
                <input type="time">
                <label class="hidden"></label>
                <input type="time">
                <button type="button" class="btn btn-danger">
                    <i class="fas fa-minus"></i>
                    <?= $translator->translate('btn.remove.row') ?>
                </button>
            </div>
        </form>
    </div>
<?php

page_footer();

