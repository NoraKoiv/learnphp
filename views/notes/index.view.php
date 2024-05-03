<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<h2>
 My notes
</h2>

<ul>
<?php foreach ($notes as $note) : ?>
            <li>
                <a href="/note?id=<?= $note['id'] ?>" class="text-primary">
                <?= htmlspecialchars($note['body']) ?>
                </a>
            </li>
        <?php endforeach;?>
        <a class="text-warning" href="notes/create">Create note</a>
</ul>

<?php require base_path('views/partials/footer.php') ?>