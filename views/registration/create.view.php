
<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<h2>
Register here!
</h2>

<form class="w-50 p-3" action="/register" method="POST">
    <h3 class="text-center">Create a new account</h3>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">

    <?php if (isset($errors['email'])) : ?>
    <p class="text-danger"><?= $errors['email'] ?></p>
  <?php endif; ?>
    
</div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">

    <?php if (isset($errors['password'])) : ?>
    <p class="text-danger"><?= $errors['password'] ?></p>
  <?php endif; ?>

  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>

<?php require base_path('views/partials/footer.php') ?>