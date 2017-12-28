<?php

$sessions = array
(
    'amazon-alexa',
    'cockroachdb',
    'github',
    'android',
    'docker',
    'coursework-crash-course',
);

for ($i = 0; $i < count($sessions); ++$i) { ?>

<div id="<?= $sessions[$i] ?>" class="modal text-centered" aria-hidden="true">
    <div tabindex="-1" data-micromodal-close class="cell">
        <div role="dialog" aria-modal="true" aria-labelledby="modal-1-title" class="card content-text-width hpadding-regular vpadding-mid bg-white text-left">
            <?php include($sessions[$i] . '.php'); ?>
        </div>
    </div>
</div>

<?php } ?>