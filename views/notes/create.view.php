<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<h2>
 Create a note
</h2>

<form method="POST" action="/notes">
    <label for="body" class="form-label">Body</label>
  <textarea class="form-control" id="body" name="body" style="width:30rem"> 
  <?= $_POST['body'] ?? '' ?>
  </textarea>  
  <?php if (isset($errors['body'])) : ?>
    <p class="text-danger"><?= $errors['body'] ?></p>
  <?php endif; ?>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<p>
    <a href="/notes">Go back...</a>
</p>

<?php require base_path('views/partials/footer.php') ?>