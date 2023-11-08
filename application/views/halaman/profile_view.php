<div class="card">
    <div class="card-body">
        <ul>
            <?php foreach ($user as $k => $v) : ?>
                <li><?= $k ?> : <?= $v ?></li>
            <?php endforeach ?>
        </ul>
    </div>
</div>