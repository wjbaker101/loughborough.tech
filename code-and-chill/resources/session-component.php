<div class="column l6 m12 padding-small">
    <div class="card card-hover">
        <div class="card-content padding-small">
            <h2 class="text-code-and-chill"><?= $session->title ?></h2>
            <p><small><?= formatDate($session->date) ?></small></p>
        </div>
        <div class="card-content cell-row vpadding-regular text-centered">
            <div class="cell cell-middle v-card-content l6 hpadding-small">
                <div class="img-container margin-centered">
                    <img class="session-brand-image" src="/resources/images/technologies/<?= $session->beginners->image ?>">
                </div>
            </div>
            <div class="cell cell-middle v-card-content l6 hpadding-small">
                <div class="img-container margin-centered">
                    <img class="session-brand-image" src="/resources/images/technologies/<?= $session->advanced->image ?>">
                </div>
            </div>
        </div>
        <div class="card-content column-container">
            <div class="column l6 s12 padding-small">
                <h4>Beginners Topic</h4>
                <p><?= $session->beginners->title ?></p>
            </div>
            <div class="column l6 s12 padding-small">
                <h4>Advanced Topic</h4>
                <p><?= $session->advanced->title ?></p>
            </div>
        </div>
        <div class="card-content padding-small text-centered">
            <a href="<?= $session->url ?>"><button>View Session</button></a>
        </div>
    </div>
</div>