<html>
f
<head>
  <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<style>
  body {
    font-family: 'Quicksand';
  }

  button {
    border: none;
    border-radius: 8px;
    height: 30px;
    cursor: pointer;
  }

  p {
    text-align: center;
  }

  .center {
    margin: auto;
  }
</style>
<script>function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
    document.getElementById("demo").innerHTML = element.'Kopyalandı';
  }

</script>
<?php

function generate_password()
{
  // Set the length of the password.
  $length = 5;

  // Create a list of characters to use in the password.
  $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

  // Create the password.
  $password = "";
  $password2 = "";
  $password3 = "";
  for ($i = 0; $i < $length; $i++) {
    $password .= $characters[rand(0, strlen($characters) - 1)];
  }
  for ($i = 0; $i < $length; $i++) {
    $password2 .= $characters[rand(0, strlen($characters) - 1)];
  }
  for ($i = 0; $i < $length; $i++) {
    $password3 .= $characters[rand(0, strlen($characters) - 1)];
  }
  $password4 = $password . "-" . $password2 . "-" . $password3;
  return $password4;
}

// Generate the password.
$password = generate_password();
?>
<div class="center">
  <p id="p1"><button id="demo" onclick="copyToClipboard('#p1')">
      <?php echo $password; ?>
    </button></p>
</div>

</html>