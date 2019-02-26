
<?php
$pdo = new PDO('mysql:dbname=hokushin_util', 'root');
switch ($_SERVER['REQUEST_METHOD']) {
case 'GET':
  $st = $pdo->query("SELECT * FROM processor_tbl");
  echo json_encode($st->fetchAll(PDO::FETCH_ASSOC));
  break;
case 'POST':
  $in = json_decode(file_get_contents('php://input'), true); 
  if (isset($in['id'])) {
    $st = $pdo->prepare("UPDATE processor_tbl SET ryaku=:ryaku,seishiki=:seishiki WHERE id=:id");
  } else {
    $st = $pdo->prepare("INSERT INTO processor_tbl(ryaku,seishiki) VALUES(:ryaku,:seishiki)");
  }
  $st->execute($in);
  break;
case 'DELETE':
  $st = $pdo->prepare("DELETE FROM processor_tbl WHERE id=?");
  $st->execute([$_GET['id']]);
  break;
}

?>