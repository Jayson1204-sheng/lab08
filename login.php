<?php include 'header.inc'; ?>

<main>
  <h2>Login Form</h2>

  <form method="post" action="process.php">
    <div>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
    </div>

    <div>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>

    <!-- Hidden field for user token -->
    <input type="hidden" name="token" value="n106213105">

    <div>
      <button type="submit">Login</button>
    </div>
  </form>
</main>

<?php include 'footer.inc'; ?>
