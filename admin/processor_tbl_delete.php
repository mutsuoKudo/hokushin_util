<?php
try {
    $dbh = new PDO('mysql:dbname=hokushin_util', 'root');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = 'DELETE FROM processor_tbl where id in ';
    $param = $_POST['id'];
    $sql = $sql . $param;
    $st = $dbh->prepare($sql);
    $st->execute();
    
}catch(PDOException $e){
    echo("ERROR!" . $e->getMessage());
}finally{
    
}

