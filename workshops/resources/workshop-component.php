<div class="column l4 m12 padding-small">
    <div class="card card-hover">
        <div class="card-content padding-small text-centered">
            <img src="/resources/images/technologies/<?= $workshop->image ?>">
        </div>
        <div class="card-content padding-small">
            <h4><?= $workshop->title ?></h4>
            <p><small><?= formatDate($workshop->eventDate) ?></small></p>
            <p><small><?= formatTime($workshop->eventDate) ?></small></p>
        </div>
        <div class="card-content padding-small text-centered">
            <button data-micromodal-trigger="<?= $workshop->alias ?>">View Workshop</button>
        </div>
    </div>
</div>