<?php
include_once('../../lib/db_config.php');
try {
    $dbh = new PDO(DB_HOST, DB_USER,DB_PASS);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = $_POST['shain_mei'];
    $kana = $_POST['shain_mei_kana'];
    $romaji = $_POST['shain_mei_romaji'];
    $mail = $_POST['shain_mail'];
    $gender = $_POST['gender'];
    $birthday = $_POST['shain_birthday'];
    $nyushabi = $_POST['nyushabi'];
    $tensekibi = $_POST['tensekibi'];
    $taishokubi = $_POST['taishokubi'];
    $department = $_POST['department'];
    $pic = $_POST['pic'];
    $remarks = $_POST['remarks'];

    $sql = 'UPDATE shain SET 
    shain_mei=:%s,shain_mei_kana=%s,shaion_mei_romaji=:%s,
    shain_mail=:%s,gender=:%s,shain_birthday=:%s,nyushabi=:%s,
    tensekibi=:%s,taishokubi=:%s,department=:%s,pic=:%s,remarks=:%s,

    $name,$kana,$romaji,$mail,$gender,$birthday,$nyushabi,
    $tensekibi,$taishokubi,$department,$pic,$remarks WHERE shain_cd = '
    
    $param =  $_POST['shain_cd'];

    $sql = $sql . $param;
    var_dump($sql);
    $st = $dbh->prepare($sql);
    $st->execute();
    
}catch(PDOException $e){
    echo("ERROR!" . $e->getMessage());
}finally{
    
}

