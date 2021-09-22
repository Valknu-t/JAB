
<?php

require 'bdd/conn.php';

if (!isset($_SESSION['mail'])) {
    echo '<script>window.location.href = "login.php"</script>';
} else {
    $mail = $_SESSION['mail'];

    if (user_verify_no_exist($mail) === false) {

        echo "error";
        die();
        echo '<script>window.location.href = "login.php"</script>';
    }
}

?>




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>


<p>Hello world you are log with user : <?php echo $mail ?> !</p>


</body>
</html>
