<?php
session_start();

function create_connexion()
{

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "jab";
    $port = "3307";

    $conn = new mysqli($servername, $username, $password, $dbname, $port);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function insert($sql)
{

    $conn = create_connexion();

    if ($conn->query($sql) === true) {
        $conn->close();
        return true;
    } else {
        $conn->close();
        return false;
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

function user_verify_no_exist($mail)
{
    $conn = create_connexion();

    $sql = "SELECT id FROM membres where mail = '" . $mail . "'";
    $result = $conn->query($sql);

    $conn->close();

    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }

}

function user_password_verify($mail, $password)
{

    $conn = create_connexion();

    $sql = "SELECT * FROM membres where mail = '" . $mail . "'";

    $result = $conn->query($sql);

    $conn->close();

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $bdd_password = $row['password'];

            if (password_verify(strval($password), strval($bdd_password))) {
                return true;
            } else {
                $error = "Mot de passe inscorect";
                return $error;
            }

        }

    } else {
        $error = "Uttilisateur introuvable";
        return $error;
    }

}

