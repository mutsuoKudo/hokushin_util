
<?php
$pdo = new PDO('mysql:dbname=hokushin_util', 'root');
switch ($_SERVER['REQUEST_METHOD']) {

case 'GET':
//   $page = $_REQUEST['page'];
//   //エラー処理
//   if($page == ''){
//     $page = 1;
//   }
// // pageが1より小さくならないよう設定　max()→2つのパラメータを指定して大きい方を返す
//     $page = max($page, 1);

// // 最終pageの取得
//     $sql = 'SELECT COUNT(*) FROM processor_tbl';
//     $st = $pdo->query($sql);
//     $table = mysql_fetch_assoc($st);
//     $maxPage = ceil($table['cnt'] / 5);
//     // pageがデータ数より大きくならないよう設定　min()→2つのパラメータを指定して小さい方を返す
//     $page = min($page, $maxPage);

//   $start = ($page - 1) * 5;
//   $st = $pdo->query("SELECT * FROM processor_tbl ORDER BY id LIMIT ' . $start . ',5");
  $st = $pdo->query("SELECT * FROM processor_tbl ORDER BY id LIMIT 0,5");
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


