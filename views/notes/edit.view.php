<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<h2>
 Edit note
</h2>


    <form method="POST" action="/note">
      <input type="hidden" name="_method" value="PATCH">
      <input type="hidden" name="id" value="<?= $note['id'] ?>">
        <label for="body" class="form-label">Body</label>
      <textarea class="form-control" id="body" name="body" style="width:30rem"> 
      <?= $note['body']?>
      </textarea>  
      <?php if (isset($errors['body'])) : ?>
        <p class="text-danger"><?= $errors['body'] ?></p>
      <?php endif; ?>

      <button type="submit" class="btn btn-primary">Update</button>
      <a href="/notes" class="btn btn-secondary">Cancel</a>
      <button type="button" class="btn btn-danger" onclick="document.querySelector('#delete-form').submit()">Delete</button>
                <!-- <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <input type="submit" class="btn btn-danger" value="Delete">
       -->
</form>


<form id="delete-form" class="hidden" method="POST" action="/note">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="<?= $note['id'] ?>">
                </form>
<?php require base_path('views/partials/footer.php') ?>

