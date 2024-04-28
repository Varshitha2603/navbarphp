<?php
    if (empty($_POST['uname'])){
        die("Username is required");
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        die("Enter valid email");
    }
    if (strlen($_POST['passwrd']) < 8){
        die("Enter eight characters");
    }
    if (! preg_match("/[a-z]/i", $_POST['passwrd'])){
        die("Enter one letter");
    }
    if (! preg_match("/[0-9]/", $_POST['passwrd'])){
        die("Enter one number");
    }
    if ($_POST['passwrd'] !== $_POST['confirmpassword']){
        die("ConfirmPassword must match with Password");
    }
    $mysqli = require __DIR__ . "/database_folder/signupdb.php";
    $sql = "INSERT INTO signuptb(UserName, EmailID, Password, ConfirmPassword) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->stmt_init();
    if(! $stmt->prepare($sql)){
        die("SQL Error: " . $mysqli->error);
    }
    $stmt->bind_param("ssss", $_POST['uname'], $_POST['email'], $_POST['passwrd'], $_POST['confirmpassword']);
    $stmt->execute();
//    echo "Sign up successfully";
    header("Location: http://localhost:8888/index.php");