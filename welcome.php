<?php
session_start();
include 'header.inc';
?>

<main>
  <?php
  if (isset($_SESSION['user'])) {
      echo '<h2>Welcome, ' . htmlspecialchars($_SESSION['user']) . '!</h2>';
  } else {
      header('Location: login.php');
      exit;
  }
  ?>
</main>

<?php include 'footer.inc'; ?>
