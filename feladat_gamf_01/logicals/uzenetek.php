<?php

$dbh = new PDO('mysql:host=localhost;dbname=labor7', 'root', '',
    array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');


$sql = "select * from kapcsolat order by id desc";
$sth = $dbh->query($sql);
$rows = $sth->fetchAll(PDO::FETCH_ASSOC);
