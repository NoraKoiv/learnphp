<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<h2>
Hello, <?= $_SESSION['user']['email'] ?? 'Guest' ?>. Welcome to the home page.
</h2>

<?php require base_path('views/partials/footer.php') ?>