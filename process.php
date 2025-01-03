<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $num_languages = (int) $_POST['num_languages'];
} else {
  // Handle potential errors (e.g., accessing without submitting)
  exit('Invalid request');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Language Selection</title>
</head>
<body>

<?php if ($num_languages > 0): ?>
  <h1>Select Your Languages</h1>
  <form action="submit_languages.php" method="post">
    <?php for ($i = 1; $i <= $num_languages; $i++): ?>
      <label for="language_<?php echo $i; ?>">Language <?php echo $i; ?>:</label>
      <select name="languages[]" id="language_<?php echo $i; ?>">
        <option value="">Select Language</option>
        <option value="English">English</option>
        <option value="German">German</option>
        <option value="French">French</option>
        <option value="Mandarin">Mandarin</option>
        <option value="Dutch">Dutch</option>
      </select>
      <br>
    <?php endfor; ?>
    <button type="submit">Submit Languages</button>
  </form>
<?php else: ?>
  <p>You selected none or an invalid number of languages.</p>
<?php endif; ?>

</body>
</html>
