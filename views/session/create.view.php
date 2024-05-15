
<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<form class="w-50 p-3" action="/session" method="POST">
    <h3 class="text-center">Log in</h3>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    
</div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">

  </div>
  <button type="submit" class="btn btn-primary">Log in</button>
  <ul>
                    <?php if (isset($errors['email'])) : ?>
                        <li class="text-danger"><?= $errors['email'] ?></li>
                    <?php endif; ?>

                    <?php if (isset($errors['password'])) : ?>
                        <li class="text-danger"><?= $errors['password'] ?></li>
                    <?php endif; ?>
</form>

<?php require base_path('views/partials/footer.php') ?>