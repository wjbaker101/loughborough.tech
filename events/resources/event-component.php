<div class="column l6 m12 hpadding-small vpadding-small">
    <div class="card card-hover bg-white<?= $past ?>">
        <div class="card-content hpadding-small vpadding-small text-centered">
            <img src="<?= $eventImage ?>">
        </div>
        <div class="card-content hpadding-small vpadding-small">
            <h4><?= $event['Title'] ?></h4>
            <p><?= $eventDate ?></p>
            <p><?= $eventLocation ?></p>
        </div>
        <?php if ($event['FacebookURL'] !== null || $event['EventURL'] !== null) { ?>
        <div class="card-content hpadding-small clearfix">
            <div class="float-l">
                <?php if ($event['FacebookURL'] !== null) { ?>
                <p><a class="page-link cell-middle" href="<?= "https://facebook.com/events/${event['FacebookURL']}" ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook fa-fw cell-middle"></i></a></p>
                <?php } ?>
            </div>
            <div class="float-r">
                <?php if ($event['EventURL'] !== null) { ?>
                <p class="text-right"><a href="<?= $event['EventURL'] ?>"><button>View Event Page</button></a></p>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>