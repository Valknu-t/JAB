
<?php

require 'bdd/conn.php';

if (isset($_POST["mail"]) && isset($_POST["password"])) {

    if ($_POST["mail"] != "" && $_POST["password"] != "") {

        if (filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {

            $verif_connection = user_password_verify($_POST["mail"], $_POST["password"]);

            if ($verif_connection === true) {

                $_SESSION["mail"] = $_POST["mail"];

                echo '<script>window.location.href = "index.php"</script>';
            } else {
                $error = $verif_connection;
            }

        } else {
            $error = "Format de l'email incorrect";
        }

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



<form method="POST" onsubmit="return verif_login()">
<div class="relative font-medium md:h-screen flex items-center content-center">
  <div class="mr-auto ml-auto w-full">
    <div class="w-full max-w-md mr-auto ml-auto mt-4 mb-1 text-center">
      <h1 class="text-gray-800 block text-3xl font-extrabold font-title">Connexion</h1>
    </div>
    <div class="w-full max-w-md mr-auto ml-auto mt-4">
      <div class="bg-white shadow-lg rounded-md px-8 py-8 mb-4 ml-auto mr-auto">
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-medium mb-2" for="username"> Email
             </label>
          <input class="shadow-sm appearance-none border border-gray-400 rounded w-full py-4 px-3 text-gray-700 text-sm leading-tight focus:outline-none focus:border-indigo-300" id="username" type="text" name="mail" placeholder="user@example.com" value="<?php if(isset($_POST["mail"])){echo $_POST["mail"];}?>">
        </div>
        <div class="mb-6">
          <label class="block text-gray-700 text-sm font-medium mb-2" for="username"> Mot de passe </label>
          <input class="shadow-sm appearance-none border border-gray-400 rounded w-full py-4 px-3 text-gray-700 text-sm leading-tight focus:outline-none focus:border-indigo-300" id="password" type="password" name="password" placeholder="***************">
        </div>
        <p style="color:red;margin-bottom: 10px" id="error_msg"><?php if (isset($error)) {echo $error ;}?>
        <div class="mb-6">
          <div class="grid sm:grid-cols-2 gap-4">
            <div class="text-center sm:text-left">
              <label>
                <input type="checkbox" class="mr-2">
                <span class="text-sm font-medium text-gray-700 ">Se souvenir de moi</span>
              </label>
            </div>
            <div class="text-center sm:text-right">
              <a href="#" class="text-indigo-600 font-medium text-sm duration-200 transition-colors hover:text-indigo-800">Mot de passe oublier ?</a>
            </div>
          </div>
        </div>
        <div class="mb-6">
          <button type="submit" class="bg-indigo-500 hover:bg-indigo-600 shadow-lg text-white font-semibold text-sm py-3 px-0 rounded text-center w-full hover:bg-tertiary duration-200 transition-all">
          Connexion
          </button>
          <button onclick="window.location.href = 'register.php'" style="margin-top: 10px;background-color: grey" class="bg-indigo-500 hover:bg-indigo-600 shadow-lg text-white font-semibold text-sm py-3 px-0 rounded text-center w-full hover:bg-tertiary duration-200 transition-all">
          Inscription
          </button>
        </div>
    </div>
  </div>
</div>
</form>
</body>

<script>


function verif_login(){

  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  var error_msg = document.getElementById("error_msg")

  if(username == ""){
    error_msg.textContent = ("Merci de saisir une adresse email");
    return false;
  }

  if(password == ""){
    error_msg.textContent = ("Merci de saisir un mot de passe valide");
    return false;
  }

  return true;

}

</script>


</html>
