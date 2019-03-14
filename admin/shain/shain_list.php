
<?php
include_once('../../lib/db_config.php');
try {
  $pdo = new PDO(DB_HOST, DB_USER,DB_PASS);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  switch ($_SERVER['REQUEST_METHOD']) {
    
    case 'GET':
    $st = $pdo->query("SELECT * FROM shain ORDER BY shain_cd");
    echo json_encode($st->fetchAll(PDO::FETCH_ASSOC));
    break;
    
    case 'POST':
    $in = json_decode(file_get_contents('php://input'), true); 
    if (isset($in['shain_cd'])) {
      $st = $pdo->prepare("UPDATE shain SET 
      shain_mei=:shain_mei,shain_mei_kana=:shain_mei_kana,shaion_mei_romaji=:shaion_mei_romaji,
      shain_mail=:shain_mail,gender=:gender,shain_birthday=:shain_birthday,nyushabi=:nyushabi,
      tensekibi=:tensekibi,taishokubi=:taishokubi,department=:department,pic=:pic,remarks=:remarks
      WHERE shain_cd=:shain_cd");
    } else {
      $st = $pdo->prepare("INSERT INTO shain(
      shain_cd,shain_mei,shain_mei_kana,shaion_mei_romaji,shain_mail,gender,
      shain_birthday,nyushabi,tensekibi,taishokubi,department,pic,remarks) 
      VALUES(
        :newshain_cd,:shain_mei,:shain_mei_kana,:shaion_mei_romaji,:shain_mail,:gender,
        :shain_birthday,:nyushabi,:tensekibi,:taishokubi,:department,:pic,:remarks)");
    }
    $st->execute($in);
    break;
    
    case 'DELETE':
    $st = $pdo->prepare("DELETE FROM shain WHERE shain_cd=?");
    $st->execute([$_GET['shain_cd']]);
    break;

  }
  
  } catch (PDOException $e) {
    echo("ERROR!".$e -> getMessage());  
  }
  ?>


