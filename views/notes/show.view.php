<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<h2>
 Note
</h2>
<p>
    <a href="/notes">Go back...</a>
</p>
 <p><?= htmlspecialchars($note['body']) ?></p>

 <footer>
 <a href="/note/edit?id=<?= $note['id'] ?>" class="btn btn-primary">Edit</a>
 </footer>

 <!-- <form method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <input type="submit" class="btn btn-danger" value="Delete">
</form> -->

 <?php require base_path('views/partials/footer.php') ?>