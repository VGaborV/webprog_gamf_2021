<?php
if(isset( $_POST['name']))
    $name = $_POST['name'];
if(isset( $_POST['email']))
    $email = $_POST['email'];
if(isset( $_POST['message']))
    $message = $_POST['message'];
if(isset( $_POST['subject']))
    $subject = $_POST['subject'];

if (!empty($_POST)) {
    $errorMessage = '';

    if ($name === ''){
        $errorMessage = "Name nem lehet üres.";
    }
    if ($email === ''){
        $errorMessage = "Email nem lehet üres.";

    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errorMessage = "Email hibás formátumú.";
        }
    }
    if ($subject === ''){
        $errorMessage = "Tárgy nem lehet üres.";
    }
    if ($message === ''){
        $errorMessage = "Üzenet nem lehet üres.";
    }

    $dbh = new PDO('mysql:host=localhost;dbname=labor7', 'root', '',
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

    $sqlInsert = "insert into kapcsolat(id, nev, email, targy, message)
                              values(null, :name, :email, :targy, :message)";
    $stmt = $dbh->prepare($sqlInsert);
    $stmt->execute(array(':name' => $name, ':email' => $email,
        ':targy' => $subject, ':message' => $message));
    if($count = $stmt->rowCount()) {
        $newid = $dbh->lastInsertId();
        $uzenet = "A beküldés sikeres.<br>Azonosítója: {$newid}";
        $ujra = false;
    }
    else {
        $uzenet = "A regisztráció nem sikerült.";
        $ujra = true;
    }
}